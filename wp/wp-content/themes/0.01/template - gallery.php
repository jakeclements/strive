<?php
/*
Template Name: Strive Gallery
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
<?php while ( have_posts() ) : the_post(); ?>    	
        <div class="pagetitle"><?php the_title(); ?></div>
    	<div class="hr"></div>
        <div id="pagecontent">
            
			<?php the_content(); ?>
            <div class="hr" style="width:890px; margin-bottom:8px;"></div>
           
           		<!-- START GALLERY NESTED LOOPS
                 -->
           

 
				<?php 
				// check for rows (parent repeater)
				if( get_field('galleries') ): ?>
					
					<?php // loop through rows (parent repeater)
					while( has_sub_field('galleries') ): ?>
						<div class="gallery_container">
						<div class="title"><?php the_sub_field('gallery_title'); ?></div>
                        <?php the_sub_field('gallery_overview'); ?>
                        
                        <?php $galtitle = get_sub_field('gallery_title'); ?>
							
							<?php 
							// check for rows (sub repeater)
							if( get_sub_field('gallery_images') ): ?>
								<?php 
								// loop through rows (sub repeater)
								while( has_sub_field('gallery_images') ): ?>
                                	 	<?php $galimage = wp_get_attachment_image_src(get_sub_field('gallery_image'), 'gallery-thumb'); ?>
                                        <?php $galfull = wp_get_attachment_image_src(get_sub_field('gallery_image'), 'full'); ?>
										<a rel="<?php echo $galtitle; ?>" class="fancybox" href="<?php echo $galfull[0]; ?>"><div class="galimage"><div class="galconst"><img src="<?php echo $galimage[0]; ?>" /></div></div></a>
								<?php endwhile; ?>
							<?php endif; //if( get_sub_field('items') ): ?>
                            <div class="hr" style="width:890px; margin-bottom:18px;"></div>
                            </div><!-- END GALLERY CONTAINER -->
                            <?php unset($galtitle);?>
					<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
				<?php endif; // if( get_field('to-do_lists') ): ?>
 
			<?php endwhile; // end of the loop. ?>
           
        </div><!-- END pagecontent -->
    </div><!--END fullbar -->
    
</div><!-- END WRAPPER -->
<div id="fullflair"></div>
<?php get_footer(); ?>