<?php include('includes/processor.php');?>
<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8" />
		<title>New Horizons Rehabilitation Center | Contact Us</title>
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]--> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="scripts/modernizr.js"></script>
		<link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="icons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="icons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="icons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="icons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="icons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="icons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="icons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="icons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="icons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="icons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
		<link rel="manifest" href="icons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="icons/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
	</head>
	<body id="dcontactus">
		<header>
			<div class="utility">
				<p>
					Call Us Now!<br>
					<a href="tel:18005555555">1 (800) 555-5555</a>
				</p>
			</div>
			<div id="navplaceholder">
				<nav>
					<div id="navcontainer" class="cf">
						<h1>
							<a href="index.html">New Horizons Rehabilitation Center</a>
						</h1>
						<a href="#" class="toggle">
								<span id="iconcontainer">
									<span></span>
									<span></span>
									<span></span>
									<span></span>	
								</span>
						</a>
						<ul>
							<li>
								<a class="nhome" href="index.html">Home</a>
							</li>
							<li>
								<a class="nabout" href="about.html">About</a>
							</li>
							<li>
								<a class="nservices" href="services.html">Services</a>
							</li>
							<li>
								<a class="nfacilities" href="facilities.html">Facilities</a>
							</li>
							<li>
								<a class="nevents" href="events.html">Events</a>
							</li>
							<li>
								<a class="ncontactus" href="contact.php">Contact Us</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<section id="banner">
					<h2>We Want To Help</h2>
			</section>
		</header>
		<div id="container">
			<main class="cf">
				<section id="contact-form">
					<h2>Contact Us</h2>
					<?php
					if($_REQUEST['did_send']==1){
						echo '<p class="'.$status.'">';
						echo $display_msg;
						echo '</p>';
					} 
					?>
					<form action="contact.php" method="post" name="contactform" id="contactform">
						<label for="name">Name:</label>
						<input type="text" name="name" id="name" size="30" maxlength="60" placeholder="John Smith" required />
						<label for="email">Email:</label>
						<input type="email" name="email" id="email" size="30" maxlength="60" placeholder="john@smith.com" pattern="([\w\-\.]+)@((\[([0-9]{1,3}\.){3}[0-9]{1,3}\])|(([\w\-]+\.)+)([a-zA-Z]{2,4}))" required />
						<label for="phone">Phone Number:</label>
						<input type='tel' name="phone" id="phone" maxlength="10" pattern='[\+]\d{3}[\)]\d{3}[\-]\d{4}' placeholder="(555) 555 - 5555"/>	
						<label for="category">Category:</label>
						<select name="category" id="category" required>
							<option value="" selected="selected">--Choose a category--</option>
							<option value="tour">Schedule A Tour</option>
							<option value="visiting">Visiting A Patient</option>
							<option value="insurance">Insurance</option>
							<option value="servicesandfacilities">Services and Facilities</option>
							<option value="visiting">Dining and Entertainment</option>
							<option value="feedback">Feedback</option>
							<option value="complaints">Complaints</option>
							<option value="other">Other Concerns</option>
						</select>
						<div id="dateField">
							<label for="date">Preferred Date:</label>
							<input type="date" id="date" name="date" placeholder="mm/dd/yyyy" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d">
							<label for="time">Preferred Time:</label>
							<select id="time" name="time">
								<option value="" selected="selected">--Choose time--</option>
								<option value="8a">8am</option>
								<option value="9a">9am</option>
								<option value="10a">10am</option>
								<option value="11a">11am</option>
								<option value="1p">1pm</option>
								<option value="2p">2pm</option>
								<option value="3p">3pm</option>
								<option value="4p">4pm</option>
								<option value="5p">5pm</option>
							</select>
						</div>
						<div id="messageField">
							<legend><label for="message">Message:</label></legend>					
							<textarea name="message" id="message" cols="40" rows="5" placeholder="Tell us more about your concerns" required></textarea>
						</div>
						

						<input type="submit" class="butt" name="submit" id="submit" value="Submit">
				        <input type="hidden" name="did_send" value="1" />
					</form>
				</section>
				<section id="contact-info">
					<h3>Contact Information</h3>
					<p>
						<span>Address:</span>
						1234 Harbison Ave.<br>
						Chula Vista CA, 91950 
					</p>
					<p>
						<span>Telephone:</span>
						<a href="tel:18005555555">1-800-555-5555</a>
					</p>
					<p>
						<span>Email:</span>
						<a href="mailto:help@newhorizons.com">help@newhorizons.com</a>
					</p>
					<p>
						<span>Facebook:</span>
						<a href="http://facebook.com" target="_blank">facebook.com/newhorizons</a>
					</p>
				</section>
				<section id="contact-map">
					<h3>Location</h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d215042.72715014018!2d-117.16096408182548!3d32.63168868175636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d94e4565c3aacf%3A0x46ccb8734b8f2bd3!2sChula+Vista%2C+CA!5e0!3m2!1sen!2sus!4v1465238596871" style="border:0" allowfullscreen></iframe>
				</section>
			</main>
		</div>
		<footer>
			<div id="footcontainer" class="cf">
				<h5><a href="index.html">New Horizons Rehabilitation Center</a></h5>
				<section class="foot-sitemap">
					<h6>Sitemap</h6>
					<ul>
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="about.html">About</a>
						</li>
						<li>
							<a href="services.html">Services</a>
						</li>
						<li>
							<a href="facilities.html">Facilities</a>
						</li>
						<li>
							<a href="events.html">Events</a>
						</li>
						<li>
							<a href="contact.php">Contact Us</a>
						</li>
					</ul>
				</section>
				<section class="foot-info">
					<h6>Contact Information</h6>
					<p>
						<span>Address:</span>
						<a href="https://maps.google.com/maps?ll=32.770441,-116.897283&z=8&t=m&hl=en-US&gl=US&mapclient=embed&q=Chula%20Vista%20California" target="_blank">1234 Harbison Ave.<br>
						Chula Vista CA, 91950</a>
					</p>
					<p>
						<span>Telephone:</span>
						<a href="tel:18005555555">1-800-555-5555</a>
					</p>
					<p>
						<span>Email:</span>
						<a href="mailto:help@newhorizons.com">help@newhorizons.com</a>
					</p>
					<p>
						<span>Facebook:</span>
						<a href="http://facebook.com" target="_blank">facebook.com/newhorizons</a>
					</p>
				</section>
				<section class="foot-map">
					<h6>Location</h6>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d215042.72715014018!2d-117.16096408182548!3d32.63168868175636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d94e4565c3aacf%3A0x46ccb8734b8f2bd3!2sChula+Vista%2C+CA!5e0!3m2!1sen!2sus!4v1465238596871" style="border:0" allowfullscreen></iframe>
				</section>
				<p class="foot-copyright">
					New Horizons Rehabilitation Center &copy; 2016. All Rights Reserved.
				</p>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
        <script src="scripts/nav.min.js"></script>
		<script src="scripts/form-validator.js"></script>
        <script>
			$(document).ready(function(){
        		$("#contactform").validate({
        			onfocusout:function(e){
        				$(e).valid()
        			},
    				rules:{
    					name:{
    						required:true
    					},
    					email:{
    						email: true,
    						required:true
    					},
    					phone:{
    						required:true,
    						minlength: 10
    					},
    					category:{
    						required:true
    					},
    					date:{
    						required:true
    					},
    					time:{
    						required:true
    					},
    					message:{
    						required:true
    					}
    				},
    				messages:{
    					name:{
    						required:"Please enter your name"
    					},
    					email:{
    						required:"Please enter your email",
    						email:"This is not a valid email"
    					},
    					phone:{
    						required:"Please enter your phone number",
    						minlength:'This is not a valid phone number'
    					},
    					category:{
    						required:"Please choose a category"
    					},
    					date:{
    						required:"Please enter a date"
    					},
    					time:{
    						required:"Please choose a time"
    					},
    					message:{
    						required:"Further information about concern is required"
    					}
    				}
    			});
    			
    			var categorySelected = $('#category');

	        	categorySelected.change(function(){
					if(categorySelected.val() == 'tour'){
						$('#dateField').css({
							'display':'block'
						});
						$('#dateField input, #dateField select').prop('required',true);
						$('#messageField').css({
							'display':'block'
						});
					}else if(categorySelected.val() == ''){
						$('#messageField').css({
							'display':'none'
						});
						$('#dateField').css({
							'display':'none'
						});
						$('#dateField input, #dateField select').prop('required',false);
					}else{
						$('#messageField').css({
							'display':'block'
						});
						$('#dateField').css({
							'display':'none'
						});
						$('#dateField input, #dateField select').prop('required',false);
					}
	        	});
        	});
        </script>
	</body>
</html>