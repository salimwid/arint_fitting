<div class="container-fluid top">
	<div class="row-fluid contact">
		<div class="col-md-offset-1 col-md-10">
			<div class="col-md-offset-1 col-md-10">
				<h1> Contact Us </h1>
				<div class="col-md-offset-2 col-md-8">
					<p> Need help, or have a question for our expert team? Please fill out the form below and someone will get back to you soon. Or if you’d prefer, send us an email at info@arintfitting.com </p>
				</div>							
				<div class="col-md-6">
					<h4> <strong> PT. Arint Premium Fitting </strong> </h4>
					<p> Address: Jl. Sunter Agung IX Blok O1 No.33 <br>
					Jakarta Utara, Indonesia 14250 <br>
					</p>
					<span> +6221 123-4567 </span> <br>
					<span> +6221 123-4567 </span> <br>
					<span> info@arintfitting.com </span>

					<div id="arint-location" class="arint-location"></div>
				</div>
				<div class="col-md-6">
					<form id="contact-form" role="form" method="POST">
						<div class="form-group fields">
						<label for="Name">Your Full Name</label>
						<input type="name" class="form-control" id="name">
						</div>
						<div class="form-group fields">
						<label for="Email">Your Email Address</label>
						<input type="email" class="form-control" id="email">
						</div>
						<div class="form-group fields">
						<label for="Email">Company/Industry</label>
						<input type="company" class="form-control" id="company">
						</div>
						<div class="form-group">
						<label for="Message"> Your Message </label>
						<input type="message" class="form-control" style="height: 160px;" id="message">
						</div>
						<button type="button" class="btn btn-default" id="contact-btn">Submit</button>
					</form>
				</div>
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

	$('#contact-btn').click(validate_fields);

	function validate_fields(form){
		console.log('hello');
		var error = false;

			if($('.fields').val() == '') {
				$('.fields').html( "<p>Fill in all Fields</p>" );
				$('.fields').css('background-color','red');
				error = true;
			}
		console.log('herae');
		console.log(error);
		return error;
	}

	

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
