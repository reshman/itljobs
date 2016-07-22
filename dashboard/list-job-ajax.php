<script src="plugins/dataTables/jquery.dataTables.js"></script>
<script src="plugins/dataTables/dataTables.bootstrap.js"></script>
<?php
session_start();

include 'db.php';

$id    = $_GET['id'];
if ($id  == 0) {
    //die;
    return "";
}
$query = sprintf("SELECT jc.id,jc.name,j.job_listing,j.experience,j.job_location,j.created_date,j.closing_date,j.job_category_id FROM jobs as j JOIN job_categories as jc ON jc.id=j.job_category_id WHERE user_id='%s'",$id);
$result = Db::query($query);

if ( mysql_num_rows($query) ){
//$query = mysql_query("select *from doctor_details");
?>

           <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                           <tr>
                                                <th>Sl.No</th>
                                                <th>Title</th>
                                                <th>Experience</th>
                                                <th>Job Location</th>
                                                <th>Created date</th>
                                                <th>Closing date</th>
                                                <th>Name</th>
                                                <th>Status</th>
<!--                                                <th>Edit</th>
                                                <th>Delete</th>-->
                                            </tr>
                                        </thead>
                                       <tbody>
                                          <?php 
                                          $i = 1;
                                          
                                           while ($row = mysql_fetch_array($result)) {
                                          ?>
                                           
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $row['job_listing']; ?></td>
                                                    <td><?php echo $row['experience']; ?></td>
                                                    <td><?php echo $row['job_location']; ?></td>
                                                    <td><?php echo $row['created_date']; ?></td>
                                                    <td><?php echo $row['closing_date']; ?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td>
     <input <?php echo ($row['active']=='1') ? 'checked' : '';?> rowid="<?php echo $row['id'];?>" data-on="Active" data-off="Inactive" class="toggle-event" data-toggle="toggle" type="checkbox">                                
                                         </td>
<!--                                                    <td class=center><a type="button" href="edit_gallery.php?id=<?//= $row['id'] ?>" class="btn btn-primary "><i class="fa fa-edit"></i></a></td>
                                                  <td class=center><a type="button" href="javascript:void(0)" onclick="deleteConfirm('delete_gallery.php?delid=<?//= $row['id'] ?>')" class="btn btn-danger "><i class="fa fa-times"></i></a></td>-->
                                                </tr>
                                                <?php
                                                $i = $i + 1;
                                            }
                                            ?>
                                        </tbody>
                                 
                                    </table>
 <script>

    $(function() {

        $('.toggle-event').change(function() {
            //alert("asda");
            var status = $(this).prop('checked')==true?'1':'0';
            var rowId  = $(this).attr('rowid');
            url = "active_inactive.php";
            $.ajax({
                url:url,
                type:'POST',
                data:{id:rowId, status:status}
            }).done(function( data ) {
                //location.reload();
            });

        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable({
            "aaSorting": [[0, 'desc']],
            "stateSave": true
        });
    });

    //$("[data-toggle=popover]").popover();
</script>
<?php }?>