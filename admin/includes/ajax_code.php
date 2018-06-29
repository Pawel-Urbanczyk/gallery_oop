<?php require_once("init.php");

    $user = new User();

    if(isset($_POST['image_name'])){

        $user->ajax_save_user_image($_POST['image_name'], $_POST['user_id']);

    }

    //////////////////////////ten blok dziala troche dziwnie bo niby isset jest true ale juz nie wyrzuca wartosci liczbowej dla zapytania...
    if(isset($_POST['photo_id'])){

        Photo::display_sidebar_data($_POST['photo_id']);


    }
    ///////////////////////////



?>