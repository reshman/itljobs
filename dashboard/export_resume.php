<!DOCTYPE html>
<html>
    <?php
    include("logincheck.php");
    // The function header by sending raw excel
    header("Content-type: application/vnd-ms-excel");

// Defines the name of the export file "codelution-export.xls"
    header("Content-Disposition: attachment; filename=Resumes.xls");

    include 'db.php';
// Add data table     
    ?>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Mobile</th>
                <th>Specialization</th>
                <th>Abroad Experience</th>
                <th>Indian Experience</th>
                <th>Total Experience</th>
                <th>Qualification</th>
                <th>Current Location</th>
                <th>Date of Birth</th>
                <th>Job Category</th>
                <th>Industry</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <?php
                $id = $_REQUEST['id'];
                $i = 1;
                $query = sprintf("SELECT r.user_id,r.id,r.experience,r.qualification,r.specification,r.abroad_experience,r.current_location,r.date_of_birth,r.sub_category,r.file_name, r.del_status, r.mobile, u.name as name,u.email ,jc.name as jobcatname,r.abroad_experience,r.india_experience from resume r LEFT JOIN  users u ON r.user_id = u.id LEFT JOIN job_categories jc ON r.job_category_id=jc.id WHERE r.del_status='%s'", '0');
                $result = Db::query($query);
                while ($row = mysql_fetch_array($result)) {
                    ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['specification']; ?></td>
                    <td><?php echo $row['abroad_experience'] . ' Year(s)'; ?></td>
                    <td><?php echo $row['india_experience'] . ' Year(s)'; ?></td>
                    <td><?php echo $row['experience'] . ' Year(s)'; ?></td>
                    <td><?php echo $row['qualification']; ?></td>
                    <td><?php echo $row['current_location']; ?></td>
                    <td><?php echo $row['date_of_birth']; ?></td>
                    <td><?php echo $row['jobcatname']; ?></td>
                    <td><?php echo $row['sub_category']; ?></td>                    
                </tr> 
                <?php
                //     $expire = date("F j, Y, H:i", strtotime('+1 hour'));
                //     print_r($expire);
            }
            ?>                                               
        </tbody>
    </table>

</html>