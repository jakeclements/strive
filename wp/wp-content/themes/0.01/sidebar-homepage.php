<?php 
	while(has_sub_field("sidebarhome", 35)):
	if(get_row_layout() == "image_module"): // Sidebar Module ?>

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
            			<div class="bxslideimg"><img src="<?php bloginfo('template_directory'); ?>/img/service1.jpg" /></div>
                		<div class="bxslidecap"><?php echo the_field($p->ID); ?></div>
            		</div><!-- END .bxslide -->
                    
                    
						
					<?php endforeach; ?>
				<?php endif; ?>
            
            
            	

            </div><!-- END #bxslider -->
        </div><!-- END #MODULE --> 
 		
        <?php elseif(get_row_layout() == "featured_posts"): // layout: Featured Posts ?>
 
		<div>
			<h2><?php the_sub_field("title"); ?></h2>
			<?php the_sub_field("content"); ?>
 
			<?php if(get_sub_field("posts")): ?>
				<ul>
				<?php foreach(get_sub_field("posts") as $p): ?>
					<li><a href="<?php echo get_permalink($p->ID); ?>"><?php echo get_the_title($p->ID); ?></a></li>
				<?php endforeach; ?>
				</ul>
			<?php endif; ?>
 
		</div>
 
	<?php endif; ?>
 
<?php endwhile; ?>