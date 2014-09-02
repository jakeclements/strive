<div id="barright">  

 <?php while(has_sub_field("servside")):?>
	<?php if(get_row_layout() == "testimonial_rep"): // Sidebar Module ?>
   	
    
		<?php if(has_sub_field('testimonial_select')): ?>
        	TEST
			<?php while(the_sub_field('testimonial_singserv')): ?>
            	TEST2
 				<?php $printme = get_sub_field('testimonial_singserv'); ?>
                <?php echo print_r($printme); ?>
 			<?php endwhile; ?>
   		<?php endif; ?>
   
   

	<?php endif; ?>
<?php endwhile; ?>
</div><!--END RIGHTBAR --> 
