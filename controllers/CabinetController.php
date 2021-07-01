<?php


class CabinetController
{
    public function actionIndex()
    {
        require_once (FILEPLACE . '/views/cabinet/index.php');

        return true;
    }
}