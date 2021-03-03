<?php

$users = array("name"=>"user")

if isset($_POST["btnKlas"]){
  foreach ($users as $key=>$value){
    $chosen = $_POST["optKlas"];
    $klas = substr($key, -4);
    
    if ($klas == $chosen){
      fotos .= "<div id="foto"> <img src=""></div>";
      
    }
  }
}
?>

<form name="frmKlas" method="post">
<?php
  $klassen = array("NI", "AI");
  foreach ($klassen as $klas){
    echo "<input type='radio' name='optKlas' value='$klas'>$klas";
  }
  ?>
  <input type="submit" name="btnKlas" value="kies">
  </form>
  <?php echo $fotos; ?>
  

