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
                <a class="nav-link" href="<?php echo base_url();?>index.php/c_research/index">
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
						<a class="nav-link active ml-3 my-1"href="<?php echo base_url();?>index.php/c_telephony/index">Telephony<span class="sr-only">(current)</span></a>
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
                <a class="nav-link" href="settings.php">
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
            <h1 class="h2">Admin table</h1>
			<div class="btn-toolbar mb-2 mb-md-0">
				<div class="btn group mr-2">
					<a href="<?php echo base_url();?>index.php/c_admin_table/register"><button class="btn btn-sm btn-default"><span data-feather="plus-square"></span> Add</button></a>

				</div>
			</div>
          </div>

		  <div class="page-content-wrapper">
			<div class="page-content" style="min-height: 434px;">
				<div class="portlet light bordered">
					<div class="portlet-title">
						<div class="caption font-green">
						<span data-feather="list"></span>
							<span class="caption-subject bold uppercase">List Data Admin</span>
						</div>
					</div>
					<div class="portlet-body">
						<div class="dataTables_wrapper no-footer" id="table_semua_perangkat_wrapper">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="dataTables_length" id="table_semua_perangkat_length">
									<label>
										Show
										<select name="table_semua_perangkat_length" class="form-control input-sm input-xsmall input-inline" aria-controls="table_semua_perangkat">
											<option value="10">10</option>
											<option value="15">15</option>
											<option value="20">20</option>
										</select>
									</label>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="dataTables_filter" id="table_semua_perangkat_filter">
										<label>
											Search:
											<input class="form-control input-sm input-small input-inline" aria-controls="table_semua_perangkat" type="search" placeholder="" />
										</label>
									</div>

								</div>
							</div>

							<div class="table-scrollable">
								<table width="100%" class="table table-striped table-bordered table-hover order-column dt-responsive dataTable no-footer dtr-inline" id="table_semua_perangkat" role="grid" aria-describedby="table_semua_perangkat_info" style=width:100%;" cellspacing="0">
								<thead>
									<tr role="row">
										<th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Nama: activate to sort column ascending" rowspan="1" colspan="1">NIP</th>
										<th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Merk: activate to sort column ascending" rowspan="1" colspan="1">Nama</th>
										<th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Jumlah: activate to sort column ascending" rowspan="1" colspan="1">Email</th>
										<th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Tersedia: activate to sort column ascending" rowspan="1" colspan="1">Username</th>
										<th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Tgl. Masuk: activate to sort column ascending" rowspan="1" colspan="1">Password</th>
										<th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Lokasi: activate to sort column ascending" rowspan="1" colspan="1">No. Telp</th>
										<th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Alamat IP: activate to sort column ascending" rowspan="1" colspan="1">Level</th>
										<th class="sorting_disabled" aria-controls="table_semua_perangkat" style="width: 0px;" aria-label="Aksi" rowspan="1" colspan="1">Aksi</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach($fetch_data as $fetch_admin):?>
									<tr class="odd" role="row">
										<td tabindex="0"><?php echo $fetch_admin->dt_nip ?></td>
										<td><?php echo $fetch_admin->dt_nama ?></td>
										<td><?php echo $fetch_admin->dt_email ?></td>
										<td><?php echo $fetch_admin->dt_username ?></td>
										<td class="sorting_1"><?php echo $fetch_admin->dt_password ?></td>
										<td><?php echo $fetch_admin->dt_no_telp ?></td>
										<td><?php echo $fetch_admin->level ?></td>
										<td>
											<a href="<?php echo base_url();?>index.php/c_superadmin/tampil_edit_admin/<?php echo $fetch_admin->dt_nip ?>" title="" class="btn btn-info btn-sm" href="#" data-toggle="tooltip" data-original-title="Edit" data-placement="top">
											<span data-feather="edit"></span></a>
											<a href="<?php echo base_url();?>index.php/c_admin_table/deletedata?dt_nip=<?php echo $fetch_admin->dt_nip ?>" title="" class="alat-delete btn btn-danger btn-sm" data-toggle"tooltip" data-original-title="Hapus" data-placement="top" data-id="1494203188">
											<span data-feather="trash-2"></span></a>
										</td>
									</tr>
								<?php endforeach;?>
								</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-md-5 col-sm-5">
									<div class="dataTables_info" id="table_semua_perangkat_info" role="status" aria-live="polite">Showing 1 to 10 of 18 records</div>
								</div>
								<div class="col-md-7 col-sm-7">
									<div class="dataTables_paginate paging_bootstrap_extended" id="table_semua_perangkat_paginate">
										<div class="pagination-panel">
											Page
											<a class="btn btn-sm default prev disabled" href="#">
											<span data-feather="chevron-left"></span></a>
											<input class="pagination-panel-input form-control input-sm input-inline input-mini" style="text-align:center; margin: 0 5px;" type="text" maxlength="5" />
											<a class="btn btn-sm default next" href="#">
											<span data-feather="chevron-right"></span></a>
											of
											<span class="pagination-panel-total">2</span>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
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
