<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Home - HBMS</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="main.css">
	<script type="text/javascript" src="main.js"></script>
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php require_once('profileUpdate.php'); ?>
	<?php require_once('websitesettings.php'); ?>
</head>
<body onload="loadHomeScripts()">
	<button onclick="scrollToTopScreen()" id="scrollTop" class="scrollTop"><i class="material-icons scrollIcon">keyboard_double_arrow_up</i></button>
	<div class="header">
		<div class="column1"><a href="home.php"><span class="usertitle">Welcome, <?php echo getManneredUserName(); ?></span></a></div>
		<div class="column2">
			<a class="active" href="home.php">Home</a>
			<a href="#gallery">Gallery</a>
			<a href="#roomsandrates">Rooms & Rates</a>
			<a href="bookings.php">Bookings</a>
			<a href="#contactus">Contact Us</a>
			<a href="profile.php">Profile</a>
			<a href="logout.php">Logout</a>
			<span style="width:20px;"></span>
		</div>
	</div>
	<div class="homebody">
		<div class="imageSlider">
			<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
				<img id="sliderImage1" class="sliderImages">
				<div class="text1">WE KNOW WHAT YOU LOVE</div>
				<div class="text2">WELCOME TO OUR HOTELS</div>
			</div>
			<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
				<img id="sliderImage2" class="sliderImages">
				<div class="text1">STAY WITH FRIENDS & FAMILIES</div>
				<div class="text2">COME & ENJOY PRECIOUS MOMENT WITH US</div>
			</div>
			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
				<img id="sliderImage3" class="sliderImages">
				<div class="text1">WANT LUXURIOUS VACATION?</div>
				<div class="text2">GET ACCOMMODATION TODAY</div>
			</div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<span class="sliderHeading">Hotel Bookings Management System</span>
		<div class="dotdiv">
			<span class="sliderDot" onclick="currentSlide(1)"></span>
			<span class="sliderDot" onclick="currentSlide(2)"></span>
			<span class="sliderDot" onclick="currentSlide(3)"></span><br /><br />
			<a class="homelearnmore" href="javascript:popUpLearnMore()">LEARN MORE</a>
		</div>
		<div id="gallery" class="gallery">
			<div class="text6">Our Gallery</div>
			<div class="galleryDiv galleryRow">
				<?php getGalleryImages(); ?>
			</div>
		</div>
		<div id="roomsandrates" class="roomsandrates">
			<div class="text6">Rooms & Rates</div>
			<div class="roomDiv galleryRow">
				<?php getRoomDetails(); ?>
			</div>
		</div>
		<div id="contactus" class="contactus">
			<div class="blankSpace">
				<div class="divLeft">
					<div class="inputDiv fullHeight">
						<div class="text7">Contact Us</div>
						<form class="frmContactUs" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							<label class="frmlabel" for="fullName">Full Name:</label>
							<div class="frminputBox"><input onkeyup="filterFullName('fullName')" class="frminput" pattern="[A-Za-z ]{1,50}" type="text" maxlength="50" placeholder="Enter Full Name" id="fullName" name="fullName" required></div>
							<label class="frmlabel" for="mobileNumber">Mobile Number:</label>
							<div class="frminputBox"><input type="tel" onkeyup="filterTelephone('mobileNumber')" class="frminput" type="text" placeholder="Enter Mobile Number" onfocusout="checkTelephone('mobileNumber')" name="mobileNumber" id="mobileNumber" maxlength="10" pattern="[0-9]{10}" required></div>
							<label class="frmlabel" for="emailId">Email Address:</label>
							<div class="frminputBox"><input class="frminput" type="email" onkeyup="filterEmailID('emailId')" onfocusout="checkEmailID('emailId')" maxlength="64" placeholder="Enter Email Address" id="emailId" name="emailId" required></div>
							<input class="frmbutton" type="submit" class="btnSend" name="btnSend" value="Send"/>
						</form>
					</div>
				</div>
				<div class="divRight">
					<div class="inputDiv fullHeight">
						<div class="text7 text8">Connect With Us</div>
						<div class="frmContactUs">
							<span class="frmConnectWithUs"><span class="label">Phone : </span><?php getSettingValue('ContactMobile'); ?></span>
							<span class="frmConnectWithUs"><span class="label">Email : </span><?php getSettingValue('ContactEmail'); ?></span>
							<span class="frmConnectWithUs"><span class="label">Address : </span><?php getSettingValue('ContactAddress'); ?></span>
						</div>
						<div class="socialButtons">
							<a href="<?php getSettingValue('SocialMediaFacebook'); ?>" class="fa fa-facebook"></a>
							<a href="<?php getSettingValue('SocialMediaYoutube'); ?>" class="fa fa-youtube"></a>
							<a href="<?php getSettingValue('SocialMediaGoogle'); ?>" class="fa fa-google"></a>
							<a href="<?php getSettingValue('SocialMediaInstagram'); ?>" class="fa fa-instagram"></a>
						</div>
						<div class="mapDiv">
							<div class="gmapDiv">
								<iframe class="gmapIframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?&amp;hl=en&amp;q=MSU Pavilion&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="galleryModal" class="galleryModal">
		<a href="javascript:popUpCloseLearnMore()" class="galleryClose">&times;</a>
		<img class="galleryFullImage" id="zoomImage">
		<div id="galleryCaption" class="galleryCaption"></div>
	</div>
	<div id="myModal" class="popupModal">
		<div class="modalContainer">
			<div class="modalHeader">
				<a href="javascript:popUpCloseLearnMore()" class="modalclose">&times;</a>
			</div>
			<div class="modalBody">
				<div class="text3">Hotel Bookings Management System</div>
				<img id="learnMoreImage" class="learnMoreImage">
				<div class="text4">We know what you love</div>
				<div class="text5">
					<?php getSettingValue('WebsiteDescription'); ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>