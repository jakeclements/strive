<?php
/*
Template Name: Index/Blog Page
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
    <div class="grid_9" id="halfbar">
    	<div class="pagetitle">Blog</div>
    	<div class="hr"></div>
        <div id="pagecontent">
        	<!-- START BLOGPOSTS -->
              
               <?php
			
			// The Query
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$wp_query = new WP_Query('cat=9&showposts=6&paged='.$paged);
			// The Loop
			if ($wp_query->have_posts()) :
			while ( $wp_query->have_posts() ) : $wp_query->the_post();?>
            	<div class="blogarch">
                <?php if(get_field('recipe_photo')){ ?>
                
               		<a href="<?php the_permalink(); ?>"><div class="img"><img src="<?php echo get_the_post_thumbnail(the_field('recipe_photo'), 'home-postthumb'); ?>" /></div></a>
                <?php } elseif(get_the_post_thumbnail($post->ID)){?>
                	<a href="<?php the_permalink(); ?>"><div class="img"><?php echo get_the_post_thumbnail($post->ID, 'home-postthumb'); ?></div></a>
                <?php }else{?>    
                 	<a href="<?php the_permalink(); ?>"><div class="img"><img src="http://www.strivehealthmanagement.com/wp/wp-content/uploads/2012/11/single.jpg" /></div></a>
                <?php }; ?>   
                    <div class="postdetails">
                		<a href="<?php the_permalink(); ?>"><div class="title"><?php the_title(); ?></div></a>
                    	<div class="content"><?php echo substr(get_the_excerpt(), 0,220); ?>...</div>
                    	<div class="meta-cont">
                        	<a href="<?php the_permalink(); ?>"><div class="blread-more">Read more »</div></a>
                    		<div class="bldate"><?php the_time('d, m, Y') ?>, by <a href="<?php the_permalink(); ?>"><?php the_author_firstname(); ?> <?php the_author_lastname(); ?></a></div>
                    	</div>
                	</div><!-- END post details -->
                </div><!-- END .blogarch -->
                <?php endwhile; ?>
                
                
                <div id="wpnavi"><?php wp_pagenavi(); ?></div>
                <?php endif; wp_reset_query();?>
             
               
           
            <!-- END BLOGPOSTS -->
        </div><!-- END pagecontent -->
    </div><!--END Halfbar -->
    	<div id="barright">
       		<?php get_template_part('sidebarblog'); ?>
        </div><!-- END barright -->           
</div><!-- END WRAPPER -->
<div id="fullflair"></div>

<?php get_footer(); ?>
