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
use app\models\UploadImage;
use yii\web\UploadedFile;
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
                    //'logout' => ['post'],
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
        $rated = $model->getRated();
        $latest = $model->getLatest();
        return $this->render('index',['news' => $news,'rated' => $rated,'latest' => $latest]);
    }

    public function actionReadallnew($id){

      $new = News::findOne($id);
      $new->rated += 1;
      $new->save();
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

    public function actionFind(){

      $model = new News();
      if(isset($_POST['find'])){
        $text = $_POST['find_area'];
        $query = Yii::$app->db->createCommand("SELECT * FROM NEWS WHERE TITLE_NEW LIKE '$text%'")->queryAll();
        return $this->render('newsf',['news' => $query]);
      }
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

    public function actionProfile(){

      return $this->render('profile');
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

    public function actionUpdateprofile(){
      $model = new UploadImage();
      $path = "uploads/";
      $ses = Yii::$app->session;
        if(isset($_POST['add_img'])){
          $model->image = UploadedFile::getInstance($model, 'image');
          $model->upload();
          $user = User::findOne(Yii::$app->user->identity->username);
          $c = $model->image;
          $ses['picture'] = $path.$c;
          return $this->render('updateprofile', ['model' => $model]);
        }
        if (isset($_POST['save'])) {
          $user = User::findOne(Yii::$app->user->identity->id_user);
          $user->lastname = $_POST['lastname'];
          $user->firstname = $_POST['firstname'];
          $user->date_birth = $_POST['date_birth'];
          $user->about = $_POST['about'];
          $user->email = $_POST['email'];
          $user->img_profile = $ses['picture'];
          $user->save();
          return $this->redirect(['/site/profile']);
        }
      return $this->render('updateprofile',['model' => $model]);
    }

    public function actionAddnew(){

      $addnew = new News();
      if(isset($_POST['addnew'])){
        $addnew->title_new = $_POST['title'];
        $addnew->img_new = "qwe";
        $addnew->date_create = date('Y-m-d');
        $addnew->pre_text = $_POST['pre_text'];
        $addnew->full_text = $_POST['full_text'];
        $addnew->save();
        return $this->redirect(["/site/news"]);
      }
      return $this->render('addnew');
    }

    public function actionUpdatenew($id){

      $new = News::findOne($id);
      if (isset($_POST['edit'])) {
        $new->title_new = $_POST['title'];
        $new->pre_text = $_POST['pre_text'];
        $new->full_text = $_POST['full_text'];
        $new->save();
        return $this->redirect(['/site/news']);
      }
      return $this->render('updatenew',['new' => $new]);
    }

    public function actionDeletenew($id){

      $new = News::findOne($id);
      $new->delete();
      return $this->redirect(['/site/news']);
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

      if (isset($_POST['go'])) {
        Yii::$app->mailer->compose()
        ->setTo('simushin2013@yandex.ru')
        ->setFrom(['simushin2013@yandex.ru' => $_POST['email']])
        ->setSubject($_POST['title'])
        ->setTextBody($_POST['text'])
        ->send();
        return $this->goBack();
      }
      return $this->render('contacts');
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
