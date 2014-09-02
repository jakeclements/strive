<div id="subcontent">
	<div class="container_16">
    	<div class="third">
        	<div class="footitle">What can we do?</div>
            <ul>
            <?php
				// The Query
				$the_query = new WP_Query('post_type=services&postsperpage=-1');
				// The Loop
				while ( $the_query->have_posts() ) : $the_query->the_post();?>
				
                	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				
				<?php endwhile;
				// Reset Post Data
				wp_reset_postdata();?>
            
            </ul>
        </div><!-- end .third -->
    	<div class="third" style="margin-left:65px;">
        	<div class="footitle">Join our mailing list</div>
            <div class="clear"></div>
            <p>Join the Strive Health Management for exclusive special offers and to be notified of upcoming events.</p>
            <!-- Begin MailChimp Signup Form -->
				<form action="http://strivehealthmanagement.us5.list-manage.com/subscribe/post?u=2731f35fd756b2e4f939ee433&amp;id=6c91ff563e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<input type="email" value="Email" name="EMAIL" class="required email" id="mce-EMAIL" onblur="if(value=='') value = 'Email'" onfocus="if(value=='Email') value = ''">
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
				</form>
			<!--End mc_embed_signup-->
        </div><!-- end .third -->
    	<div class="third right">
        	<div class="footitle">Where are we?</div>
            <div class="clear"></div>
            <a class="ajaxify" href="https://maps.google.com/maps?q=strive+health+management&hl=en&sll=-37.763859,144.940452&sspn=0.057471,0.132093&hq=strive+health+management&t=m&z=15"><div class="map">
            	<div class="text"><?php the_field('location','options');?></div>
            	<img src="<?php the_field('mapimg','options'); ?>" />
            </div></a>
            
        </div><!-- end .third -->
    </div>
</div><!-- END #subcontent -->
<div id="footer">
	<div class="container_16">
    	<div id="footmenu">
        	<?php wp_nav_menu( array('menu' => 'Bottom Menu' )); ?>
        </div>
        <div class="clear"></div>
        <div class="copyright">© Strive Health Management 2012, Design & Development by <a target="_blank" href="http://www.creaturecreative.com.au">Creature Creative</a></div>
    </div>
</div><!-- END #footer -->
</body>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({controlNav: false});
});
</script>

</html>
