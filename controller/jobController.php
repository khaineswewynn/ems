<?php
include_once './model/job.php';

class JobController{
    private $job;
    function __construct(){
        $this->job=new Job();
    }

    public function getJobs()
    {
       return $this->job->getJobs();
    }

}



?>