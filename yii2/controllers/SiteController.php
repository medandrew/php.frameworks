<?php

namespace app\controllers;

use app\models\Article;
use app\models\Author;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public $news = [];

    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {
        $this->news = Article::find()->all();

        return true;
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays news.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('news', [
            'news' => Article::find()->all()
        ]);
    }

    /**
     * Displays article.
     *
     * @return string
     */
    public function actionShow($id)
    {
        $article = Article::find()->where(['id' => $id])->all();
        return $this->render('article', [
            'article' => $article[0],
            'authors' => Author::find()->all()
        ]);
    }
}
