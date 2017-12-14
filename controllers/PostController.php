<?php
/**
 * Created by PhpStorm.
 * User: mparkhomenko
 * Date: 05.12.2017
 * Time: 16:03
 */

namespace app\controllers;

use Yii;
use app\models\CommentForm;
use app\models\Post;
use app\models\Author;
use yii\web\HttpException;

class PostController extends AppController
{
    public function actionIndex(){
        $authors = Author::find()->with('posts')->all();
        return $this->render('index', compact('authors'));
    }

    public function actionView(){
        $id = \Yii::$app->request->get('id');
        $post = Post::findOne($id);
        if(empty($post)) throw new HttpException(404, 'Такой страници нет...');
        return $this->render('view', compact('post'));
    }

    public function actionTest()
    {
        $model = new CommentForm();

        if( $model->load(Yii::$app->request->post()) ){
            return $this->render('test', compact('model'));
        }
        return $this->render('test', compact('model'));
    }
}