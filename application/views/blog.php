<div class="container-fluid top">
	<div class="row-fluid blogs newsletter">
		<div class="col-md-offset-1 col-md-10 blog-background">
			<!-- Solution -->

			<h1> Solution </h1>

			<?php foreach($solutions as $solution): ?>
			<div class="col-md-4 blog-article">
				<div class="blog-image" style="background-image: <?php echo $solution['image']?>; background-size: cover;"></div>
				<div class="blog-text"><p><?php echo $solution['title']?></p></div>
			</div>

			<!-- Blog Articles -->

			<h1> Construction Resources </h1>

			<?php foreach($articles as $article): ?>
				<div class="<?php echo $article['div-size']?> blog-article">
					<div class="blog-image" style="background-image: <?php echo $article['image']?>; background-size: cover;"></div>
				<div class="blog-text"><p><?php echo $article['title']?></p></div>
				</div>
			<?php endforeach; ?>

		</div>
	</div>
</div>
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
	$('.blog-article').css('height', windowHeight/2.5);

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
