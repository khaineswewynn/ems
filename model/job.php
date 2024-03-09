<?php
include_once './includes/db.php';
class Job{
    private $con,$statement;
    public function getJobs(){
        $this->con=Database::connect();
        $sql="select * from jobs"; //string
        $this->statement=$this->con->prepare($sql); //prepare statement
        if($this->statement->execute())
        {
            $results=$this->statement->fetchAll(PDO::FETCH_ASSOC);
            //fetch for one row and fetchAll for all rows
            return $results;
        } //sql run
       

    }
}



?>