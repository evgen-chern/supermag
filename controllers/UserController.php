<?php


class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $result = false;

        if(isset($_POST['submit'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Incorrect name(<2 symbols)';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Invalid email';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Invalid password(<6 symbols)';
            }

            if (User::checkEmailExists($email)) {
                $errors[] = 'Email already Exists';
            }

            if ($errors == false) {
                //SAVE USER
                $result = User::register($name,$email,$password);
            }

        }

        require_once (FILEPLACE . '/views/user/register.php');

        return true;
    }
}