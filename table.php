<?php
function drawTable($cols,$rows, $color){
 
  echo "<table border='2'>\n";
  for($i=1;$i<=$rows;$i++){
    echo "<tr>\n";
    for($j=1; $j<=$cols; $j++){
      if($i==1 || $j==1){echo "\t\t<th style='background:$color'>".$i*$j."</th>\n";}
      else{echo "\t\t<td>".$i*$j."</td>\n";}
    }
    echo "</tr>";
  }
  echo "</table>";
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$cols = abs((int) $_POST['cols']);
$rows = abs((int) $_POST['rows']);
$color = trim(strip_tags($_POST['color']));
}
else{
$cols = ($cols) ? $cols : 10;
$rows = ($rows) ? $rows : 10;
$color = ($color) ? $color : 'yellow';
}

 


?>

<!DOCTYPE html>
<html>
<head>
  <title>Таблица умножения</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

    <!-- Область основного контента -->
    <form action='<?= $_SERVER['REQUEST_URI']?>' method="POST">
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="<?php echo $cols; ?>" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="<?php echo $rows; ?>" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="<?php echo $color; ?>" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form><br>
    <!-- Таблица -->
    <?php


drawTable($cols, $rows, $color);

	  ?>
    <!-- Таблица -->
    <!-- Область основного контента -->
 
</body>

</html>