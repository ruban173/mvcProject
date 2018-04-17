<?php


class DefaultController extends Controller
{
    function indexAction(){

        $this->render('default/index');

    }
    function loginAction(){

        $this->render('default/login');

    }

    /**
     *
     */
    function registerAction(){
        $model = new RegisterForm();
        if($_SERVER[REQUEST_METHOD]=='POST') {
            $model->first_name = htmlspecialchars(trim($_POST[first_name]));
            $model->middle_name = htmlspecialchars(trim($_POST[middle_name]));
            $model->last_name = htmlspecialchars(trim($_POST[last_name]));
            $model->email = htmlspecialchars(trim($_POST[email]));
            $model->photo=$_FILES[photo];
            $model->password = htmlspecialchars(trim($_POST[password]));
            $model->double_password = htmlspecialchars(trim($_POST[double_password]));
            $photo_name=md5(rand(0,9999999999). $model->email);
            if( $model->validate() && $model->uploadFile($photo_name)){
                $user=new User();
                $user->first_name= $model->first_name;
                $user->middle_name=$model->middle_name;
                $user->last_name= $model->last_name;
                $user->email=$model->email;
                $user->type="user";
                $user->password= md5($model->password);
                $user->status="Активен";
                $user->photo=$model->photo;

                if($user->create()) $this->redirect('default/login') ;
            }
        }
        $this->render('default/register',$model);

    }
    function logoutAction(){

        $this->render('default/index');

    }

}