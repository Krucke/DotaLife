<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\User;
use app\models\Users;
use app\models\News;
use app\models\Comments;
use yii\web\IdentityInterface;
use app\models\Heroes;
use app\models\Items;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
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
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new News();
        $news = $model->getNews();
        return $this->render('index',['news' => $news]);
    }

    public function actionReadallnew($id){

      $new = News::findOne($id);
      $comment = Comments::find()->where(['new_id' => $id])->all();
      return $this->render('allnew',['new' => $new,'comments' => $comment]);
    }

    public function actionHeroes(){

      $model = new Heroes();
      $heroesS = $model->getHeroesS();
      $heroesA = $model->getHeroesA();
      $heroesI = $model->getHeroesI();
      return $this->render('heroes',['heroesS' => $heroesS,'heroesA' => $heroesA,'heroesI' => $heroesI]);
    }

    public function actionHero($id){

      $hero = Heroes::findOne($id);
      return $this->render('hero',['hero' => $hero]);
    }

    public function actionItems(){
      $model = new Items();
      $items = $model->getItems();
      return $this->render('items',['items' => $items]);
    }

    public function actionOneitem($id){

      $item = Items::findOne($id);
      return $this->render('oneitem',['item' => $item]);
    }

    public function actionLeavecomment($id){
      $comment = new Comments();
      if (isset($_POST['add_comment'])) {
        $text = $_POST['text_comment'];
        $comment->author_id = Yii::$app->user->identity->id_user;
        $comment->message = $text;
        $comment->new_id = $id;
        $comment->date_com = date('Y-M-d');
        $comment->save();
        return $this->render('/site/readallnew?id='.$id);
      }
    }

    public function actionNews(){

      $model = new News();
      $news = $model->getNews();
      return $this->render('news',['news' => $news]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
      return $this->render('login');
    }

    public function actionSignin(){
      $model = new LoginForm();
      if (isset($_POST['sign'])) {
        $username = $_POST['login'];
        $password = $_POST['password'];
        $user = User::findOne(['username' => $username]);
        if($user!=null){
          Yii::$app->user->login($user);
          return $this->redirect(['/site']);
        }
        else{
          echo "Не прав";
        }
      }
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
