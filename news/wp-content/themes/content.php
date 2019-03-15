<div class="col-sm-4">
	<div class="sub">
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		}
		?>
	</div>
</div>


<div class="col-md-8">
	<h5><?php the_title(); ?></h5>
	<p style="text-align:justify; margin-right:50px; margin-top:30px; margin-bottom:30px;"><?php the_excerpt(); ?>
	<a href="<?php the_permalink(); ?>">See more..</a>
	</p>
</div>