<?php
include_once 'layouts/sidebar.php';
include_once 'controller/jobController.php';

$job_controller=new JobController();
$job_results=$job_controller->getJobs();
?>
<div class="main">
    <div class="row">
        <div class="col-md-12">
        <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Min Salary</th>
                <th>Max Salary</th>   
                <th>Actions</th>             
            </tr>
        </thead>
        <tbody>
                <?php
                    foreach($job_results as $job){
                        echo "<tr>";
                        echo "<td>".$job['job_id']."</td>";
                        echo "<td>".$job['job_title']."</td>";
                        echo "<td>".$job['min_salary']."</td>";
                        echo "<td>".$job['max_salary']."</td>";
                        echo "<td><a class='btn btn-success mx-2' href='job.php?id=".$job['job_id']."'>View</a><a class='btn btn-warning mx-2'>Edit</a><a class='btn btn-danger mx-2'>Delete</a></td>";
                        echo "</tr>";
                        
                    }
                ?>
        </tbody>
    </table>
        </div>
    </div>
    
</div>
<?php
include_once 'layouts/footer.php';
?>