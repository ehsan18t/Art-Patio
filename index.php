<?php include('header.php') ?> 

<!DOCTYPE html>
<html>
<head>

<style type="text/css">

.brand{
	background: whitesmoke !important;
}

.brand-text{
	color:black;
	text-align: center;
}

.text-center {
	width: 100%;
	height: 70%;
	position: absolute;
	left: 50%;
	top: 55%;
	margin-top: 20px;
	transform: translate(-50%,-50%);
	background-image: url(<?php echo IMG['16']; ?>);
	background-size: 100% 100%;
	box-shadow: 1px 2px 10px 5px #375554;
	animation: slider 30s infinite linear;
	opacity: 0.7;
}

@keyframes slider{
	0%{ background-image: url(<?php echo IMG['20'] ?>); }
	20%{ background-image: url(<?php echo IMG['5'] ?>); }
	40%{ background-image: url(<?php echo IMG['8'] ?>); }
	60%{ background-image: url(<?php echo IMG['12'] ?>); }
	80%{ background-image: url(<?php echo IMG['10'] ?>); }
	100%{ background-image: url(<?php echo IMG['13'] ?>); }
}

.center {
	display: flex;
	justify-content: center;
	color: green;
}

.textHomePage{
	color: white;
	font-size: 28px;
	text-align: center;
	margin-left: 200px;
	margin-right: 200px;
	margin-top: 250px;
	background-color: #488280;
	opacity: 0.7;
}

.hori{
	height: 3px;
	margin-top: 2px;
	background-color: white;
}
.icon{
	margin-bottom: 0px;
	background-color: #488280;
}

.image1{
	height: 30px;
	margin-top: -43px;
	margin-left: 45%;
}

.image2{
	height: 30px;
	margin-top: 10px;
	margin-left: 2.5%;
}

.image3{
	height: 35px;
	margin-top: 10px;
	margin-left: 3%;
}


 </style>

</head>


<?php include_once INCLUDES['header-template'] ?>
<?php include_once INCLUDES['login-signup-template'] ?>

</nav>

<hr class="hori">
<div class="text-center">
	
</div>


<h3 class="textHomePage center">
	"The artist is a receptacle for emotions that come from all over the place: from the sky,<br>from the earth, from a scrap of paper,from a passing shape,<br>from a spider's web. Inspiration exists, <br>but it has to find you working"<br>
	-PABLO PICASSO
</h3>
	
<!-- <div class="icon">
		<img src="pin.png">
		<a href="youtube.com" class="pin.png"></a>
		<a href="facebook.com" class="fb.png"></a>
		<a href="instagram.com" class="ins.png"></a>
</div> -->

<?php include_once(INCLUDES['footer-template']) ?>
</html>