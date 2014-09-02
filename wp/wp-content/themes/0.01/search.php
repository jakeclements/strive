<?php
/*
Template Name: Search Page
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
    	<div class="pagetitle">
        Results for: <?php the_search_query(); ?>
        
        </div>
    	<div class="hr"></div>
        <div id="pagecontent">
        	<!-- START BLOGPOSTS -->
            <?php
				global $query_string;
				$query_args = explode("&", $query_string);
				$search_query = array();
				foreach($query_args as $key => $string) {
					$query_split = explode("=", $string);
					$search_query[$query_split[0]] = urldecode($query_split[1]);
					} // foreach
				$search = new WP_Query($search_query);
				
			?>
            <?php if ($search->have_posts()) : ?>
               <?php while ($search->have_posts()) : $search->the_post(); ?>    
			   
              

               
               
               <div class="blogarch">
                <?php if(get_field('recipe_photo')){ ?>
                
               		<a href="<?php the_permalink(); ?>"><div class="img"><img src="<?php echo get_the_post_thumbnail(the_field('recipe_photo'), 'home-postthumb'); ?>" /></div></a>
                <?php } elseif(get_the_post_thumbnail($post->ID)){?>
                	<a href="<?php the_permalink(); ?>"><div class="img"><?php echo get_the_post_thumbnail($post->ID, 'home-postthumb'); ?></div></a>
                <?php }else{?>    
                 	<a href="<?php the_permalink(); ?>"><div class="img"><img src="<?php bloginfo('url');?>/wp-content/uploads/2012/11/single.jpg" /></div></a>
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
     		<?php endif; ?>
            

                <div id="wpnavi"><?php wp_pagenavi(); ?></div>
            <!-- END BLOGPOSTS -->
        </div><!-- END pagecontent -->
    </div><!--END Halfbar -->
    <div id="barright">
    	
        <?php
		// The Query
			$the_query = new WP_Query( 'page_id=47' );
		// The Loop
			while ( $the_query->have_posts() ) : $the_query->the_post();?>

	<?php while(has_sub_field("indexsidebar")):?>
		<?php if(get_row_layout() == "blogsearchmod"): // Sidebar Module ?>
      	<div class="rightmod">
    		<div class="moduletitle"><?php the_sub_field('bloghead'); ?></div>
            <div class="lighthr" style="margin-top:4px;"></div>
            <div class="modcontent">
            	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
					<input class="searchbar" name="s" id="s" type="text" value="Search Strive" onblur="if(value=='') value = 'Search Strive'" onfocus="if(value=='Search Strive') value = ''" />
				</form>
            </div>
        </div><!-- END RIGHTMOD -->
<?php elseif(get_row_layout() == "indxcatmodule"): // Sidebar Module ?>
      	<div class="rightmod">
    		<div class="moduletitle">Categories</div>
            <div class="lighthr" style="margin-top:4px;"></div>
            <div class="modcontent">
            	<ul class="cats">
                	<?php wp_list_categories('orderby=name&show_count=0&child_of=9&title_li='); ?>
                </ul><!-- END CATEGORIES -->
            </div>
        </div><!-- END RIGHTMOD -->
<?php elseif(get_row_layout() == "indxarchive_module"): // Sidebar Module ?>        
        <div class="rightmod">
    		<div class="moduletitle">Archives</div>
            <div class="lighthr" style="margin-top:4px;"></div>
            <div class="modcontent">
            	<ul class="cats">
                	<?php get_archives('monthly', '', 'html', '', '', FALSE); ?>
                </ul><!-- END CATEGORIES -->
            </div>
        </div><!-- END RIGHTMOD -->
            
            
            
            
            
            
            
            
            
            
	<?php endif; ?>
<?php endwhile; ?>  


<?php endwhile;
// Reset Post Data
wp_reset_postdata();?>
        
        
        
        
    </div><!-- END barright -->
</div><!-- END WRAPPER -->
<div id="fullflair"></div>
<?php get_footer(); ?>