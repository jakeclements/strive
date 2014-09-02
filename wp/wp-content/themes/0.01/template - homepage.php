<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
<div id="flair"></div>
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
    
	
	<?php // START SLIDER REPEATER
	   if(get_field('slider')): ?>
    	<div class="slider-wrapper theme-default">
    		<div id="slider" class="nivoSlider">
		<?php while(has_sub_field('slider')): ?>
 			<?php $slideimage = wp_get_attachment_image_src(get_sub_field('slide_image'), 'slide-img'); ?>
			<a href="<?php the_sub_field('slide_link'); ?>"><img src="<?php echo $slideimage[0]; ?>" alt="<?php the_sub_field('slide_caption'); ?>" /></a>
		<?php endwhile; ?>
 			</div>
		</div><!-- END SLIDER -->
	<?php endif; ?>     
    
    
    <div id="home_modules">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?> 
    	<a href="<?php the_field('moduleone_link'); ?>"><div class="home_mod">
        	<div class="shine"></div>
            <div class="modcaption"><?php the_field('moduleone_text'); ?></div>
            <?php $modoneimage = wp_get_attachment_image_src(get_field('moduleone_image'), 'home-mod'); ?>
            <div class="modimg"><img src="<?php echo $modoneimage[0]; ?>" /></div>
        </div></a>
        <a href="<?php the_field('moduletwo_link'); ?>"><div class="home_mod"  style="margin-left:7px;">
        	<div class="shine"></div>
            <div class="modcaption"><?php the_field('moduletwo_text'); ?></div>
            <?php $modtwoimage = wp_get_attachment_image_src(get_field('moduletwo_image'), 'home-mod'); ?>
            <div class="modimg"><img src="<?php echo $modtwoimage[0]; ?>" /></div>
        </div></a>
        <a href="<?php the_field('modulethree_link'); ?>"><div class="home_mod"  style="margin-left:7px;">
        	<div class="shine"></div>
            <div class="modcaption"><?php the_field('modulethree_text'); ?></div>
            <?php $modthreeimage = wp_get_attachment_image_src(get_field('modulethree_image'), 'home-mod'); ?>
            <div class="modimg"><img src="<?php echo $modthreeimage[0]; ?>" /></div>
        </div></a>
        <a href="<?php the_field('modulefour_link'); ?>"><div class="home_mod"  style="margin-left:7px;">
        	<div class="shine"></div>
            <div class="modcaption"><?php the_field('modulefour_text'); ?></div>
            <?php $modfourimage = wp_get_attachment_image_src(get_field('modulefour_image'), 'home-mod'); ?>
            <div class="modimg"><img src="<?php echo $modfourimage[0]; ?>" /></div>
        </div></a>   
    </div><!-- END MODULE CONTAINER -->
    
    
    
    
    <div class="grid_10" id="leftbar">
    	
        
    <?php // START CATEGORY REPEATER
	   if(get_field('hm_post_displays')): while(has_sub_field('hm_post_displays')): ?>
        
			<?php $catid = get_sub_field('hm_category_name'); // Get Category ID
            $catobject = get_category($catid); // Get Category OBJECT by ID
			$category_name = $catobject->name; // Get Category NAME from OBJECT
			$postcounter = get_sub_field('hm_postnum'); // Post Counter?>
            
            
            
            <div class="home-events">
        		<h3><?php echo $category_name; ?></h3>
            	
							<?php
    			$the_query = new WP_Query('cat='. $catid .'&posts_per_page='.$postcounter);
				while ( $the_query->have_posts() ) : $the_query->the_post();?>
    			
			

            <div class="innermod">
            	<?php if(get_the_post_thumbnail($post->ID)){?>
            	<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'home-postthumb'); ?></a>
                <?php }else{?>
                <a href="<?php the_permalink(); ?>"><img src="http://www.strivehealthmanagement.com/wp/wp-content/uploads/2012/11/single.jpg" /></a>
                <?php }; ?>
                
                <div class="postdetails">
                	<a href="<?php the_permalink(); ?>"><div class="title"><?php the_title(); ?></div></a>
                    <div class="content"><?php echo substr(get_the_content($post->ID), 0,220); ?>...</div>
                    <div class="meta-cont">
                    	<a href="<?php the_permalink(); ?>"><div class="meta date"><?php the_time('d, m, Y') ?></div></a>
                        <a href="<?php the_permalink(); ?>"><div class="meta author"><?php the_author_firstname(); ?> <?php the_author_lastname(); ?></div></a>
                        <a href="<?php the_permalink(); ?>"><div class="meta read-more">Read more »</div></a>
                    </div>
                </div>
            </div><!-- END .innermod -->    


			<?php endwhile; wp_reset_query();?>
            
            <div class="hr" style="margin-left:2px;margin-top:8px;"></div>
        </div><!-- END category container -->
        
        
        

		<?php endwhile;  
		?>
	<?php endif; 
		// Reset Post Data
			wp_reset_query();
           // unset($catid);
			 //unset($postcounter);
			 //unset($ucatid);
			 //unset($ucatid);
			?>
    <?php endwhile; ?>
    <?php endif; ?> 
        
    
    
    </div><!-- END LEFTBAR -->
    <div class="grid_6" id="rightbar">
    	<?php get_template_part('sidebar'); ?>
    </div><!--END RIGHTBAR -->
    
</div><!-- END WRAPPER -->
<?php get_footer(); ?>