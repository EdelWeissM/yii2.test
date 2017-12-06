<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 05.12.2017
 * Time: 16:03
 */

namespace app\controllers;


use app\models\Post;

class PostController extends AppController
{
    public function actionPost(){
        $posts = Post::find()->all();
        return $this->render('index', compact('posts'));
    }
}