<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);

    if(isset($_POST['submit'])){
        require_once('../classes/registratie_class.php');
        $nieuwsbrief = new Nieuwsbrief();
        $nieuwsbrief->addMember($_POST['voornaam'], $_POST['achternaam'], $_POST['email'], $_POST['telefoonnummer']);    
    }
?>

<!doctype html>
<html lang="nl">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../css/sub_style.css">
	<title>Opdracht HTML/CSS</title>
</head>
	<body>
		<div id="container">
			<div id="header">
				<div id="head1">
					<div id="kop">
						<h1 class="head1_kop">Martin Garrix</h1>
                    </div>
					<div id="socialmedia">
						<i class="fa fa-twitter"></i>
						<i class="fa fa-facebook"></i>
						<i class="fa fa-google-plus"></i>
						<i class="fa fa-rss"></i>
						<i class="fa fa-pinterest"></i>
					</div>
                </div>
                <div id="header_gradient">
                    <nav>
                        <a href="../index.html">Home | </a>
                        <a href="aboutus.html">About Us | </a>
                        <a href="#">FAQ | </a>
                        <a href="#">Staff | </a>
                        <a href="#">Blog | </a>
                        <a href="#">Contacts</a>    
                    </nav>
                </div>
			</div>
			<div id="content1">
                <form action="registratie_formulier.php" method="post">
                    Voornaam<br>
                    <input type="text" name="voornaam"><br>
                    Achternaam<br>
                    <input type="text" name="achternaam"><br>
                    E-mail<br>
                    <input type="email" name="email"><br>
                    Telefoonnummer<br>
                    <input type="number" name="telefoonnummer" size="10" min="0"><br>
                    <input type="submit" name="submit" value="submit">
                </form>
			</div>
			<div id="footer">
                
			</div>
		</div>
	</body>
</html>