<?php 
require_once 'config.php';

//POST


function storeMember($Name, $Alexis, $Bdate, $Chapter){
    global $conn;
    $SQL = "INSERT INTO tbmembers(userName, userAlexis, userBdate, chapterID, JoinedDate, is_active)
            VALUES(?,?,?,?,NOW(),1)";
    $DE = array($Name, $Alexis, $Bdate, $Chapter);
    $STMT = $conn->prepare($SQL);
    $STMT->execute($DE);

    if($STMT){
        header("Location: ../mem-masterlist.php");
        exit();
    }

}

function updateMem(){

}

function delMem(){

}

?>