<?php get_header(); ?>
<div id="single-flair"></div>
<div id="notification">
	<div class="container_16">
	TEST
    </div>
</div>
<div id="navback">
	<!-- START GENERATED MENU -->
    <div id="main-nav">
    <?php wp_nav_menu( array('menu' => 'Top Menu' )); ?>
    </div><!-- END MAIN NAV -->
	<!-- END GENERATED MENU -->
</div><!-- END NAVBACK -->
<div id="wrapper" class="container_16">
	<div id="header">
    	<a href="index.html"><div id="logo"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" /></div></a><!-- END LOGO -->
    </div><!-- END HEADER -->
    <div id="social">
		<a href="<?php the_field('facebook_url', 'options'); ?>"><div class="fb_16"></div></a>
    	<a href="<?php the_field('twitter_url', 'options'); ?>"><div class="twit_16"></div></a>
    	<a href="<?php the_field('youtube_url', 'options'); ?>"><div class="yout_16"></div></a>
    	<a href="mailto:<?php the_field('email_address', 'options'); ?>"><div class="mail_16"></div></a>
	</div><!-- END #SOCIAL -->
    <div class="grid_16" id="fullbar">
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	<div class="pagetitle"><?php the_title(); ?></div>
    	<div class="hr"></div>
        <div id="pagecontent">
        
      			<?php the_content(); ?>
            <?php endwhile; ?>
     	<?php endif; ?>
        </div><!-- END pagecontent -->
    </div><!--END Fullbar -->   
</div><!-- END WRAPPER -->
<div id="fullflair"></div>
<div id="subcontent">
	<div class="container_16">
    	<div class="third">
        	<div class="footitle">What can we do?</div>
            <ul>
            	<li><a href="">Sports Kinesiology</a></li>
                <li><a href="">Active Release Techniques (ART)</a></li>
				<li><a href="">Exercise Physiology, Exercise Rehabilitation</a></li>
				<li><a href="">Osteopathy</a></li>
				<li><a href="">Real Time Ultrasound</a></li>
				<li><a href="">Soma Stability Training</a></li>
				<li><a href="">Lifestyle and Nutritional Coaching</a></li>
				<li><a href="">Food Choice and Cooking Tuition</a></li>
				<li><a href="">Stretch & Mobility / Free to Move</a></li>
				<li><a href="">Remedial Massage</a></li>
				<li><a href="">Super Womens Strength Group</a></li>
				<li><a href="">Biosignature</a></li>
				<li><a href="">Exercise for Chronic Ilness Care</a></li>
            </ul>
        </div><!-- end .third -->
    	<div class="third" style="margin-left:65px;">
        	<div class="footitle">Join our mailing list</div>
            <div class="clear"></div>
            <p>Join the Strive Health Management for exclusive special offers and to be notified of upcoming events.</p>
            <form>
            </form>
        </div><!-- end .third -->
    	<div class="third right">
        	<div class="footitle">Where are we?</div>
            <div class="clear"></div>
            <div class="map">
            <div class="text"><b>Address:</b><br />
				9 / 27 Ascot Vale Road,<br />
				Flemington,<br />
				Victoria<br />
				<br />
				<b>Phone:</b><br />
				Kylie Royal | 0417 320 213<br />
                
				Melissa Desira | <br />0407 696 947</div>
            <img src="img/map.jpg" /></div>
            
        </div><!-- end .third -->
    </div>
</div><!-- END #subcontent -->
<div id="footer">
	<div class="container_16">
    	<div id="footmenu">
        	<a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Our People</a> | <a href="#">Our Services</a> | <a href="#">Timetable</a> | <a href="#">Blog</a> | <a href="#">Gallery</a> | <a href="#">Shop</a> | <a href="#">Contact</a> | <a href="#">Online PT Coaching</a>
        </div>
        <div class="clear"></div>
        <div class="copyright">© Strive Health Management 2012, Design & Development by <a target="_blank" href="http://www.creaturecreative.com.au">Creature Creative</a></div>
    </div>
</div><!-- END #footer -->
</body>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({controlNav: false});
});
</script>

</html>
