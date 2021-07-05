<?php
//AUTOLOAD
class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);

        require_once (FILEPLACE . '/views/site/index.php');
        return true;
    }

    public function actionContact()
    {
        $userEmail = '';
        $userText = '';
        $result = false;

        if (isset($_POST['submit'])){
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];

            $errors = false;

            //VALIDATION EMAIL
            if(!User::checkEmail($userEmail)) {
                $errors[] = 'INVALID EMAIL';
            }

            if($errors == false) {
                $adminEmail = 'chernous.eu@gmail.com';
                $message = "Text: {$userText} . From {$userEmail}";
                $subject = 'Theme';
                $result = mail($adminEmail,$subject,$message);
                $result = true;
            }
        }
        require_once (FILEPLACE . '/views/site/contact.php');
        return true;
    }
}