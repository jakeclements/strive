<div id="barright">  

 <?php while(has_sub_field("servside")):?>
	<?php if(get_row_layout() == "testimonial_rep"): // Sidebar Module ?>
   	
    
		<?php if(get_sub_field('testimonial_select')): ?>
        	<div class="rightmod">
    			<div class="moduletitle">Testimonials</div>
            		<div class="lighthr" style="margin-top:4px;"></div>
			<?php while(has_sub_field('testimonial_select')): ?>
 				<?php $testimonial = get_sub_field('testimonial_singserv'); ?>
                
            		<div class="modcontent">
                    	<?php if(get_field('testclient_image')){ ?>
                    		<?php $testimg = wp_get_attachment_image_src(get_field('testclient_image'), 'testimonial'); ?>
							<img src="<?php echo $testimg[0]; ?>" />
						<?php }else{ ?>
							<img src="<?php bloginfo('template_directory'); ?>/img/testimonial_user.png" />
						<?php }?>
            			<div class="testim_name"><?php echo $testimonial->post_name; ?></div>
                    	<div class="testim_content"><?php echo substr($testimonial->post_content, 0,160); ?>...</div>
                    	<div class="clear"></div>
                    	<a href="<?php echo $testimonial->guid; ?>"><div class="meta read-more">Read more »</div></a>
            		</div>
                    <div class="lighthr" style="margin-top:4px; margin-bottom:4px;"></div>
                    
 			<?php endwhile; ?>
            	</div><!-- END RIGHTMOD -->
   		<?php endif; ?>
   
   

	<?php endif; ?>
<?php endwhile; ?>
</div><!--END RIGHTBAR --> 
