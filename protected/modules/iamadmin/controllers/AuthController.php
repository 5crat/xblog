<?php

/**
 * @var $this Controller
 * Class AuthController
 */
class AuthController extends Controller
{
    public $layout = '/layouts/login';

    public $returnUrl;

    public function init(){
        parent::init();
        $this->returnUrl = Yii::app()->params['returnUrl'];
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(

            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('login','captcha'),
                'users'=>array('*'),
            ),
        );
    }
    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                /*'backColor'=>0xFFFFFF,*/
                'maxLength'=>'5',       // 最多生成几个字符
                'minLength'=>'5',       // 最少生成几个字符
                'height'=>'40',
                /*'fixedVerifyCode' => substr(md5(time()),11,5),*/
                'transparent'=>true,    //背景颜色透明
                'testLimit'=>1,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page'=>array(
                'class'=>'CViewAction',
            ),
        );
    }

    /**
     * Displays the login page
     */

    public function actionLogin()
    {
        $model=new LoginForm('login');

        // collect user input data
        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid

            if($model->validate() && $model->login())
                $this->redirect(Yii::app()->request->BaseUrl.$this->returnUrl);
        }
        // display the login form
        $this->render('login',array('model'=>$model));
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }


}