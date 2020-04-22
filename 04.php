function test($string){
  $count = strlen($string);
  $mod_value = $count%3;
  
  if($mod_value != 0){
    if($mod_value == 1){
      $string = '  ' . $string;
    } else {
      $string = ' ' . $string;    
    }
  }
 $string = chunk_split($string, 3, ' ');
 
 return trim($string);

}
