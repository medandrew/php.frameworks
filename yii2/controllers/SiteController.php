<?php

namespace app\controllers;

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
        $file = file(__DIR__ . '/../models/news.php', FILE_IGNORE_NEW_LINES);
        foreach ($file as $record) {
            $this->news[] = explode('|', $record);
        }
        //if (isset($_SERVER['X-USERNAME']) && ($_SERVER['X-USERNAME'] === 'admin')) {
        //    if (isset($_SERVER['X-PASSWORD']) && ($_SERVER['X-PASSWORD'] === hash_hmac('ripemd160', '123456', 'strawberry'))) {
                return true;
        //    }
        //}
        //header('HTTP/l.1 401 Unauthorized');
        //die();
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
            'news' => $this->news
        ]);
    }

    /**
     * Displays article.
     *
     * @return string
     */
    public function actionShow($id)
    {
        return $this->render('article', [
            'news' => $this->news,
            'article' => $this->news[--$id]
        ]);
    }
}
