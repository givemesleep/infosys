<?php

class MemberInfo extends DB_Connection
{
    private $ADDMEM;
    private $UPDATE;
    private $SOFTDEL;
    private $VIEWS;

    //Add Public Function
    public function AddMember()
    {
        $ADDNEW = $this->ADDMEM = "INSERT INTO () VALUES ()";
        $DATA = [];
        $STMTADD = $this->conn->prepare($ADDNEW);
        $STMTADD->execute($DATA);

        header("location : index.php?Success=Success");
        exit();
    }
    //Update Function
    public function UpdateMember($UID) {}
    //Soft-Delete
    public function SoftDel($UID) {}
    //View Files
    public function ViewMem() {}

    //Database Security
}

?>
