<?php


class UserController
{
    public function actionRegister()
    {
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if(isset($name)) {
                echo $name;
            }
            if(isset($email)) {
                echo $email;
            }
            if(isset($password)) {
                echo $password;
            }
        }

        require_once (FILEPLACE . '/views/user/register.php');

        return true;
    }
}