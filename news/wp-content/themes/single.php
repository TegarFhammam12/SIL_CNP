<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>SIL CNP</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Custom styles for this template -->

    <style type="text/css">


	body{
		margin: 0;
		padding: 0;
		font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
		font-size: 1rem;
		font-weight: 400;
		line-height: 1.5;
		height: 100%;
		color: white;
		display: flex;
		text-shadow: 0px 0.05rem 0.1rem rgba(0,0,0,0.5);
		background-image: url("<?php echo get_bloginfo('template_directory'); ?>/background.png");
		background-size: 100%;

	}

	a{
		color: white;
		pointer-events: none;
		  cursor: default;
		  text-decoration: none;
	}

	html, body{
		height: 100%;
	}

	.feather {
      width: 3vh;
      height: 3vh;
	  display: inline;
    }

	.inner-cover{
		margin-top: 170px;
		margin-bottom: 150px;
		width:100%;
	}

	.mid{
		margin:0;
	}

	img{
		display: block;
		padding: 20px;

	}

	.sub{
		text-align: center;
		margin-top: 7%;
	}

	.textheader{
		text-align: center;
		padding:10px;
	}

	.form-textarea {
    width: 100%;
    height: 150px;
    box-sizing: border-box;
    border-radius: 10px;
    resize: none;
}

.inner-heading{
	margin-left:10%;
	margin-right:10%;
	margin-top: 3%;
	text-align: justify;
}

	</style>

  </head>


  <body>


    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
		<section id="welcome">
      <header class="masthead mb-auto">
        <div class="inner">
          <!--<h3 class="masthead-brand">Cover</h3>-->
          <nav class="nav nav-masthead justify-content-end">
			<a class="nav-link " href="<?php echo base_url();?>">Home</a>
			<a class="nav-link " href="news/index.php">News</a>
			<a class="nav-link active" href="aboutus.php">About</a>
            <a class="nav-link " href="login.php">Login</a>

          </nav>
        </div>
      </header>
      </header>

      <main role="main" class="inner-heading">
			<h1> SIL CNP - News </h1>
				<p>
					<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post();
						get_template_part( 'content-single', get_post_format() );
					endwhile; endif;
					?>
				</p>
	 </main>
	  </section>

<?php get_footer(); ?>
