<?php


namespace app\controllers;


//use yii\base\Controller;

class MyController extends AppController
{
    public function actionIndex($id = null, $test = null) {
        $hi = "Hello world";
        $hello = "Hello everybody!";
        $names = ['ivanov', 'petrov', 'sidorov'];
        if (!$id) {
            $id = 'test2';
        }
//        return $this->render('index', ['hello' => $hi, 'names' => $names]);
        return $this->render('index', compact('id', 'hi', 'names', 'hello', 'test'));
    }

    public function actionBlogPost() {
//        my/blog-post
        return 'Blog post';
    }
}