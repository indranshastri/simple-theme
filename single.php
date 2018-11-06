<?php get_header() ?>
	<div class="container">
		<div class="main">
		    <?php if (have_posts()): ?>
		    	<?php while(have_posts()): the_post(); ?>

		    		<!-- article post details -->
		    		<article class="post">
		    			<!-- header title for the blog -->
			    		<h3>
			    			<?php the_title() ?>	
			    		</h3>
			    		<!-- ends title for the blog -->

			    		<!-- starting of the meta -->
			    		<div class="meta">
			    			Created By
			    			<a href="<?php get_author_posts_url( get_the_author_meta( 'ID')); ?>">
			    				<?php the_author(); ?>
			    			</a>
							on <?php the_time('F j, Y g:i a') ?>
			    		</div>
			    		<!-- ending of the meta -->
			    		<!--  the post main detals -->
			    		<?php if(has_post_thumbnail()) : ?>
							<div class="post-thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php endif; ?>
						<?php the_content(); ?>
						<br>
						<!-- the post main details ends -->	
		    		</article>
		    		<!-- article post details ends -->
		    	<?php endwhile; ?>
		    	<?php comments_template() ?>
		    <?php else: ?>
		    	<?php echo wpautop( "Sorry, No posts") ?>
		    <?php endif ?>
			
	    </div>
	    <div class="sidebar">
		<?php 
			if(is_active_sidebar('sidebar')):
					dynamic_sidebar('sidebar');
			endif;
		 ?>
	</div>
	<div class="clr"></div>
	</div>

<?php get_footer() ?>