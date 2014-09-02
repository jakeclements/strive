
<div id="barright">  
 <?php while(has_sub_field("staff_sidebar_module")):?>
	<?php if(get_row_layout() == "instamod"): // Sidebar Module ?>
   
 <div class="rightmod">
    		<div class="moduletitle">Instagram</div>
            <div class="lighthr" style="margin-top:4px;"></div>
            <div class="modcontent">
            	<iframe src="http://widget.stagram.com/in/<?php the_sub_field('staff_instagram_module'); ?>/?s=90&w=2&h=4&b=1&p=5" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:210px; height:420px" ></iframe> <!-- Webstagram - web.stagram.com -->
            </div>
        </div><!-- END RIGHTMOD -->
        
<?php elseif(get_row_layout() == "twittermod"): // Staff Twitter Feed ?>
        <div class="rightmod">
        	<div class="moduletitle">Twitter Feed</div>
            <div class="lighthr" style="margin-top:4px;"></div>
            <div class="modcontent">
            	<div class="tweets"><div class="content_tweets"> </div> <div class="tweets_footer"></div> </div>
				<script type='text/javascript'>
					jQuery(".content_tweets").miniTwitter({username: ['<?php the_sub_field('staff_twittermod');?>'], limit: <?php the_sub_field('staff_tweetnumber');?>});
				</script>
            </div>
        </div><!-- END RIGHTMOD -->
        
<?php elseif(get_row_layout() == "staffpostby"): // Posts by ?>
        <div class="rightmod">
        	<?php $author = get_sub_field('posts_by'); ?>
            <?php $theauthorid = $author->ID; ?>
            <?php $pperpage = get_sub_field('staffpostnum'); ?>
        	<div class="moduletitle">Posts by <?php echo $author->user_firstname; ?></div>
            <div class="lighthr" style="margin-top:4px;"></div>
            <div class="modcontent">
            <ul>
            <?php 
			$the_query = new WP_Query( 'author=' . $theauthorid . '&posts_per_page=' . $pperpage );
				while ( $the_query->have_posts() ) :
				$the_query->the_post();?>
				
                <li class="staff_post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                
                
				<?php endwhile;
					wp_reset_query();
					wp_reset_postdata();
				?>
                </ul>
            </div>
        </div><!-- END RIGHTMOD -->        
        
        
        
	<?php endif; ?>
<?php endwhile; ?>
</div><!--END RIGHTBAR --> 
