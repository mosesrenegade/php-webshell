<?php 
  if (isset($_SERVER['HTTP_AUTHORIZATION'])) {
    echo "Token Set"; } else {
    var_dump($_SERVER); }
?>
