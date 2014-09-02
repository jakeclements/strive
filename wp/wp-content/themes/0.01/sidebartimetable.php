<div id="barright">  
	 <?php if(get_field('strive_timetable_file', 159)){ ?>
        <div class="rightmod">
    	<div class="moduletitle">Class Timetable</div>
    	<div class="lighthr" style="margin-top:4px;"></div>
    	<div class="modcontent">
        	<p class="registerint">Print out a copy of our regular class timetable</p>             
			<p><a class="downloadbutton" target="_blank" href="<?php the_field('strive_timetable_file', 159); ?>"><span class="pdf"><img src="<?php bloginfo('template_directory');?>/img/pdftrans.png"</span>Download Timetable</a></p>
        </div><!-- END .MODCONTENT -->
	</div><!-- END RIGHTMOD -->
	<?php }; ?>

	<div class="rightmod" style="margin-top:24px;">
    	<div class="moduletitle">Register your interest</div>
    	<div class="lighthr" style="margin-top:4px;"></div>
    	<div class="modcontent">
    		<p class="registerint">Register your interest for an event by emailing us at <a href="mailto:&#107;&#121;&#108;&#105;&#101;&#064;&#115;&#116;&#114;&#105;&#118;&#101;&#104;&#109;&#046;&#099;&#111;&#109;">Strive!</a></p>	
    		
    		<?php 
    		/*gravity_form_enqueue_scripts(1, true);
    		gravity_form(1, false, false, false, '', false);*/ ?>
    		
    		
    		
        </div><!-- END .MODCONTENT -->
	</div><!-- END RIGHTMOD -->



 <?php while(has_sub_field("staff_sidebar_module")):?>
	<?php if(get_row_layout() == "instamod"): // Sidebar Module ?>
   
        
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
