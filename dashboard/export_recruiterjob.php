<!DOCTYPE html>
<html>
    <?php
    include("logincheck.php");
    // The function header by sending raw excel
    header("Content-type: application/vnd-ms-excel");

// Defines the name of the export file "codelution-export.xls"
    header("Content-Disposition: attachment; filename=RecruiterJob.xls");

    include 'db.php';
// Add data table     
    ?>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Sl.No</th>
                <th>Reference Id</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Company Name</th>
                <th>Job Title</th>
                <th>Closing Date</th>
                <th>Location</th> 
                <th>Job Type</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            date_default_timezone_set('Asia/Kolkata');
            $today_date = date('Y-m-d');
            $query = sprintf("SELECT u.name,u.role_id,u.email,j.id,j.user_id,j.company_name,j.closing_date,j.job_listing,j.job_description,j.job_location,j.job_type,j.salary,j.del_status,j.active,j.date,j.ref_id FROM jobs as j JOIN users u ON u.id=j.user_id WHERE j.del_status='%s' AND u.role_id='%s' AND j.closing_date>='%s' ORDER BY j.id DESC", 0, 4, $today_date);

            $result = Db::query($query);
            while ($row = mysql_fetch_array($result)) {
                ?>

                <tr>
                    <td><?php echo $i; ?></td>
                    <?php
                    // force certain number/date formats to be imported as strings
                    $str = $row['ref_id'];
                    if (preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str)) {
                        $str = "$str";
                    }
                    ?>
                    <td><?php echo $str; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['company_name']; ?></td>
                    <td><?php echo $row['job_listing']; ?></td>
                    <td><?php echo $row['closing_date']; ?></td>  
                    <td><?php echo $row['job_location']; ?></td>
                    <td><?php echo $row['job_type']; ?></td>
                </tr>
                <?php
                $i = $i + 1;
            }
            ?>
        </tbody>

    </table>

</html>