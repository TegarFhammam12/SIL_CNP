<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIL LAB </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/master.css" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template -->
    <style type="text/css">
    body {
      font-size: .875rem;
    }

    .feather {
      width: 16px;
      height: 16px;
      vertical-align: text-bottom;
    }

	.logo-default{
		width: 20px;
		height: 20px;
	}

    /*
     * Sidebar
     */

    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 100; /* Behind the navbar */
      padding: 48px 0 0; /* Height of navbar */
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: .5rem;
      overflow-x: hidden;
      overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    }

    @supports ((position: -webkit-sticky) or (position: sticky)) {
      .sidebar-sticky {
        position: -webkit-sticky;
        position: sticky;
      }
    }

    .sidebar .nav-link {
      font-weight: 500;
      color: #333;
	  border-bottom: 1px solid #333;
    }

    .sidebar .nav-link .feather {
      margin-right: 4px;
      color: #999;
    }

    .sidebar .nav-link.active {
      color: #007bff;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
      color: inherit;
    }

    .sidebar-heading {
      font-size: .75rem;
      text-transform: uppercase;
    }

    /*
     * Content
     */

    [role="main"] {
      padding-top: 48px; /* Space for fixed navbar */
    }

    /*
     * Navbar
     */

    .navbar-brand {
      padding-top: .75rem;
      padding-bottom: .75rem;
      font-size: 1rem;
      background-color: rgba(0, 0, 0, .25);
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .form-control {
      padding: .75rem 1rem;
      border-width: 0;
      border-radius: 0;
    }

	.navbar-nav{
		display: flex;
		flex-direction: column;
		margin-bottom: 0px;
		list-style: none;
	}

    .form-control-dark {
      color: #fff;
      background-color: rgba(255, 255, 255, .1);
      border-color: rgba(255, 255, 255, .1);
    }

    .form-control-dark:focus {
      border-color: transparent;
      box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
    }

    /*
     * Utilities
     */

    .border-top { border-top: 1px solid #e5e5e5; }
    .border-bottom { border-bottom: 1px solid #e5e5e5; }

	.footer{
		position: fixed;
		bottom: 0px;
		width: 100%;
		height: 30px;
		line-height: 30px;
		background-color: #f5f5f5;
		text-align: center;
	}
    </style>
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">
	  <img class="logo-default" alt="logo" src="<?php echo base_url(); ?>assets/image/dds.png"> SIL CNP</a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link">
         <span data-feather="user"></span>
         <?php echo ucfirst($this->session->userdata('username'))?></a>
      </li>
    </ul>
	</nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>index.php/c_dashboard/index">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
                <nav class="nav flex-column">
      						<a class="nav-link ml-3 my-1"href="<?php echo base_url();?>index.php/Welcome/index">Home</a>
                </nav>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url();?>index.php/c_research/index">
                  <span data-feather="book"></span>
                  Research
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="server"></span>
                  Laboratory <span class="sr-only">(current)</span>
                </a>
					<nav class="nav flex-column">
						<a class="nav-link ml-3 my-1"href="<?php echo base_url();?>index.php/c_telephony/index">Telephony<span class="sr-only">(current)</span></a>
						<a class="nav-link ml-3 my-1"href="<?php echo base_url();?>index.php/c_internet/index">Internet</a>
						<a class="nav-link ml-3 my-1"href="<?php echo base_url();?>index.php/c_cloud/index">Cloud</a>
            <?php if($this->session->userdata('level')=='superadmin'):?>
            <a class="nav-link ml-3 my-1"href="<?php echo base_url();?>index.php/c_admin_table/index">Admin Table</a>
            <?php endif;?>
          </nav>
              </li>
              <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url();?>news/wp-login.php">
                                <span data-feather="file-text"></span>
                                News
                              </a>
                            </li>
              <li class="nav-item">
                <a class="nav-link" href="setting.php">
                  <span data-feather="settings"></span>
                  Setting
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>index.php/c_login/logout">
                  <span data-feather="log-out"></span>
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Research</h1>

          </div>

		  <div class="page-content-wrapper">
			<div class="page-content" style="min-height: 434px;">
				<div class="portlet light bordered">
					<div class="portlet-title">
						<div class="caption font-green">
						<span data-feather="plus-square"></span>
							<span class="caption-subject bold uppercase">Form Research Baru</span>
						</div>
					</div>

          <form method="post" action="<?php echo base_url();?>index.php/c_ResearchAdd/saved" enctype="multipart/form-data">
					<div class="portlet-body form">
						<form role="form" method="POST">
							<div class="form-body">

								<div class="row">
									<div class="col-md-4">
										<div class="form-group form-md-line-input form-md-floating-label">
											<input name="judul_dokumen" class="form-control" id="judul_dokumen" placeholder="Judul Dokumen" type="text">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group form-md-line-input form-md-floating-label">
											<input name="nomor_dokumen" class="form-control" id="nomor_dokumen" placeholder="Nomor Dokumen" type="text">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group form-md-line-input form-md-floating-label">
											<input type="date" name="date_picker" class="form-control" id="date_picker"/>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group form-md-line-input form-md-floating-label" >
											<input name="file_dokumen" class="form-control" id="file_dokumen" placeholder="File Dokumen" type="file">
										</div>
									</div>


									<!--div class="col-md-4">
										<h6> Upload Foto </h6>
											<div class="form-group form-md-line-input form-md-floating-label">
												<input name="foto" class="form-control" id="foto" required="" type="file" accept="image/jpeg" />
											</div>
										<h6> Upload Manual </h6>
											<div class="form-group form-md-line-input form-md-floating-label">
												<input name="foto" class="form-control" id="manual" required="" type="file" accept="application/pdf" />
											</div>
									</div-->
								</div>
							</div>

									<div class="form-actions noborder">
										<button class="btn btn-success btn-sm" type="submit">Submit</button>
									</div>
						</form>
					</div>
					</form>
				</div>
			</div>
		</div>
        </main>


      </div>
    </div>

	<footer class="footer">
		<div class="container">
			<span class="text-muted">
				2018 © SIL CNP by pu.
			</span>
		</div>
	</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>
