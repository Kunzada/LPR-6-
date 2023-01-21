<?php


    function drawMenu($menu,$vertical=true )
{
  if($vertical ==true){
foreach ($menu as $value) {
      echo "<ul>";
			echo "<li>";
			echo "<a href='{$value['href']}'>  {$value['link']}  </a>"; // аналог записи в html: <a href = 'index.php'> Домой </a>
			echo "</li>";
		echo "</ul>";
      
    }
  }
  else{
    foreach ($menu as $value) {
    
    echo "<a href='{$value['href']}'>  {$value['link']}  </a>"; // аналог записи в html: <a href = 'index.php'> Домой </a>
  
  }
  
}
}
?>