 <?php 
	while(has_sub_field("sidebarhome")):
	if(get_row_layout() == "imagemod"): // Sidebar Module ?>

		<div class="module" id="services">
        	<div class="controllers">
            	<div class="prevslide"></div>
            	<div class="nextslide"></div>
            </div>  
            <div class="title">
            	<?php the_sub_field("sb_module_title"); ?>
            </div>
            <div class="lighthr"></div>
            <div class="bxslider">
            
            	<?php if(get_sub_field("sb_sidebar_images")): ?>
					<?php foreach(get_sub_field("sb_sidebar_images") as $p): ?>
                    
                    <div class="bxslide">
                    	
                    	<?php $sideimg = wp_get_attachment_image_src($p['sb_image'], 'sidebar-thumb'); ?>
            			<a class="a-speed" href="<?php echo $p['sb_sidebar_link']; ?>"><div class="bxslideimg"><img src="<?php echo $sideimg[0]; ?>" /></div></a>
                		<div class="bxslidecap"><?php echo $p['sb_image_title']; ?></div>
            		</div><!-- END .bxslide -->
                    
					<?php endforeach; ?>
				<?php endif; ?>
            </div><!-- END #bxslider -->
        </div><!-- END #MODULE --> 
        
        <?php elseif(get_row_layout() == "testimonial_module"): // Testimonial Module Home ?>
        
        <div class="module" id="testimonials">
        	<div class="controllers">
            	<div class="prevslide"></div>
            	<div class="nextslide"></div>
            </div>  
            <div class="title">
            	Testimonials 
            </div>
            <div class="lighthr"></div>
            <div class="bxslider">
            
            <?php
			$sidePosts = new WP_Query( 'post_type=testimonials&showposts=2' );
			while ($sidePosts->have_posts()) : $sidePosts->the_post(); ?>

                <div class="bxtest">
                	<?php if(get_field('testclient_image')){ ?>
                    	<?php $testimg = wp_get_attachment_image_src(get_field('testclient_image'), 'testimonial'); ?>
						<img src="<?php echo $testimg[0]; ?>" />
					<?php }else{ ?>
						<img src="<?php bloginfo('template_directory'); ?>/img/testimonial_user.png" />
						<?php }?>
            		<div class="testim_name"><?php the_title(); ?><span class="dater"> <?php the_date('Y'); ?></span></div>
                    <div class="testim_content"><?php echo substr(get_the_content(), 0,60); ?>...</div>
                    <div class="clear"></div>
                    <a href="<?php the_permalink(); ?>"><div class="meta read-more">Read more »</div></a>
                    <a href="mailto:kylie@strivehm.com?Subject=Strive%20Recommendation"><div class="meta date">Recommend Strive »</div></a>
            	</div><!-- END .bxslide/Testimonial -->   
                
             <?php wp_reset_postdata(); endwhile; ?>   
                
            </div><!-- END #bxslider -->
        </div><!-- END #MODULE --> 
        

        <?php elseif(get_row_layout() == "supportrecommend"): // Supports and Recommends  ?>
        
        <div class="module" id="support">
       		<div class="controllers">
            	<div class="prevslide"></div>
            	<div class="nextslide"></div>
            </div>  
            <div class="title">
            	<?php the_sub_field("s_r_title"); ?>
            </div>
            <div class="lighthr"></div>
            <div class="bxslider">
            <?php if(get_sub_field("s_r_img")): ?>
					<?php foreach(get_sub_field("s_r_img") as $r): ?>
                <?php $supimg = wp_get_attachment_image_src($r['s_r_image'], 'full'); ?>    
                <div class="bximg">
                	<div class="const"><a class="speed" href="<?php echo $r['s_r_image_link']; ?>"><img src="<?php echo $supimg[0]; ?>" /></a></div>
                    <div class="supportslidecap"><?php echo $r['s_r_image_caption']; ?></div>
            	</div><!-- END .bxslide/Testimonial -->
             		<?php endforeach; ?>
			<?php endif; ?>   
                
                   
            </div><!-- END #bxslider -->
        </div><!-- END #MODULE --> 

        
	<?php endif; ?>
<?php endwhile; ?>