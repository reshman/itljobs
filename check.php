<?php
$total  = $_POST['total']; 
$year = floor($total);
$month = $total - floor($total);
$year_string = '';
if($year !=0){
   $year_string = $year.' Year(s)';
}

switch($month){
  case 0: $month_string = '0 Month(s)'; break;
  case 0.25: $month_string = '3 Month(s)'; break;
  case 0.5: $month_string = '6 Month(s)'; break;
  case 0.75: $month_string = '9 Month(s)'; break;
  default: $month_string = '';
}

$display_string = $year_string.' '.$month_string;

$data['val'] = '<input name="total" id="email" type="text" placeholder="TOTAL YEARS" value="'.$total.'" disabled=""> ';
$data['display'] = '<input name="total1" id="email" type="text" placeholder="TOTAL YEARS" value="'.$display_string.'" disabled=""> ';

echo json_encode($data);
    


        
  