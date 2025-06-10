<?php

//Isset or the submitted forms first (POST Method)

if (isset($_POST["submit"])) {
    //Post Method Form inputs

    //Require the Model, Controller and the Database
    require_once "../Model/config.db.php"; //Database Connection
    require_once "../Model/mem-info.class.php"; //Model
    require_once "../Controller/newmem.ctrl.php"; //Controller

    //Add the Controller and Initiate an instance to the public function that will run onto model
    $Member = new MemberInfoCtrl();
    //Add the public function
}

?>
