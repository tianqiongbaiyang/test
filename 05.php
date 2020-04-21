function test($date){
   $year = date('Y', strtotime($date));
   $start_date = $year . '-01-01';
   $days = round(strtotime($date) - strtotime($start_date)) / 86400;
   
   return $days;
}
