<!DOCTYPE html>
<html>
    <?php
    include("logincheck.php");
    // The function header by sending raw excel
    header("Content-type: application/vnd-ms-excel");

// Defines the name of the export file "codelution-export.xls"
    header("Content-Disposition: attachment; filename=Employers.xls");

    include 'db.php';
// Add data table     
    ?>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Sl.No</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Email</th>
                <th>Enquiry Requirement</th>
                <th>Company Name</th>
                <th>Country</th>
                <th>Mobile</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $query = sprintf("SELECT u.id as uid,u.name,u.email,r.designation,u.active,r.designation,r.user_id,r.search_allowed,r.country from employers r LEFT JOIN  users u ON r.user_id = u.id  WHERE role_id='%s' AND u.del_status='%s'", '4', '0');
            $result = Db::query($query);
            while ($row = mysql_fetch_array($result)) {
                ?>

                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['designation']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['enquiry_requirement']; ?></td>
                    <td><?php echo $row['company_name']; ?></td>
                    <td><?php echo $row['country']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                </tr>
                <?php
                $i = $i + 1;
            }
            ?>
        </tbody>

    </table>

</html>