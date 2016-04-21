<?php 
require_once 'db.php';
$location = $_REQUEST['location'];
$keyword  = $_REQUEST['keyword'];
$id       = $_REQUEST['id'];

//echo $term;
?>
                            <table class="table">
						<thead>
							<tr>
                                                                <th>#</th>
								<th>Alerts</th>
                                                                <th>Delete</th>
	
							</tr>
						</thead>
                                                
                                                <?php 
                                            
                                                  
                                                  $sql          = sprintf("INSERT INTO alerts SET user_id = '%s', jobcategory = '%s', location = '%s'", $id, $keyword, $location);  
                                                  $resultsql    = Db::query($sql);
                                                  $i=1;
                                                 
                                                  $query = sprintf("SELECT id,a.user_id, a.jobcategory, a.location from alerts a WHERE user_id='%s'",$id);   
                                                  $result = Db::query($query);
                                                   while ($row = mysql_fetch_array($result)) {
                                                    $jobcat=$row['jobcategory'];
                                                       $location=$row['location'];
                                                ?>
                                                <tbody>
						<tr>
                                                       <td><?php echo $i; ?></td>
                                                       <td><a href="alert_joblist.php?jobcat=<?php echo $jobcat; ?>&loc=<?php echo $location; ?>"><?php echo $row['jobcategory']; ?> in <?php echo $row['location']; ?></a></td>
                                                       <td><a href="delete_alert.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="fa fa-times"></span></a></td>

						</tr>
                                                </tbody>
						
                                                <?php $i++; } ?>
					
					</table>



			

