function array_has($array, $key){
  $key_array =  explode('.', $key);
  $count = count($key_array);
  for($i = 0; $i < $count; $i++){
    if(isset($array($key_array[$i]))) {
       $array = $array($key_array[$i]); 
    } else {
      return false;    
    }
  }
  
  return true;
}
