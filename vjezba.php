
<?php
 echo '<table border="1">';

include 'data.php';


for ($i=0; $i < 10; $i++) { 
  # code...
}


foreach ($data as $key => $value) {
  echo '<tr>';
  echo '<th>'.$key.'</th>';
  echo '<th>' . $value["ime"] . '</th>';
  echo '<th>' . $data[$key]["prezime"] . '</th>';
  echo '<th>' . $data[$key]["datum"] . '</th>';
  echo '<th>' . $data[$key]["placeno"] . '</th>';
  echo '</tr>';
}
  
?>

