<?php 
if(count($errors)>0){
    foreach($errors as $error){
        echo "<div style='color:red;text-align:center;'>$error</div>";
    }
}
?>