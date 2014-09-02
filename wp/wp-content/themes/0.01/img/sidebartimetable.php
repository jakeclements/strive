<div id="barright">  
	<div class="rightmod">
    	<div class="moduletitle">Register your interest</div>
    	<div class="lighthr" style="margin-top:4px;"></div>
    	<div class="modcontent">
        	<p class="registerint">Register your interest for an event below</p>             
            <form target="_blank" action="<?php bloginfo('template_directory');?>/form_submit.php" method="post">
            	<input class="registerform" onfocus="if(this.value == 'name'){this.value = '';}" type="text" onblur="if(this.value == ''){this.value='name';}" type="text" value="name" name="name" />
                <input class="registerform" type="text" onfocus="if(this.value == 'email'){this.value = '';}" type="text" onblur="if(this.value == ''){this.value='email';}" type="text" value="email" name="email" />
                <select name="event" class="registerselect">
                	
                    <?php
					$events = new WP_Query();
					$events->query('post_type=event');
					while ($events->have_posts()) : $events->the_post(); ?>
                    <option value="<?php the_title(); ?>"><?php the_title(); ?></option>
					<?php endwhile; ?>
                
                </select>
                <input type="hidden" name="link" value="<?php the_permalink();?>" />
                <button class="registerbutton" type="submit">Register interest</button>
            </form>
        </div><!-- END .MODCONTENT -->
	</div><!-- END RIGHTMOD -->
    
    <div class="rightmod">
    	<div class="moduletitle" style="margin-top:12px;">Class Timetable</div>
    	<div class="lighthr" style="margin-top:4px;"></div>
    	<div class="modcontent">
        	<p class="registerint">Print out a copy of our regular class timetable</p>             
			<p><a class="downloadbutton"  href="#"><span class="pdf"><img src="<?php bloginfo('template_directory');?>/img/pdftrans.png"</span>Download Timetable</a></p>
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
