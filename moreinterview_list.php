<?php
require('db.php');

$jc=$_POST['jobcat']; 
 date_default_timezone_set('Asia/Calcutta'); 
            $i=1;
//            $query = sprintf("SELECT * FROM `jobs` where job_type='%s' AND active='%s' AND del_status='%s'",$jc,1,0);
            $query = sprintf("SELECT inv.name,inv.company_name,inv.schedule_date,inv.schedule_time,inv.venue,inv.interview,inv.contact,us.email FROM interviews as inv JOIN users as us ON inv.user_id=us.id WHERE inv.interview='$jc' AND inv.active='1' AND inv.del_status='0'");
            $result = Db::query($query);
            if(mysql_num_rows($result) > 0){
            ?>  
 <table class="table">
						<thead>
							<tr>
                                                            <th>Sl.No</th>
						            <th>Job Name</th>
                                                            <th>Company Name</th>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Venue</th>
                                                            <th>Contact</th>
	
							</tr>
						</thead>
                                                                                            
                                                <tbody>
                                                <?php
                                                   while ($row = mysql_fetch_array($result)) {

                                                ?>
						<tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['company_name']; ?></td>
                                                    <td><?php echo date("d-m-Y",  strtotime($row['schedule_date'])); ?></td>
                                                    <td><?php echo $row['schedule_time']; ?></td>
                                                    <td><?php echo $row['venue']; ?></td>
                                                    <td><?php echo $row['contact']; ?></td>
			                       </tr>
                                                  </tbody> 
                                                  <?php $i++; }  ?>
                                            
					</table>
<?php
            }else { ?>
                                              
                                                  <div class="col-md-12"><h2 style="text-align: center; margin-bottom: 10px; font-size: 20px;">NO MATCHES FOUND</h2></div>
                                               
                                                 <?php } ?>