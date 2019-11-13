<html>
<style>
	.bgpage{ background #00FFFF;
float:right;
	}
</style>

<div class="bgpage">
FILMES EM CARTAZ<BR>
</div>

<?php
  for($i =1; $i < 9; $i++){
  echo 	"<br><img src='img/IMG_0".$i.".jpg' height='292' width='182'><br>";
  echo  "IMG_0".$i.".jpg<br><br>";
}
?>

</html>