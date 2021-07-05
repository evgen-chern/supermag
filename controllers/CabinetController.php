<?php


class CabinetController
{
    public function actionIndex()
    {
        //GET USERID FROM SESSION
        $userId = User::checkLogged();

        //GET INFO ABOUT USER BY ID IN DB
        $user = User::getUserById($userId);

        require_once (FILEPLACE . '/views/cabinet/index.php');

        return true;
    }

    public function actionEdit()
    {
        //CHECK ID FROM SESSION
        $userId = User::checkLogged();

        //CHECK INFO FROM DB
        $user = User::getUserById($userId);

        $name = $user['name'];
        $password = $user['password'];

        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;

            if(!User::checkName($name)) {
                $errors[] = 'Invalid name(<2symbols)';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Invalid pass(<6symbols)';
            }

            if ($errors==false) {
                $result = User::edit($userId,$name,$password);
            }
        }
        require_once (FILEPLACE . '/views/cabinet/edit.php');

        return true;
    }
}