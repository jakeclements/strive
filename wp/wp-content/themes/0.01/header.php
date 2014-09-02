<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Strive Health Management</title>
<link href="<?php bloginfo('template_directory'); ?>/css/960_16_col.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/css/text.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/themes/default/default.css" type="text/css" media="screen" />
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/stylesheet.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.8.2.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.nivo.slider.pack.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxSlider.min.js"></script>

<script language="javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.minitwitter.js" type="text/javascript"></script>
<link href="<?php bloginfo('template_directory'); ?>/js/jquery.minitwitter.css" media="all" rel="stylesheet" type="text/css"/>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.bxslider').each(function(){
    	$(this).bxSlider({
    		mode: 'fade',
			auto: 'true',
			prevImage: '<?php bloginfo('template_directory'); ?>/img/previous.png',
			nextImage: '<?php bloginfo('template_directory'); ?>/img/next.png'
    	});
	});
	$(".fancybox").fancybox();
	$(".ajaxify").fancybox({type: 'ajax'});
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38617098-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>