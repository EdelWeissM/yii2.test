<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 19.12.2017
 * Time: 11:44
 */

namespace app\modules\pageslist;

use yii\base\BaseObject;
use yii\web\Request;
use yii\web\UrlManager;
use yii\web\UrlRuleInterface;
use app\modules\pageslist\models\Page;

class DynamicRoute extends BaseObject implements UrlRuleInterface
{

    /**
     * * Parses the given request and returns the corresponding route and parameters.
     * @param UrlManager $manager the URL manager
     * @param Request $request the request component
     * @return array|bool
     * If false, it means this rule cannot be used to parse this path info.
     */
    public function parseRequest($manager, $request)
    {
        $pathInfo = $request->getPathInfo();
        $matches = explode("/", $pathInfo);

        if (count($matches)) {
            $parent_id = null;
            foreach ($matches as $url){
                $page = Page::find()->where([
                    'url' => $url,
                    'hidden' => 0,
                    'parent_id'=> $parent_id
                ])->one();
                if (!$page) {
                    return false;
                }
                $parent_id = $page->parent_id;
            }
            return ['pageslist/list/page', ['article' => $page]];
        }
        return false;
    }


    /**
     * * Creates a URL according to the given route and parameters.
     * @param UrlManager $manager the URL manager
     * @param string $route the route. It should not have slashes at the beginning or the end.
     * @param array $params the parameters
     * @return array|bool the created URL, or false if this rule cannot be used for creating this URL.
     */
    public function createUrl($manager, $route, $params)
    {
        if ($route === 'pageslist/list/page') {
            return $params['article']['url'];
        }
        return false;  // данное правило не применимо
    }
}