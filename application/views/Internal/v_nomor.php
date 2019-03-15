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
                <a class="nav-link" href="<?php echo base_url();?>index.php/c_internal_dashboard/index">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
                <nav class="nav flex-column">
      						<a class="nav-link ml-3 my-1"href="<?php echo base_url();?>index.php/Welcome/index">Home</a>
                </nav>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>index.php/c_internal/research">
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
						<a class="nav-link ml-3 my-1"href="<?php echo base_url();?>index.php/c_internal/telephony">Telephony</a>
						<a class="nav-link ml-3 my-1"href="<?php echo base_url();?>index.php/c_internal/internet">Internet</a>
						<a class="nav-link ml-3 my-1"href="<?php echo base_url();?>index.php/c_internal/cloud">Cloud</a>
            <a class="nav-link active ml-3 my-1"href="<?php echo base_url();?>index.php/c_internal/nomor">Alokasi Nomor<span class="sr-only">(current)</span></a>
            <a class="nav-link ml-3 my-1"href="<?php echo base_url();?>index.php/c_internal/user">Alokasi User</a>
            <a class="nav-link ml-3 my-1"href="<?php echo base_url();?>index.php/c_internal/pc">PC LAB</a>

          </nav>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
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
            <h1 class="h2">Alokasi Nomor</h1>
          </div>

		 <div class="page-content-wrapper">
			<div class="page-content" style="min-height: 434px;">
				<div class="portlet light bordered">
					<div class="portlet-title">
						<div class="caption font-green">
						<span data-feather="list"></span>
							<span class="caption-subject bold uppercase">List Data Perangkat</span>
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
                    <form class="form-inline" role="form" action="<?php echo base_url();?>index.php/c_internal/sgenerator_nomor" method="post">
										<label>
											Search:
											<input class="form-control input-sm input-small input-inline" aria-controls="table_semua_perangkat" type="search" id="search" name="search"/>
                      <button class="btn btn-success btn-sm" type="submit">Search</button>
										</label>
                    </form>
									</div>

								</div>
							</div>

							<div class="table-scrollable">
								<table width="100%" class="table table-striped table-bordered table-hover order-column dt-responsive dataTable no-footer dtr-inline" id="table_semua_perangkat" role="grid" aria-describedby="table_semua_perangkat_info" style=width:100%;" cellspacing="0">
								<thead>
									<tr role="row">
                    <th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="No: activate to sort column ascending" rowspan="1" colspan="1">No</th>
                    <th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Nama: activate to sort column ascending" rowspan="1" colspan="1">Nama</th>
										<th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Merk: activate to sort column ascending" rowspan="1" colspan="1">IMS Core</th>
										<th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Jumlah: activate to sort column ascending" rowspan="1" colspan="1">Unit</th>
										<th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Tersedia: activate to sort column ascending" rowspan="1" colspan="1">Institusi</th>
										<th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Tgl. Masuk: activate to sort column ascending" rowspan="1" colspan="1">TEL</th>
										<th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Lokasi: activate to sort column ascending" rowspan="1" colspan="1">SIP</th>
										<th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Alamat IP: activate to sort column ascending" rowspan="1" colspan="1">IMPI/Username</th>
										<th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Spesifikasi: activate to sort column ascending" rowspan="1" colspan="1">Password</th>
										<th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Deskripsi: activate to sort column ascending" rowspan="1" colspan="1">Keterangan</th>
                    <th tabindex="0" class="sorting" aria-controls="table_semua_perangkat" style="width: 240px;" aria-label="Gambar: activate to sort column ascending" rowspan="1" colspan="1"></th>
									</tr>
								</thead>
								<tbody>
                  <?php $no = $offset;
                        foreach($fetch_data as $fetchnomor){
                  ?>
									<tr class="odd" role="row">
                    <td><?php echo ++$no ?></td>
										<td><?php echo $fetchnomor->dt_nama ?></td>
										<td><?php echo $fetchnomor->dt_ims ?></td>
										<td><?php echo $fetchnomor->dt_unit ?></td>
										<td><?php echo $fetchnomor->dt_institusi ?></td>
										<td><?php echo $fetchnomor->dt_tel ?></td>
										<td><?php echo $fetchnomor->dt_sip ?></td>
										<td><?php echo $fetchnomor->dt_username ?></td>
										<td><?php echo $fetchnomor->dt_password ?></td>
										<td><?php echo $fetchnomor->dt_keterangan ?></td>
                    <td><?php echo $fetchnomor->dt_register ?></td>
									</tr>
								<?php }?>
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
											<?php echo $paging;?>
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
