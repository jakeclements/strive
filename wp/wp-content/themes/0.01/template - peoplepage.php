<?php
/*
Template Name: Our People
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
    	<div class="pagetitle"><?php the_title(); ?></div>
    	<div class="hr"></div>
        <div id="pagecontent">
            
			<?php the_content(); ?>
            <div class="hr" style="width:890px; margin-bottom:8px;"></div>
            
            <?php
				// The Query
				$the_query = new WP_Query('post_type=staff&postsperpage=-1');
				// The Loop
				while ( $the_query->have_posts() ) : $the_query->the_post();?>
				
                <a href="<?php the_permalink(); ?>"><div class="teammember">
            		<div class="modcaption"><?php the_title(); ?></div>
                     <?php $staffimage = wp_get_attachment_image_src(get_field('staffphoto'), 'staff-mod'); ?>
           			<div class="modimg"><img src="<?php echo $staffimage[0]; ?>" /></div>
            	</div><!-- END teammember --></a>    
				
				<?php endwhile;
				// Reset Post Data
				wp_reset_postdata();?>
        	
            
            
          
            
            
            
        </div><!-- END pagecontent -->
    </div><!--END fullbar -->
    
</div><!-- END WRAPPER -->
<div id="fullflair"></div>
<?php get_footer(); ?>