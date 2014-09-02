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