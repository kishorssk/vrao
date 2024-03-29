<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<style>
		body {
			font-family: Verdana, sans-serif;
			margin: 0;
		}

		* {
			box-sizing: border-box;
		}
		div.a {
			  text-align: center;
			  margin-top: 50px;
		}
		.row > .column {
			padding: 0 8px;
		}
		.align{
			text-align: center;
		}

		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		.column {
			float: left;
			width: 25%;
		}

		/* The Modal (background) */
		.modal {
			display: none;
			position: fixed;
			z-index: 1;
			padding-top: 100px;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: black;
		}

		/* Modal Content */
		.modal-content {
			position: relative;
			background-color: black;
			margin: auto;
			padding: 0;
			height: 50%;
			width: 40%;
			max-width: 400px;
		}

		/* The Close Button */
		.close {
			color: white;
			position: absolute;
			top: 10px;
			right: 25px;
			font-size: 35px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: #999;
			text-decoration: none;
			cursor: pointer;
		}

		.mySlides {
			display: block;
			width: 400px;
			height: 50%;
			align-content: center;
			position: absolute;
			/*top : 10%;
			bottom: 10%;*/
		}
    	.cursor {
    		cursor: pointer;
    	}

    		/* Next & previous buttons */
		.prev,
		.next {
			cursor: pointer;
			position: absolute;
			top: 50%;
			/*width: 50%;*/
			padding: 16px;
			/*margin-top: -50px;*/
			color: white;
			font-weight: bold;
			font-size: 20px;
			transition: 0.6s ease;
			/*border-radius: 0 4px 4px 0;*/
			user-select: none;
			-webkit-user-select: none;
		}

		/* Position the "next button" to the right */
		.next {
			right: 0;
			/*border-radius: 3px 0 0 3px;*/
		}
		.prev {
			align-items: left;
		}

      	.caption-container {
	      	text-align: center;
	      	background-color: black;
	      	padding: 2px 16px;
	      	color: white;
      	}

     	.demo {
      		opacity: 0.6;
        }
     	.active,
      	.demo:hover {
      		opacity: 1;
      	}

    	img.hover-shadow {
      		transition: 0.3s;
      	}

	    .hover-shadow:hover {
	      	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	    }
	</style>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150074966-1"></script>
	<script>
	  	window.dataLayer = window.dataLayer || [];
	  	function gtag(){dataLayer.push(arguments);}
	  	gtag('js', new Date());

	  	gtag('config', 'UA-150074966-1');
	  	gtag('config', 'UA-59279345-7');
	</script>

	  <meta charset="utf-8">
	  <link rel="shortcut icon" href="img/fav.png">
	  <meta name="author" content="colorlib">
	  <meta name="description" content="">
	  <meta name="keywords" content="">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	  <script src="js/js/jquery.columnizer.js?v=1.2"></script>
	  <script type="text/javascript" src="js/js/viewer.js?v=1.2"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Halant:300&amp;subset=devanagari" rel="stylesheet">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
	  <link rel="shortcut icon" href="img/fav.png">
	  <meta name="author" content="colorlib">
	  <meta name="description" content="">
	  <meta name="keywords" content="">
	  <!-- <meta charset="UTF-8"> -->
	  <title>Gallery</title>
		<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet"> -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/navbar.css">

		<link rel="stylesheet" href="css/css/viewer.css?v=1.2">
		<!-- <link rel="stylesheet" href="css/css/navbar.css?v=1.2"> -->
		<link rel="stylesheet" href="css/css/homepage.css?v=1.3">
		<link rel="stylesheet" href="css/css/carousel.css?v=1.2">
		<link rel="stylesheet" href="css/css/dict.css?v=1.2">
</head>
<body>
	<header id="header">
		<div class="container main-menu">
			<div class="row align-items-center d-flex">
				<div id="logo">
					<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
					<!-- <small>ವೇ|ಬ್ರಂ|ಶ್ರೀ</small> -->
					<strong style="color: red">ಬಿ. ವೆಂಕಟರಾಮ ಶರ್ಮಾ</strong>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li><a href="index.html">ಮುಖಪುಟ</a></li>
						<li><a href="about.html">ಶರ್ಮರ ಬಗ್ಗೆ</a></li>
						<li><a href="portfolio.html">ಪುಸ್ತಕಗಳು</a></li>
						<li><a class="active" href="Photos.php">ಚಿತ್ರಗಳು</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- <div class="container gallery"> -->
		<div class="row justify-content-center" id="viewimages">
			<!-- <div class="column col-md-12 text-center bio"><u><h1>ಚಿತ್ರಗಳು</h1></u></div> -->
				<div class="container section-gap-top">
					<!-- <div class="row align-items-center"> -->
					<div class="a">
						<h1>ಚಿತ್ರಗಳು</h1>		
					</div>
				</div>	

			<div class="card-columns align-self-stretch">
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/007.jpg" onclick="openModal();currentSlide(1)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/008.jpg" onclick="openModal();currentSlide(2)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/010.jpg" onclick="openModal();currentSlide(3)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/012.jpg" onclick="openModal();currentSlide(4)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/013.jpg" onclick="openModal();currentSlide(5)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/014.jpg" onclick="openModal();currentSlide(6)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/016.jpg" onclick="openModal();currentSlide(7)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/017.jpg" onclick="openModal();currentSlide(8)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/018.jpg" onclick="openModal();currentSlide(9)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/019.jpg" onclick="openModal();currentSlide(10)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/020.jpg" onclick="openModal();currentSlide(11)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/021.jpg" onclick="openModal();currentSlide(12)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/023.jpg" onclick="openModal();currentSlide(13)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/025.jpg" onclick="openModal();currentSlide(14)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/026.jpg" onclick="openModal();currentSlide(15)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/027.jpg" onclick="openModal();currentSlide(16)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/030.jpg" onclick="openModal();currentSlide(17)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/031.jpg" onclick="openModal();currentSlide(18)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/032.jpg" onclick="openModal();currentSlide(19)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/036.jpg" onclick="openModal();currentSlide(20)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/040.jpg" onclick="openModal();currentSlide(21)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/041.jpg" onclick="openModal();currentSlide(22)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/042.jpg" onclick="openModal();currentSlide(23)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/043.jpg" onclick="openModal();currentSlide(24)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/044.jpg" onclick="openModal();currentSlide(25)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/045.jpg" onclick="openModal();currentSlide(26)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/046.jpg" onclick="openModal();currentSlide(27)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/047.jpg" onclick="openModal();currentSlide(28)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/050.jpg" onclick="openModal();currentSlide(29)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/052.jpg" onclick="openModal();currentSlide(30)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/053.jpg" onclick="openModal();currentSlide(31)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/054.jpg" onclick="openModal();currentSlide(32)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/055.jpg" onclick="openModal();currentSlide(33)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/056.jpg" onclick="openModal();currentSlide(34)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/057.jpg" onclick="openModal();currentSlide(35)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/058.jpg" onclick="openModal();currentSlide(36)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/059.jpg" onclick="openModal();currentSlide(37)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/060.jpg" onclick="openModal();currentSlide(38)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/061.jpg" onclick="openModal();currentSlide(39)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/062.jpg" onclick="openModal();currentSlide(40)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/063.jpg" onclick="openModal();currentSlide(41)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/064.jpg" onclick="openModal();currentSlide(42)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/065.jpg" onclick="openModal();currentSlide(43)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/066.jpg" onclick="openModal();currentSlide(44)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/067.jpg" onclick="openModal();currentSlide(45)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/068.jpg" onclick="openModal();currentSlide(46)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/069.jpg" onclick="openModal();currentSlide(47)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/070.jpg" onclick="openModal();currentSlide(48)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/071.jpg" onclick="openModal();currentSlide(49)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/072.jpg" onclick="openModal();currentSlide(50)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/073.jpg" onclick="openModal();currentSlide(51)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/074.jpg" onclick="openModal();currentSlide(52)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/075.jpg" onclick="openModal();currentSlide(53)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/076.jpg" onclick="openModal();currentSlide(54)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/077.jpg" onclick="openModal();currentSlide(55)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/078.jpg" onclick="openModal();currentSlide(56)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/079.jpg" onclick="openModal();currentSlide(57)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/080.jpg" onclick="openModal();currentSlide(58)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/081.jpg" onclick="openModal();currentSlide(59)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/082.jpg" onclick="openModal();currentSlide(60)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/083.jpg" onclick="openModal();currentSlide(61)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/084.jpg" onclick="openModal();currentSlide(62)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/085.jpg" onclick="openModal();currentSlide(63)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/086.jpg" onclick="openModal();currentSlide(64)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/087.jpg" onclick="openModal();currentSlide(65)" alt="" />
				</div>
				<div class="fixOverlayDiv">
					<img  class="hover-shadow cursor" src="img/thumbs/088.jpg" onclick="openModal();currentSlide(66)" alt="" />
				</div>
			</div>
		</div>
	<!-- </div> -->
	<div id="myModal" class="modal">
		<span class="close cursor" onclick="closeModal()">&times;</span>
		<div class="modal-content">
			<div class="mySlides" >
				<div class="numbertext"></div>
				<img src="img/main/007.jpg" style="width:85%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/008.jpg"  style="width:95%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/010.jpg" style="width:95%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/012.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/013.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/014.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/016.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/017.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/018.jpg" style="width:100%">
			</div>

			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/019.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/020.jpg" style="width:100%">
			</div>

			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/021.jpg" style="width:100%">
			</div>
			<!-- <div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/022.jpg" style="width:100%">
			</div> -->
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/023.jpg" style="width:100%">
			</div>
			<!-- <div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/024.jpg" style="width:100%">
			</div> -->
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/025.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/026.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/027.jpg" style="width:100%">
			</div>
			<!-- <div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/028.jpg" style="width:100%">
			</div>

			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/029.jpg" style="width:100%">
			</div> -->
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/030.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/031.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/032.jpg" style="width:100%">
			</div>
			<!-- <div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/033.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/034.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/035.jpg" style="width:100%">
			</div> -->
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/036.jpg" style="width:100%">
			</div>
			<!-- <div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/037.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/038.jpg" style="width:100%">
			</div>

			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/039.jpg" style="width:100%">
			</div> -->
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/040.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/041.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/042.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/043.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/044.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/045.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/046.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/047.jpg" style="width:100%">
			</div>
			
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/050.jpg" style="width:100%">
			</div>
			<!-- <div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/051.jpg" style="width:100%">
			</div> -->
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/052.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/053.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/054.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/055.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/056.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/057.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/058.jpg" style="width:100%">
			</div>

			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/059.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/060.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/061.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/062.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/063.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/064.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/065.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/066.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/067.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/068.jpg" style="width:100%">
			</div>

			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/069.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/070.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/071.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/072.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/073.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/074.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/075.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/076.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/077.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/078.jpg" style="width:100%">
			</div>

			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/079.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/080.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/081.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/082.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/083.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/084.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/085.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/086.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext"></div>
				<img src="img/main/087.jpg" style="width:100%">
			</div>
			<div class="mySlides">
				<!-- <div class="numbertext"></div> -->
				<img src="img/main/088.jpg" style="width:120%">
			</div>	
			<!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a> -->
		</div>
	</div>	


<!-- <div class="container gallery">
	<div class="row justify-content-center" id="viewimages">

		<div class="col-md-12 text-center bio"><h2>ಚಿತ್ರಗಳು</h2></div>
		<div class="card-columns align-self-stretch">

			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="http://localhost/vrao/public/images/gallery/main/001.jpg" src="http://localhost/vrao/public/images/gallery/thumbs/001.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/002.jpg" src="public/images/gallery/thumbs/002.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/003.jpg" src="public/images/gallery/thumbs/003.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/004.jpg" src="public/images/gallery/thumbs/004.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/005.jpg" src="public/images/gallery/thumbs/005.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/006.jpg" src="public/images/gallery/thumbs/006.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/007.jpg" src="public/images/gallery/thumbs/007.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/008.jpg" src="public/images/gallery/thumbs/008.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/009.jpg" src="public/images/gallery/thumbs/009.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/010.jpg" src="public/images/gallery/thumbs/010.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/011.jpg" src="public/images/gallery/thumbs/011.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/012.jpg" src="public/images/gallery/thumbs/012.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/013.jpg" src="public/images/gallery/thumbs/013.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/014.jpg" src="public/images/gallery/thumbs/014.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/015.jpg" src="public/images/gallery/thumbs/015.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/016.jpg" src="public/images/gallery/thumbs/016.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/017.jpg" src="public/images/gallery/thumbs/017.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/018.jpg" src="public/images/gallery/thumbs/018.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/019.jpg" src="public/images/gallery/thumbs/019.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/020.jpg" src="public/images/gallery/thumbs/020.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/021.jpg" src="public/images/gallery/thumbs/021.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/022.jpg" src="public/images/gallery/thumbs/022.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/023.jpg" src="public/images/gallery/thumbs/023.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/024.jpg" src="public/images/gallery/thumbs/024.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/025.jpg" src="public/images/gallery/thumbs/025.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/026.jpg" src="public/images/gallery/thumbs/026.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/027.jpg" src="public/images/gallery/thumbs/027.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/028.jpg" src="public/images/gallery/thumbs/028.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/029.jpg" src="public/images/gallery/thumbs/029.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/030.jpg" src="public/images/gallery/thumbs/030.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/031.jpg" src="public/images/gallery/thumbs/031.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/032.jpg" src="public/images/gallery/thumbs/032.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/033.jpg" src="public/images/gallery/thumbs/033.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/034.jpg" src="public/images/gallery/thumbs/034.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/035.jpg" src="public/images/gallery/thumbs/035.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/036.jpg" src="public/images/gallery/thumbs/036.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/037.jpg" src="public/images/gallery/thumbs/037.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/038.jpg" src="public/images/gallery/thumbs/038.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/039.jpg" src="public/images/gallery/thumbs/039.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/040.jpg" src="public/images/gallery/thumbs/040.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/041.jpg" src="public/images/gallery/thumbs/041.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/042.jpg" src="public/images/gallery/thumbs/042.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/083.jpg" src="public/images/gallery/thumbs/083.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/084.jpg" src="public/images/gallery/thumbs/084.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/085.jpg" src="public/images/gallery/thumbs/085.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/086.jpg" src="public/images/gallery/thumbs/086.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/087.jpg" src="public/images/gallery/thumbs/087.jpg" alt="" />
			</div>
			<div class="fixOverlayDiv">
				<img class="img-responsive" data-original="public/images/gallery/main/088.jpg" src="public/images/gallery/thumbs/088.jpg" alt="" />
			</div>
		</div>
	</div>
</div> -->

	<script>
		function openModal() {
			document.getElementById("myModal").style.display = "block";
		}

		function closeModal() {
			document.getElementById("myModal").style.display = "none";
		}

		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("demo");
			var captionText = document.getElementById("caption");
			if (n > slides.length) {slideIndex = 1}
				if (n < 1) {slideIndex = slides.length}
					for (i = 0; i < slides.length; i++) {
						slides[i].style.display = "none";
					}
					for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					}
					slides[slideIndex-1].style.display = "block";
					dots[slideIndex-1].className += " active";
					captionText.innerHTML = dots[slideIndex-1].alt;
				}
	</script>
	<footer class="footer-area">
		<div class="container">
			<div class="row footer-bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					<small>© 2021 All rights reserved</small>  
				</p>
			</div>
		</div>
	</footer>
	<div id="back-top">
		<a title="Go to Top" href="#">
			<i class="lnr lnr-arrow-up"></i>
		</a>
	</div>
</body>
		<script src="js/vendor/jquery-2.2.4.min.js" type="df7a91b3a0010efddfd818dc-text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" type="df7a91b3a0010efddfd818dc-text/javascript"></script>
		<!-- <script src="js/vendor/bootstrap.min.js" type="df7a91b3a0010efddfd818dc-text/javascript"></script> -->
		<script type="df7a91b3a0010efddfd818dc-text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/easing.min.js" type="df7a91b3a0010efddfd818dc-text/javascript"></script>
		<script src="js/hoverIntent.js" type="df7a91b3a0010efddfd818dc-text/javascript"></script>
		<script src="js/superfish.min.js" type="df7a91b3a0010efddfd818dc-text/javascript"></script>
		<script src="js/mn-accordion.js" type="df7a91b3a0010efddfd818dc-text/javascript"></script>
		<script src="js/jquery.ajaxchimp.min.js" type="df7a91b3a0010efddfd818dc-text/javascript"></script>
		<script src="js/jquery.magnific-popup.min.js" type="df7a91b3a0010efddfd818dc-text/javascript"></script>
		<script src="js/owl.carousel.min.js" type="df7a91b3a0010efddfd818dc-text/javascript"></script>
		<script src="js/jquery.nice-select.min.js" type="df7a91b3a0010efddfd818dc-text/javascript"></script>
		<script src="js/isotope.pkgd.min.js" type="df7a91b3a0010efddfd818dc-text/javascript"></script>
		<script src="js/jquery.circlechart.js" type="df7a91b3a0010efddfd818dc-text/javascript"></script>
		<script src="js/mail-script.js" type="df7a91b3a0010efddfd818dc-text/javascript"></script>
		<script src="js/wow.min.js" type="df7a91b3a0010efddfd818dc-text/javascript"></script>
		<script src="js/main.js" type="df7a91b3a0010efddfd818dc-text/javascript"></script>

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="df7a91b3a0010efddfd818dc-text/javascript"></script>
		<script type="df7a91b3a0010efddfd818dc-text/javascript">
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-23581568-13');
		</script>
		<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="df7a91b3a0010efddfd818dc-|49" defer=""></script>
</html>