<?
include 'db.php';
$id = $_POST['id'];
$sql = sprintf("SELECT i.industry_name as name FROM industries i LEFT JOIN industry_category ic ON i.id=ic.industry_id WHERE ic.category_id=%d",$id);
$result = Db::query($sql);
echo '<option selected disabled>Select Industry</option>';
while ($row = mysql_fetch_assoc($result)) {
    echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
}
