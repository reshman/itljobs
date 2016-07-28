<!DOCTYPE html>
<html>
    <?php
    include("logincheck.php");
    // The function header by sending raw excel
    header("Content-type: application/vnd-ms-excel");

// Defines the name of the export file "codelution-export.xls"
    header("Content-Disposition: attachment; filename=OwnInterview.xls");

    include 'db.php';
// Add data table     
    ?>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Sl.No</th>
                <th>Position</th>
                <th>Job Category</th>
                <th>Industry</th>
                <th>Description</th>
                <th>Salary</th>
                <th>Company Name</th>
                <th>Schedule date</th>
                <th>Time</th>
                <th>Venue</th>
                <th>Interview</th>
                <th>Co ordinator</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
            <?php
            session_start();
            $id = $_SESSION['id'];
            $i = 1;
            date_default_timezone_set('Asia/Kolkata');
            $today_date = date('Y-m-d');
            $query = sprintf("SELECT iv.id as intId,iv.id,iv.schedule_date,iv.salary,iv.country,iv.user_id,iv.name,iv.description,iv.active,iv.company_name,iv.schedule_time,iv.venue,iv.interview,iv.contact,iv.coordinator,jc.name as jobcat,iv.industry FROM interviews as iv WHERE iv.schedule_date>='%s' AND iv.del_status='%s' AND iv.user_id='%s' ORDER BY schedule_date", $today_date, 0, $id);

            $result = Db::query($query);
            while ($row = mysql_fetch_array($result)) {
                ?>

                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['jobcat']; ?></td>
                    <td><?php echo $row['industry']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['salary']; ?></td>
                    <td><?php echo $row['company_name']; ?></td>
                    <td><?php echo $row['schedule_date']; ?></td>
                    <td><?php echo $row['schedule_time']; ?></td>
                    <td><?php echo $row['venue']; ?></td>
                    <td><?php echo $row['interview']; ?></td>
                    <td><?php echo $row['coordinator'];?></td>
                    <?php
                    // force certain number/date formats to be imported as strings
                    $str = $row['contact'];
                    if (preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str)) {
                        $str = "$str";
                    }
                    ?>
                    <td><?php echo $str; ?></td>
                    
                </tr>
                <?php
                $i = $i + 1;
            }
            ?>
        </tbody>

    </table>

</html>