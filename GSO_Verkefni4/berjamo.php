
<?php 

 // if($_GET["id"] == 1)

 // $img = "Myndir/berjamo.png";



 // if($_GET["id"] == 2)

 // $img = "Myndir/fjörusteinar.png";

 // if($_GET["id"] == 3)

 // $img = "Myndir/göngutur.png";

 // if($_GET["id"] == 4)

 // $img = "Myndir/klaki1.png";

 // if($_GET["id"] == 5)

 // $img = "Myndir/klaki2.png";

 // if($_GET["id"] == 5)

 // $img = "Myndir/jarnisblafjoll.png";

 // if($_GET["id"] == 5)

 // $img = "Myndir/hofn.png";

 // if($_GET["id"] == 5)

 // $img = "Myndir/flugeldar.png"
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="is">
<meta charset="utf-8">

<head>
	<link rel="stylesheet" type="text/css" href="Lokaverkefni.css">
	<!-- linkur á stafina sem eg nota -->
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
  <!-- breyta title í hvað sem er -->
	<title>Berjamo</title>
</head>
<body class="group">
	<header class="group">
        <?php require './includes/Menu.php'; ?>
    </header>
        <!-- hérna breytiru eins og berjamo.png í aðra mynd -->
        <div class="Verslun-Myndir1-2">
        <img src="<?= $img; ?>">
        </div>
            <!-- hérna skrifarðu um myndina og pantarð myndina -->
    <?php require './includes/FormLogin.php'; ?>

    <!-- Social Media Buttons -->
   <?php require './includes/SocialMediaButtons.php'; ?>
</body>
</html>