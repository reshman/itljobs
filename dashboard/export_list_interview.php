<!DOCTYPE html>
<html>
    <?php
    include("logincheck.php");
    // The function header by sending raw excel
    header("Content-type: application/vnd-ms-excel");

// Defines the name of the export file "codelution-export.xls"
    header("Content-Disposition: attachment; filename=InterviewList.xls");

    include 'db.php';
// Add data table     
    ?>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Sl.No</th>
                <th>Job Title</th>
                <th>Job Category</th>
                <th>Industry</th>
                <th>Schedule date</th>
                <th>Name</th>
                <th>Company Name</th>
                <th>Country</th>
                <th>Salary</th>
                <th>Time</th>
                <th>Venue</th>
                <th>Description</th>
                <th>Interview</th>
                <th>Coordinator</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            date_default_timezone_set('Asia/Kolkata');
            $today_date = date('Y-m-d');
            $query = sprintf("SELECT us.id,us.name,iv.id as intId,jc.name as job_title,iv.schedule_date, iv.name as jobname,iv.description,iv.schedule_time,iv.company_name,iv.venue,iv.interview,iv.contact, iv.user_id,iv.active,iv.del_status,iv.coordinator,iv.salary,iv.country,iv.industry,jc.name as jobcat FROM interviews as iv INNER JOIN users as us ON us.id=iv.user_id INNER JOIN job_categories as jc ON iv.title=jc.id WHERE iv.schedule_date>='%s' AND iv.del_status='%s' ORDER BY schedule_date", $today_date, 0);

            $result = Db::query($query);
            while ($row = mysql_fetch_array($result)) {
                ?>

                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['jobname']; ?></td>
                    <td><?php echo $row['jobcat']; ?></td>
                    <td><?php echo $row['industry']; ?></td>
                    <td><?php echo $row['schedule_date']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['company_name']; ?></td>
                    <td><?php echo $row['country']; ?></td>
                    <td><?php echo $row['salary']; ?></td>
                    <td><?php echo $row['schedule_time']; ?></td>
                    <td><?php echo $row['venue']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['interview']; ?></td>
                    <td><?php echo $row['coordinator']; ?></td>
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