<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>priframe - <?php echo $arr["titulo"]; ?></title>
	<link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
	<ul>
		<?php 
		foreach ($this->menuItems as $key => $value) {
			if(strtolower($arr["myPage"]) == strtolower($value)){
				echo '<li><a class="active" href="'.strtolower($value).'">'.ucfirst($value).'</a></li>';
			}else{
				echo '<li><a href="'.strtolower($value).'">'.ucfirst($value).'</a></li>';
			}
			
		}
		?>
	</ul> 