<!DOCTYPE html>
<html>
    <?php
    include("logincheck.php");
    // The function header by sending raw excel
    header("Content-type: application/vnd-ms-excel");

// Defines the name of the export file "codelution-export.xls"
    header("Content-Disposition: attachment; filename=JobApplication.xls");

    include 'db.php';
// Add data table     
    ?>
    <table id="example2" class="table table-bordered table-hover">

        <thead>
            <tr>
                <th>Sl.No</th>
                <th>Job Title</th>
                <th>Industry</th>
                <th>Candidate Name</th>              
                <th>Date of Birth</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Current Location</th>
                <th>Qualification</th>
                <th>Specialization</th>
                <th>Abroad experience</th>
                <th>Indian experience</th>
                <th>Total Experience</th>
                <th>Applied date</th>
                <th>Job posted by</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $qry = sprintf("SELECT js.id,js.job_listing,js.user_id as jobuserid,ja.id as apid,ja.job_id,ja.user_id,ja.created_date,us.name,us.email FROM jobs as js JOIN jobs_applied as ja ON js.id = ja.job_id JOIN users as us ON ja.user_id = us.id ORDER BY ja.id DESC");
            $res = Db::query($qry);
            $i = 1;
            date_default_timezone_set('Asia/Kolkata');
            $today_date = date('Y-m-d');
            while ($row = mysql_fetch_array($res)) {
                $user_id = $row['user_id'];
                $query = sprintf("SELECT * FROM resume LEFT JOIN job_categories ON resume.job_category_id=job_categories.id WHERE resume.user_id='%s'", $user_id);
                $result = Db::query($query);
                $rw = mysql_fetch_assoc($result);
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['job_listing']; ?></td>
                    <td><?php echo $rw['sub_category']; ?></td>
                    <td><?php echo $row['name']; ?></td>                
                    <td><?php echo $rw['date_of_birth']; ?></td>
                    <td><?php echo $rw['mobile']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $rw['current_location']; ?></td>
                    <td><?php echo $rw['qualification']; ?></td>
                    <td><?php echo $rw['specification']; ?></td>
                    <td><?php echo $rw['abroad_experience']; ?></td>
                    <td><?php echo $rw['india_experience']; ?></td>
                    <td><?php echo $rw['experience']; ?></td>
                    <?php
                    $date = $row['created_date'];
                    $regdate = date("d-m-Y", strtotime($date));
                    $regtime = date("h:i:s a", strtotime($date));
                    ?>
                    <td><?php echo $regdate; ?> at <?php echo $regtime; ?></td>
                    <?php
                    $admin_id = $row['jobuserid'];
                    $query = sprintf("SELECT name FROM users WHERE id='%s'", $admin_id);
                    $result = Db::query($query);
                    $rowres = mysql_fetch_assoc($result);
                    $jpid = $rowres['name'];
                    
                    $sql = sprintf("SELECT * FROM users WHERE id=%d",$user_id);
                    $resl = Db::query($sql);
                    $rowapp = mysql_fetch_assoc($resl);
                    ?>
                    <td><?php echo $jpid; ?></td>
                </tr>
                <?php
                $i = $i + 1;
            }
            ?>
        </tbody>

    </table>

</html>