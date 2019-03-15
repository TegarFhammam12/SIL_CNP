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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <!-- Custom styles for this template -->
	<link href="<?php echo get_bloginfo('template_directory'); ?>/css/styles.css" rel="stylesheet" type="text/css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">


	body{
		margin: 0;
		padding: 0;
		font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
		font-size: 1.5rem;
		font-weight: 400;
		line-height: 1.5;
		height: 100%;
		color: white;
		display: flex;
		text-shadow: 0px 0.05rem 0.1rem rgba(0,0,0,0.5);
		background-color: #7c0202;
		background-size: 100%;
	}

	html, body{
		height: 100%;
	}

	.feather {
      width: 3vh;
      height: 3vh;
	  vertical-align: text-bottom;
    }

	.inner-cover{
		margin-top: 170px;
		margin-bottom: 150px;
		width:100%;
		text-align: center!important;
	}

	.mid{
		top: 50%;
		left: 50%;
		position: absolute;
		transform: translate(-50%, -50%);
	}


	.sub{
		text-align: center;
		margin-top: 0;
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

.carousel{
	margin-top:20px;
	justify-content: center;
}

.carousel .item {
  height: 550px;
}

.item img {
    position: absolute;
    top: 0;
    left: 0;
    min-height: 300px;
}

.carousel-indicators{
	position: absolute;
	right:0px;
	bottom:10px;
	left:0px;
	z-index:15;
	display:flex;
	justify-content:center;
	padding-left:0px;
	margin-left:20%;
	list-style:none;
}

dl, ol, ul{
	margin-top:0px;
	margin-bottom:1rem;
}

.carousel-indicators .active{
	background-color:#fff;
}

.carousel-indicators li{
	position:relative;
	flex: 0 1 auto;
	margin-right: 3px;
	margin-left: 3px;
	text-indent:-999px;
}

.boxes {
	flex-direction: column;
	position: relative;
	height: auto;
	width: 100%;
	display: flex;
	background-color: #7c0202;
	-ms-overflow-style: none;
    overflow: -moz-scrollbars-none;

}

.boxes::-webkit-scrollbar {
    display: none;  // Safari and Chrome
}

.top-boxes{
	width: 100%;
	height: auto;
	min-height: 0;
	max-height: 100vh;
	flex-shrink: 0;
	overflow-y:scroll;
	overflow-x:hidden;

}

/* width */
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: transparent;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555;
}
	</style>
<?php wp_head();?>
  </head>


  <body>
	<a href="#welcome" class="btn top-button" id="back-top">
	</a>
	<a href="#about" class="btn top-button" id="back-category">
	</a>

	<div class="container">
		    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">



		<section id="welcome" class="unscrollable">

			<header class="masthead mb-auto">
				<div class="inner">
				  <!--<h3 class="masthead-brand">Cover</h3>-->
				  <nav class="nav nav-masthead justify-content-end">
					<a class="nav-link " href="home.php">Home</a>
					<a class="nav-link " href="news/index.php">News</a>
					<a class="nav-link active" href="index.php/c_dashboard/index">Dashboard</a>
					<a class="nav-link " href="login.php">About</a>

				  </nav>
				</div>
			</header>
