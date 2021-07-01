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
}