<!-- Fancybox css file -->
<link rel="stylesheet" href="js1/jquery.fancybox-1.2.6.css" media="screen" type="text/css">

<!-- jQuery  -->
<script type="text/javascript" src="js1/jquery-1.4.2.js"></script>

<!-- Easing plugin for more transitions -->
<script type="text/javascript" src="js1/jquery.easing.1.3.js"></script>

<!-- Fancybox js -->
<script type="text/javascript" src="js1/jquery.fancybox-1.2.6.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		// Bind fancybox to some ellement
		$(".iframe").fancybox({
			"padding"				: 0,
			"overlayShow"			: true,
			"overlayOpacity"		: 0.4,
			"zoomSpeedIn"			: 500, // has nothing to do with AJAX-ZOOM
			"zoomSpeedOut"			: 500, // has nothing to do with AJAX-ZOOM
			"hideOnContentClick"	: false, // important
			"frameWidth"			: 515, // has to be defined
			"frameHeight"			: 330, // has to be defined
			"centerOnScroll"		: true,
			"imageScale"			: true,
			"easingIn"  			: "swing",
			"easingOut"				: "swing"
		});
		$("#ifrmExample2").fancybox({
			"padding"				: 0,
			"overlayShow"			: true,
			"overlayOpacity"		: 0.4,
			"zoomSpeedIn"			: 500, // has nothing to do with AJAX-ZOOM
			"zoomSpeedOut"			: 500, // has nothing to do with AJAX-ZOOM
			"hideOnContentClick"	: false, // important
			"frameWidth"			: 600, // has to be defined
			"frameHeight"			: 400, // has to be defined
			"centerOnScroll"		: false,
			"imageScale"			: true,
			"easingIn"  			: "swing",
			"easingOut"				: "swing"
		});
		$("#ifrmExample3").fancybox({
			"padding"				: 0,
			"overlayShow"			: true,
			"overlayOpacity"		: 0.4,
			"zoomSpeedIn"			: 500, // has nothing to do with AJAX-ZOOM
			"zoomSpeedOut"			: 500, // has nothing to do with AJAX-ZOOM
			"hideOnContentClick"	: false, // important
			"frameWidth"			: 600, // has to be defined
			"frameHeight"			: 400, // has to be defined
			"centerOnScroll"		: false,
			"imageScale"			: true,
			"easingIn"  			: "swing",
			"easingOut"				: "swing"
		});
		$("#ifrmExample4").fancybox({
			"padding"				: 0,
			"overlayShow"			: true,
			"overlayOpacity"		: 0.4,
			"zoomSpeedIn"			: 500, // has nothing to do with AJAX-ZOOM
			"zoomSpeedOut"			: 500, // has nothing to do with AJAX-ZOOM
			"hideOnContentClick"	: false, // important
			"frameWidth"			: 600, // has to be defined
			"frameHeight"			: 400, // has to be defined
			"centerOnScroll"		: false,
			"imageScale"			: true,
			"easingIn"  			: "swing",
			"easingOut"				: "swing"
		});
	});
</script>