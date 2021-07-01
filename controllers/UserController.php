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

    public function actionLogin()
    {
        $email = '';
        $password = '';

        if(isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            //VALIDATION
            if(!User::checkEmail($email)) {
                $errors[] = 'Invalid email';
            }
            if(!User::checkPassword($password)) {
                $errors[] = 'Invalid pass(<6symbol)';
            }

            //CHECK FOR USER EXISTENCE
            $userId = User::checkUserData($email,$password);

            if ($userId == false) {
                //IF NOT -> ERROR
                $errors[] = 'ERROR EMAIL OR PASSWORD';
            } else {
                //ELSE REMEMBER USER
                User::auth($userId);
                //RELOCATE IN CABINET
                header("Location: /cabinet/");
            }

        }
        require_once (FILEPLACE . '/views/user/login.php');

        return true;
    }

    public function actionLogout()
    {
        //LOGOUT
        unset($_SESSION["user"]);
        header("Location: /");
    }
}