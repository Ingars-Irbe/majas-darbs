<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sākums</title>
    <link href="./css/reset.css" rel="stylesheet">
    <link href = "./libs/bootstrap/css/bootstrap.css" rel ="stylesheet">
    <script src="./libs/jQuery/jquery2.1.4.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.js"> </script>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/css.css">
</head>
<body>
<header class="virsraksts">Kalendārs.lv</header>


<nav class="navbar navbar-inverse navbar-custom">
    <div class="container-fluid krasa">
        <div class="navbar-header krasa">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " href="./index">Kalendārs.lv</a>
        </div>
        <div class="collapse navbar-collapse bottons" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="./index">Sākums</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Galereja
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./Foto">Foto</a></li>
                        <li><a href="./Video">Video</a></li>
                    </ul>
                </li>
                <li><a href="./kontakti">Kontakti</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="container">
    <section class="row">
        <div class="col-md-2">
            <p></p>			  
        </div>		
		<div class="col-md-8">
			<form action="kontakti" method="post">
				<div class="form-group">
					<label for="name">Vārds:</label>
					<input type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
					<label for="name">Uzvārds:</label>
					<input type="text" class="form-control" id="surname" name="surname">
				</div>
				<div class="form-group">
					<label for="email">E-pasts:</label>
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				</div>
				<div class="form-group">
					<label for="name">Telefona numurs:</label>
					<input type="number" class="form-control" id="mobile" name="mobile">
				</div>
				<div class="form-group">
					<label for="name">Jūsu jautājums:</label>
					<textarea name="question" id="question" class="form-control" rows="5" id="comment"></textarea>
				</div>
				<button type="submit" class="btn btn-primary" name="send" >Nosūtīt</button>
			</form>
		</div>
		<div class="col-md-2">
            <p></p>			  
        </div
    </section>
</section>

<?php
	if(isset($_POST['send'])){
		echo "<b>Vārds: </b>{$_POST['name']} <b/>";
		echo "<b>Uzvārds: </b>{$_POST['surname']} <br/>";
		echo "<b>E-pasts: </b>{$_POST['email']} <br/>";
		echo "<b>Telefona numurs: </b>{$_POST['mobile']} <br/>";
		echo "<b>Jūsu jautājums: </b>{$_POST['question']}";
	}
?>



</body>
</html>