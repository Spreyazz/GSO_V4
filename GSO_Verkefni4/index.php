<!--síða sem selur ljósmyndir sem er búið að prenta út og sendir heim til notanda, notandi borgar í gegnum netið með paypal
forsiða stutt lysing og slideshow samskipta miðlar fb instagram, pintrest,
síða 2 allar myndir hægt verður að klikka á hverja og þá upnast hún á annari síðu í stærri stærð-->
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<link rel="stylesheet" type="text/css" href="Lokaverkefni.css">
	<!-- linkur á stafina sem eg nota -->
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
	<title>GSÖ_Verkefni3_BAJ</title>
    <link rel="icon" type="image/ico" href="VSH_Skilaverkefni2_BAJ.png">
</head>
<!-- <div class="LOGO">
<img src="VSH_Skilaverkefni2_BAJ.svg">-->
</div>
<body class="group liturbody2">
	<header class="group">
    <?php require './includes/Menu.php'; ?>
	    <!-- <input type="checkbox" id="menu-toggle">
	    <label for="menu-toggle"><span>&#9776;</span></label> -->
	        <!-- <ul> 
	            <li><a href="Lokaverkefni.html">Heim</a></li>
	            <li><a href="Verzlun.html">Verslun</a></li> 
	            <li><a id="Contact">Contact</a></li> 
	        </ul> -->
            
	    </header>
<!--SLIDESHOW-->
	    <input type="checkbox" id="slideshow">
            <label for="slideshow">
            <div class="slider">
                <div class="inner">
                    <article>
                        <img src="vsh Myndir lokaverkefni/berjamo.png">
                    </article>
                    <article>
                        <img src="vsh Myndir lokaverkefni/fjörusteinar.png">
                    </article>
                    <article>
                        <img src="vsh Myndir lokaverkefni/göngutur.png">
                    </article>
                    <article>
                        <img src="vsh Myndir lokaverkefni/höfn hfj.png">
                    </article>
                </div>
            </div>
            </label>
            
<!--Verslun-->

<!--
    <div class="group">
        <div class="textiPlayfairborder" id="Verslun1">
            Verslun
        </div>
        <div class="rammi1-2">
        <img src="vsh Myndir lokaverkefni/berjamo.png"></a>
        </div>
        <div class="rammi2-2">
            
            <img src="vsh Myndir lokaverkefni/fjörusteinar.png"></a>
        </div>
        
        <div class="rammi1-2">
        <a href="göngutur.html"><img src="vsh Myndir lokaverkefni/göngutur.png"></a>
        </div>
        <div class="rammi2-2">
            
            <a href="klaki 1.html"><img src="vsh Myndir lokaverkefni/klaki 1.png"></a>
        </div>
        <div class="rammi1-2">
        <a href="klaki 2.html"><img src="vsh Myndir lokaverkefni/klaki 2.png"></a>
        </div>
        <div class="rammi2-2">
            
            <a href="jarnisblafjoll.html"><img src="vsh Myndir lokaverkefni/jarnisblafjoll.png"></a>
        </div>
        <div class="rammi1-2">
        <a href="höfn hfj.html"><img src="vsh Myndir lokaverkefni/höfn hfj.png"></a>
        </div>
        <div class="rammi2-2">
            
            <a href="flugeldar.html"><img src="vsh Myndir lokaverkefni/flugeldar.png"></a>
        </div>
    </div> -->

<!-- Contact -->
    <?php require './includes/Contact.php'; ?>
<!-- Social Media Buttons -->
    <?php require './includes/SocialMediaButtons.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="animated-scroll.js"></script>
</body>
</html>