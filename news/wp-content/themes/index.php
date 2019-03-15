<?php get_header(); ?>

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">

		  <div class="item active">
			<img src="arch.jpg" alt="Los Angeles">
			<div class="carousel-caption">
			  <h3>HEADLINE</h3>
			  <p>Lorem ipsum sid dolor amet.</p>
			</div>
			
		  </div>
	  
		  <div class="item">
			<img src="arch.jpg" alt="Chicago">
			<div class="carousel-caption">
			  <h3>HEADLINE</h3>
			  <p>Lorem ipsum sid dolor amet.</p>
			</div>
		  </div>
    
		  <div class="item">
			<img src="arch.jpg" alt="New York">
			<div class="carousel-caption">
			  <h3>HEADLINE</h3>
			  <p>Lorem ipsum sid dolor amet.</p>
			</div>
		  </div>
  
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
	  
	  </section>
	  
		
	   <section id="about" class="scrollable">
		<div class="boxes">
	  	  	  <div class="top-boxes">
			<div class="container-category" style="margin-top:10vh;">
				
				<div class="row">
					<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post();

						get_template_part( 'content', get_post_format() );

					endwhile; endif; 
					?>
					
			</div>
			</div>
		</div>
	  </section>
	  </div>
	
		<?php get_footer(); ?>

