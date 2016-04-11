<div class="container-fluid top">			
	<div class="row-fluid profile">
		<div class="col-md-12 about">
			<div class="col-md-offset-1 col-md-10 store">
				<h1> Our Stores </h1>
				<div class="col-md-offset-1 col-md-5 store-about">
					<a href="#"><img class="store-logo" src="assets/daspro_circle.jpg"></a>
					<h3> Daspro, Lorum Ipsum </h3>
					<p>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#"> Learn More </a> </p>
				</div>
				<div class="col-md-5 store-about">
					<a href="#"><img class="store-logo" src="assets/dastor_circle.jpg"></a>
					<h3> Dastor, Lorum Ipsum </h3>
					<p>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#"> Learn More </a> </p>
				</div>
				<!-- Numbers -->
				<div class="col-md-offset-1 col-md-10 numbers">
				</div>
				<div class="col-md-12">
					<h2> Find Our Nearest Location to Deliver to You! </h2>
					<div id="map-location" class="map-location">
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<div class="row-fluid contact">
		<div class="col-md-offset-1 col-md-10">
			<div class="col-md-offset-1 col-md-10">
				<h1> Contact Us </h1>
				<div class="col-md-offset-2 col-md-8">
					<p> Need help, or have a question for our expert team? Please fill out the form below and someone will get back to you soon. Or if you’d prefer, send us an email at info@arintfitting.com </p>
				</div>

				<form role="form">
					<div class="col-md-6">
						<div class="form-group">
						<label for="Name">Your Full Name</label>
						<input type="name" class="form-control" id="name">
						</div>
						<div class="form-group">
						<label for="Email">Your Email Address</label>
						<input type="email" class="form-control" id="email">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						<label for="Message"> Your Message </label>
						<input type="message" class="form-control" style="height: 109px;" id="message">
						</div>
					</div>
					<div class="col-md-12">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function() {
	windowHeight = $(window).innerHeight();
	
	/* Setting window height on different media */
	
	$mq = window.matchMedia("(orientation: portrait)");
	$phone = window.matchMedia(("max-width: 550px"));
	$('.full-window').css('height', windowHeight);
	if ($mq.matches || $phone.matches) {
		$('.full-window').css('height', 'auto');
	}

	else {
		$('.full-window').css('height', windowHeight);
	}
	$('.blog-article').css('height', windowHeight/3);

	$('#map-location').css('background-color','white');
});

$(document).scroll(function() {
	windowHeight = $(window).innerHeight();
	scroll = $(document).scrollTop();
    if (scroll >= windowHeight) {
    	$(".navbar-scroll").css({'background-color' : 'white'});
    }

    else {
    	$(".navbar-scroll").css({'background-color' : 'transparent'});
    }
});



</script>
