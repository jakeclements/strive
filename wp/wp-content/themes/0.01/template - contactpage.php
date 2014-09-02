<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
<!--
SETTING UP BETTER NOTIFICATION
<div id="notification">
	<div class="container_16">
	Join the Strive Mailing List to receive exclusive offers, updates & our free Ebook
    </div>
</div> -->
<div id="navback">
	<!-- START GENERATED MENU -->
    <div id="main-nav">
    <?php wp_nav_menu( array('menu' => 'Top Menu' )); ?>
    </div><!-- END MAIN NAV -->
	<!-- END GENERATED MENU -->
</div><!-- END NAVBACK -->
<div id="wrapper" class="container_16">
	<div id="header">
    	<a href="<?php bloginfo('url'); ?>"><div id="logo"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" /></div></a><!-- END LOGO -->
    </div><!-- END HEADER -->
    <div id="social">
		<a href="<?php the_field('facebook_url', 'options'); ?>"><div class="fb_16"></div></a>
    	<a href="<?php the_field('twitter_url', 'options'); ?>"><div class="twit_16"></div></a>
    	<a href="<?php the_field('youtube_url', 'options'); ?>"><div class="yout_16"></div></a>
    	<a href="mailto:<?php the_field('email_address', 'options'); ?>"><div class="mail_16"></div></a>
	</div><!-- END #SOCIAL -->
    <div class="grid_9" id="fullbar">
    	<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 
    	<div class="pagetitle"><?php the_title(); ?></div>
    	<div class="hr"></div>
        <div id="pagecontent">
            <div class="leftin">
			<?php the_content(); ?>
            </div>
            <div class="rightin">
            	<h2>Where are we?</h2>
            	<div class="googlemap">
                <iframe width="350" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Strive+health+management&amp;aq=&amp;sll=-37.763859,144.940452&amp;sspn=0.044036,0.071239&amp;ie=UTF8&amp;hq=Strive+health+management&amp;t=m&amp;ll=-37.784622,144.92177&amp;spn=0.015263,0.01502&amp;z=15&amp;iwloc=near&amp;output=embed"></iframe>
                </div>	
                <br /><br />
				
                <?php the_field('location', 'options');?>
                
                <br /><br />
                <h2>Interested in a career with Strive?</h2>
            	<p><strong>We would love to hear from you!</strong><br />
Email <a href="mailto:kylie@strivehm.com">Kylie Royal</a> with your information, application and CV</strong></p>




                
                
            		
            </div>
        
        </div><!-- END pagecontent -->
        <?php endwhile; ?>
     <?php endif; ?>
    </div><!--END fullbar -->
    
</div><!-- END WRAPPER -->
<div id="fullflair"></div>
<?php get_footer(); ?>