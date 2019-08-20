<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/style.css">
	<title>PriFrame | <?php echo $arr["titulo"]; ?></title>
</head>
<body class="d-flex flex-column">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<span class="navbar-brand">PriFrame</span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<?php 
				foreach ($this->getMenuItems() as $key => $value) {
					if(strtolower($arr["myPage"]) == strtolower($value)){
						echo '<a class="nav-item nav-link active" href="'.strtolower($value).'">'.ucfirst($value).'<span class="sr-only">(current)</span></a>';
					}else{
						echo '<a class="nav-item nav-link" href="'.strtolower($value).'">'.ucfirst($value).'</a>';
					}
				}
				?>
			</div>
		</div>
	</nav>
