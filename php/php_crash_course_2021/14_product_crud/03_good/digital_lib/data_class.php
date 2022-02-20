<?php
include('db.php');
class data extends db
{
    private $bookpic;
    private $bookname;
    private $bookdetail;
    private $bookaudor;
    private $bookpub;
    private $branch;
    private $bookprice;
    private $bookquantity;
    private $type;

    private $book;
    private $userselect;
    private $days;
    private $getdate;
    private $returnDate;
    
    public function __construct()
    {
        echo "<br><br>";
    }

    // user login
    public function userLogin($t1, $t2)
    {
        $sql = "SELECT * FROM userdata WHERE email = '$t1' AND pass = '$t2'";
        $recordSet = $this->connection->query($sql);
        $result = $recordSet->rowCount();
        if ($result > 0) {
            foreach ($recordSet->fetchAll() as $row) {
                $logid = $row['id'];
                header("location:otheruser_dashboard.php?id=$logid");
            }
        } else {
            header("location:index.php?msg=invalid Credentials");
        }
    }
    //admin login
    public function adminLogin($t1, $t2)
    {
        $q="SELECT * FROM admin where email='$t1' and pass='$t2'";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();

        if ($result > 0) {
            foreach ($recordSet->fetchAll() as $row) {
                $logid=$row['id'];
                header("location: admin_service_dashboard.php?logid=$logid");
            }
        } else {
            header("location: index.php?msg=Invalid Credentials");
        }
    }
}
