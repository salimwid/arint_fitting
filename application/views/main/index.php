<div class="container-fluid top">
	<div class="row-fluid landing full-window">
		<div class="col-md-12 landing-background">
			<div class="slogan"> <p class="highlight"> Ready for Your Quality House? </p> <p> <br> We're there for you! </p> 
			<button type="button" class="btn btn-default"> 5-Star Home Catalogue </button>
			<button type="button" class="btn btn-default"> Commercial Catalogue </button>   </div>
			<div class="bouncing-arrow"></div>
		</div>
	</div>
	<div class="row-fluid full-window profile">
		<div class="col-md-12 about">
			<div class="col-md-12 company-description product">
				<h1> Our Products </h1>
				<div class="col-md-offset-1 col-md-3">
				</div>
				<div class="col-md-7">
				</div>
				<div class="col-md-1" style="opacity: 0;"></div>
				<div class="col-md-offset-1 col-md-4">
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-1" style="opacity: 0;"></div>
			</div>
			<div class="col-md-offset-1 col-md-10 services-warranty">
				<h1> Services & Warranty </h1>


				<?php foreach($services as $service): ?>
					<div class="col-md-4 services-feature">
						<img src="<?php echo $service['icon']?>;">
						<p> <?php echo $service['title']?> </p>
						<p style="text-align:justify;"> <?php echo $service['description']?> </p>
					</div>
				<?php endforeach; ?>

				<?php if ($service['id_service'] > 3): ?>
					<div class="col-md-offset-2 col-md-4 services-feature">
						<img src="<?php echo $service['icon']?>;">
						<p> <?php echo $service['title']?> </p>
						<p style="text-align:justify;"> <?php echo $service['description']?> </p>
					</div>
				</div>
				<?php endif;?>

				<div class="col-md-12">
					<p> For more details, please check on our <a href="#"> Terms and Conditions </a> page. </p>
				</div>
			</div>
		</div>
	</div>	
</div>
</html>
<script>

var map;
function initMap() {
map = new google.maps.Map(document.getElementById('map-location'), {
  center: {lat: -34.397, lng: 150.644},
  zoom: 8
});
}

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
