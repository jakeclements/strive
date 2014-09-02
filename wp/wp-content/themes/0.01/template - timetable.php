<?php
/*
Template Name: Strive Template with Sidebar
*/
?>
<?php get_header(); ?>
<div id="single-flair"></div>
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
    	<a href="<?php bloginfo('url');?>"><div id="logo"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" /></div></a><!-- END LOGO -->
    </div><!-- END HEADER -->
    <div id="social">
		<a href="<?php the_field('facebook_url', 'options'); ?>"><div class="fb_16"></div></a>
    	<a href="<?php the_field('twitter_url', 'options'); ?>"><div class="twit_16"></div></a>
    	<a href="<?php the_field('youtube_url', 'options'); ?>"><div class="yout_16"></div></a>
    	<a href="mailto:<?php the_field('email_address', 'options'); ?>"><div class="mail_16"></div></a>
	</div><!-- END #SOCIAL -->
        <div id="halfbar">
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	<div class="pagetitle"><?php the_title(); ?></div>
    	<div class="hr"></div>
        <div id="pagecontent">
      			<?php the_content(); ?>
            <?php endwhile; ?>
     	<?php endif; ?>
        </div><!-- END pagecontent -->
    </div><!--END leftbar -->
    	<?php get_template_part( 'sidebartimetable' ); ?>
</div><!-- END WRAPPER -->
<div id="fullflair"></div>
<?php get_footer(); ?>