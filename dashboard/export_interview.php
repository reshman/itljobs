<!DOCTYPE html>
<html>
    <?php
    include("logincheck.php");
    // The function header by sending raw excel
    header("Content-type: application/vnd-ms-excel");

// Defines the name of the export file "codelution-export.xls"
    header("Content-Disposition: attachment; filename=Interview.xls");

    include 'db.php';
// Add data table     
    ?>
    <table id="example2" class="table table-bordered table-hover">

        <thead>
            <tr>
                <th>Sl.No</th>
                <th>Job Title</th>
                <th>Candidate Name</th>

                <th>Industry</th>
                <th>Specialization</th>
                <th>Abroad experience</th>
                <th>Indian experience</th>
                <th>Total Experience</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Current Location</th>
                <th>Applied date</th>
                <th>Job posted by</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $qry = sprintf("SELECT i.id,i.name as title,i.user_id as postid,ia.interview_id,ia.id as apid,ia.created_date,u.name,u.email,ia.user_id as userid FROM interviews_applied ia LEFT JOIN interviews i ON ia.interview_id=i.id LEFT JOIN users u ON ia.user_id = u.id ORDER BY ia.id DESC");
            $res = Db::query($qry);
            $i = 1;
            date_default_timezone_set('Asia/Kolkata');
            $today_date = date('Y-m-d');

            while ($row = mysql_fetch_array($res)) {

                $user_id = $row['userid'];

                $query = sprintf("SELECT * FROM resume LEFT JOIN job_categories ON resume.job_category_id=job_categories.id WHERE resume.user_id='%s'", $user_id);
                $result = Db::query($query);
                $rw = mysql_fetch_array($result);
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $rw['sub_category']; ?></td>
                    <td><?php echo $rw['specification']; ?></td>
                    <td><?php echo $rw['abroad_experience']; ?></td>
                    <td><?php echo $rw['india_experience']; ?></td>
                    <td><?php echo $rw['experience']; ?></td>
                    <?php
                    // force certain number/date formats to be imported as strings
                    $str = $rw['mobile'];
                    if (preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str)) {
                        $str = "$str";
                    }
                    ?>
                    <td><?php echo $str; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $rw['current_location']; ?></td>
                    <?php
                    $date = $row['created_date'];
                    $regdate = date("d-m-Y", strtotime($date));
                    $regtime = date("h:i:sa", strtotime($date));
                    ?>
                    <td><?php echo $regdate; ?> at <?php echo $regtime; ?></td>
                    <?php
                    $admin_id = $row['postid'];
                    $query = sprintf("SELECT name FROM users WHERE id='%s'", $admin_id);
                    $result = Db::query($query);
                    $rowres = mysql_fetch_assoc($result);
                    $jpid = $rowres['name'];
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