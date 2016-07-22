<!DOCTYPE html>
<html>
    <?php include("logincheck.php"); 
  // The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=Job.xls");
 
include 'db.php';
// Add data table     
?>
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sl.No</th>
                                                <th>Reference Id</th>
                                                <th>Category</th>
                                                <th>Industry</th>
                                                <th>Job Description</th>
                                                <th>Experience</th>
                                                <th>Job Location</th>
                                                <th>Closing date</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            date_default_timezone_set('Asia/Kolkata');
                                            $today_date = date('Y-m-d');
                                            $query = sprintf("SELECT jc.id,jc.name,j.id as jobid,j.job_listing,j.job_description,j.experience,j.job_location,j.created_date,j.closing_date,j.job_category_id,j.active,j.job_order,j.ref_id FROM jobs as j JOIN job_categories as jc ON jc.id=j.job_category_id WHERE del_status='%s' AND closing_date>='%s' AND j.job_order!='%d' ORDER BY job_order", 0, $today_date, 0);


                                            $result = Db::query($query);
                                            while ($row = mysql_fetch_array($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $row['ref_id']; ?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['job_listing']; ?></td>
                                                    <td>
                                                        <?php 
                                                        if($row['job_description']=='PDF Attached'){
                                                            echo $row['job_description'].' - <a href="../jobdescriptions/'.$row['ref_id'].'.pdf" target="_BLANK">View Here</a>'; 
                                                        } else {
                                                        echo $row['job_description']; 
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?php echo $row['experience']; ?></td>
                                                    <td><?php echo $row['job_location']; ?></td>
                                                    <td><?php echo $row['closing_date']; ?></td>
                                                    
                                                    
                                                </tr>
                                                <?php
                                                $i = $i + 1;
                                            }
                                            //jobs with order id zero
                                            $qry = sprintf("SELECT j.user_id,jc.id,jc.name,j.id as jobid,j.job_listing,j.experience,j.job_location,j.created_date,j.closing_date,j.job_category_id,j.active,j.job_order,j.ref_id FROM jobs as j JOIN job_categories as jc ON jc.id=j.job_category_id WHERE j.del_status='%s' AND closing_date>='%s' AND j.job_order=0 ORDER BY user_id", 0, $today_date);

                                            $res = Db::query($qry);
                                            while ($row = mysql_fetch_array($res)) {

                                                $filqry = sprintf("SELECT role_id FROM users WHERE id=%d", $row['user_id']);
                                                $filres = Db::query($filqry);
                                                $filrow = mysql_fetch_assoc($filres);
                                                if ($filrow['role_id'] == 1 || $filrow['role_id'] == 2) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $row['ref_id']; ?></td>
                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><?php echo $row['job_listing']; ?></td>
                                                        <td>
                                                        <?php 
                                                        if($row['job_description']=='PDF Attached'){
                                                            echo $row['job_description'].' - <a href="../jobdescriptions/'.$row['ref_id'].'.pdf" target="_BLANK">View Here</a>'; 
                                                        } else {
                                                        echo $row['job_description']; 
                                                        }
                                                        ?>
                                                        </td>
                                                        <td><?php echo $row['experience']; ?></td>
                                                        <td><?php echo $row['job_location']; ?></td>
                                                        <td><?php echo $row['closing_date']; ?></td>
                                                        
                                                    </tr>
                                                    <?php
                                                }
                                                $i = $i + 1;
                                            }
                                            ?>
                                        </tbody>

                                    </table>
                                
</html>