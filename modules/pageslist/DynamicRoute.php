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

class DynamicRoute extends BaseObject implements UrlRuleInterface
{


    /**
     * Parses the given request and returns the corresponding route and parameters.
     * @param UrlManager $manager the URL manager
     * @param Request $request the request component
     * @return array|bool the parsing result. The route and the parameters are returned as an array.
     * If false, it means this rule cannot be used to parse this path info.
     */
    public function parseRequest($manager, $request)
    {
        $pathInfo = $request->getPathInfo();
        if (preg_match('%^(\w+)(/(\w+))?$%', $pathInfo, $matches)) {
            // Ищем совпадения $matches[1] и $matches[3]
            // с данными manufacturer и model в базе данных
            // Если нашли, устанавливаем $params['manufacturer'] и/или $params['model']
            // и возвращаем ['car/index', $params]
        }
        return false;  // данное правило не применимо
    }

    /**
     * Creates a URL according to the given route and parameters.
     * @param UrlManager $manager the URL manager
     * @param string $route the route. It should not have slashes at the beginning or the end.
     * @param array $params the parameters
     * @return string|bool the created URL, or false if this rule cannot be used for creating this URL.
     */
    public function createUrl($manager, $route, $params)
    {
        if ($route === 'module/pagelist/list/index') {
            if (isset($params['pages'])) {
                return $params['url'];
            }
        }
        return false;  // данное правило не применимо
    }
}