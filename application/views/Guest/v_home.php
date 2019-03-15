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
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Custom styles for this template -->
    <!--link href="cover.css" rel="stylesheet"-->
	  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />
	  <link href="<?php echo base_url(); ?>assets/css/simple_sidebar.css" rel="stylesheet" type="text/css" />

    <style type="text/css">

	body{
		margin: 0;
		padding: 0;
		font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
		font-size: 1rem;
		font-weight: 400;
		line-height: 1.5;
		height: 100vh;
		color: white;
		display: flex;
		text-shadow: 0px 0.05rem 0.1rem rgba(0,0,0,0.5);
		box-shadow: inset 0px 0px 5rem rgba(0,0,0,0.5);
		background-image: url("<?php echo base_url(); ?>assets/image/background.png");
		background-size: 100%;
	}

	html, body{
		height: 100%;
	}

	.inner-cover{
		margin-top: 170px;
		margin-bottom: 150px;
		text-align: center!important;
	}

	.feather {
      width: 10vh;
      height: 10vh;
	  align-content: center;

    }

	.lead{
		margin-left: 100px;
		margin-right: 100px;
	}

	img{
		width: auto;
		height: auto;
	}
	.container-category{
		margin-top: 200px;
		margin-bottom: 300px;
		margin-left: 100px;
	}

	.img-wrapper {
		overflow: hidden;
	}

	.img-wrapper img {
		-webkit-transition: all .2s ease;
		-moz-transition: all .2s ease;
		-ms-transition: all .2s ease;
		-o-transition: all .2s ease;
		transition: all .2s ease;

		vertical-align: middle;
	}

	.img-wrapper img:hover {
		-webkit-transform:scale(1.1); /* Safari and Chrome */
		-moz-transform:scale(1.1); /* Firefox */
		-ms-transform:scale(1.1); /* IE 9 */
		-o-transform:scale(1.1); /* Opera */
		transform:scale(1.1);
	}

	</style>

  </head>


  <body>
	<a href="#welcome" class="btn top-button" id="back-top">
	</a>
	<a href="#category" class="btn top-button" id="back-category">
	</a>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<section id="welcome">
      <header class="masthead mb-auto">
        <div class="inner">
          <!--<h3 class="masthead-brand">Cover</h3>-->
          <nav class="nav nav-masthead justify-content-end">
			         <a class="nav-link " href="<?php echo base_url();?>news/index.php">News</a>
               <a class="nav-link active" href="<?php echo base_url();?>index.php/c_dashboard/index">Dashboard</a>
               <a class="nav-link active" href="<?php echo base_url();?>index.php/c_internal_dashboard/index">Internal Telkom</a>
               <a class="nav-link active" href="<?php echo base_url();?>index.php/c_about/index">About</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner-cover">
        <h1 class="cover-heading">SISTEM INFORMASI LAB Cloud & Node Platform</h1>
        <p class="lead">Sistem informasi lab cloud & node platform adalah sebuah sistem yang menyediakan informasi atau data-data tentang lab cloud dan node platform.
          Adapun tujuan dari suatu sistem informasi adalah menciptakan suatu wadah komunikasi yang efisien dalam bidang bisnis. 
          Sistem informasi berbasis internet merupakan sistem informasi yang memanfaatkan secara maksimal kegunaan dari computer dan juga jaringan komputer.</p>
        <p class="lead">
            <a href="#category" class="btn btn-lg btn-secondary">Category</a>
        </p>
      </main>
	  </section>

	  <section id="category">

			<div class="container-category" style="margin-right:7vw; margin-top:20vh;">

				<div class="row">

					<div class="col-sm-4">
					<center><span data-feather="phone"></span>
					  <h1>Telephony </h1></center>
					  <p style="text-align:justify">Telephony merupakan konsep penggunaan jaringan internet untuk melewatkan sinyal telepon dengan delay yang dapat diterima (masih dalam batas toleransi pendengaran manusia).</p>
						<a class="btn btn-category" href="#telephony">See More</a>
					</div>

					<div class="col-sm-4">
					<center><span data-feather="globe"></span>
					   <h1>Internet</h1></center>
					  <p style="text-align:justify">
	Internet adalah suatu jaringan komunikasi yang menghubungkan satu media elektonik dengan media yang lainnya.
  Standar teknologi pendukung yang dipakai secara global adalah Transmission Control Protocol atau
  Internet Protocol Suite (disingkat sebagai istilah TCP/IP).</p>
						<a class="btn btn-category" href="#internet">See More</a>
					</div>

					 <div class="col-sm-4">
					 <center><span data-feather="cloud"></span>
					   <h1>Cloud</h1></center>
					  <p style="text-align:justify">Cloud adalah sebuah konsep pemahaman dalam rangka pembuatan kerangka kerja komputasi secara online lokal (LAN) maupun global (internet)
               dimana terdapat beragam aplikasi maupun data  dan media penyimpanan yang dapat diakses dan digunakan secara berbagi (shared service) dan bersamaan (simultaneous access)
               oleh para pengguna yang beragam – mulai dari perseorangan sampai kepada kelas pengguna korporasi atau perusahaan. </p>
						<a class="btn btn-category" href="#cloud">See More</a>
					</div>
				</div>
			</div>
	  </section>

	<!-- Onclick Telephony -->
	<div id="Plmn" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closePlmn()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
		when an unknown printer took a galley of type and scrambled it to make a type specimen book.
		Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
		when an unknown printer took a galley of type and scrambled it to make a type specimen book.
		Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
		when an unknown printer took a galley of type and scrambled it to make a type specimen book.
		Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
		when an unknown printer took a galley of type and scrambled it to make a type specimen book.
		Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
		when an unknown printer took a galley of type and scrambled it to make a type specimen book.
	</div>
	<div id="Pstn" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closePstn()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Sentraltdm" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeSentraltdm()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Tgw" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeTgw()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Softswitch" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeSoftswitch()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Accesslayer" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeAccesslayer()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Msan" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeMsan()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Msansip" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeMsansip()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Gpon" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeGpon()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Enum" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeEnum()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Dhcp" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeDhcp()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Huaweitick" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeHuaweitick()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Ngin" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNgin()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Conferenceas" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeConferenceas()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Ericssontick" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeEricssontick()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Imssystem" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeImssystem()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Telephonyas" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeTelephonyas()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Hss" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeHss()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Mgcf" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeMgcf()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Cscf" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeCscf()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Mrf" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeMrf()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Asbc" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeAsbc()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Ztetick" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeZtetick()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Agcf" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeAgcf()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Internalvoice" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeInternalvoice()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Nsbc" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNsbc()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Sipolo" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeSipolo()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Ippbx" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeIppbx()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Terminasicopper" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeTerminasicopper()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<!-- Onclick Internet -->
	<div id="Internet3" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeInternet3()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Internet2" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeInternet2()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Internet9" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeInternet9()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Internet8" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeInternet8()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Internet1" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeInternet1()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Internet7" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeInternet7()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Internet5" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeInternet5()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Internet10" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeInternet10()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Internet6" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeInternet6()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<!-- Onclick Cloud -->

	<div id="Vlb" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeVlb()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Vnf" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeVnf()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Nfvi" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNfvi()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Hypervisor" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeHypervisor()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Nfvihardware" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNfvihardware()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Mano" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeMano()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Orchestrator" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeOrchestrator()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Vnfmanager" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeVnfmanager()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Vims" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeVims()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Oss" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeOss()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Service" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeService()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Ems1" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeEms1()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Ems2" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeEms2()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Ems3" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeEms3()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Vnf1" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeVnf1()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Vnf2" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeVnf2()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Vnf3" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeVnf3()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Virtualisation" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeVirtualisation()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Virtualcomp" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeVirtualcomp()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Virtualstor" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeVirtualstor()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Virtualnet" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeVirtualnet()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Comphardware" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeComphardware()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Storhardware" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeStorhardware()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Nethardware" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNethardware()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Vim" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeVim()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>
	<div id="Osma" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeOsma()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Sema" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeSema()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Vevnfm" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeVevnfm()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Vivnfm" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeVivnfm()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>

	<div id="Nfvi2" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNfvi2()">&times;</a>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
	</div>


	<section id="telephony">
		<div class="overlay"></div>
		<div class="container-content">
			<div class="row">
				<div class="section-content">

					<h1> Telephony </h1>
					<div class="child-content" style="margin-left:100px; margin-top:20px; background-image:url(<?php echo base_url(); ?>assets/image/tele2.png); background-repeat: no-repeat; background-position: center;">

						 <div class="img-wrapper" >
							<img onclick="openPlmn()" src="<?php echo base_url(); ?>assets/image/icons/telephony/plmn.png" style="position: sticky; top:11.9vh; right: 58.2%;"><br>
							<img onclick="openPstn()" src="<?php echo base_url(); ?>assets/image/icons/telephony/pstn.png" style="position: sticky; top:40.4%; right: 56.8%;"><br>
							<img onclick="openSentraltdm()" src="<?php echo base_url(); ?>assets/image/icons/telephony/sentraltdm.png" style="position: sticky; top:51.2%; left: 34.75%;">
							<img onclick="openTgw()" src="<?php echo base_url(); ?>assets/image/icons/telephony/tgw.png" style="position: sticky; top:49.5%; left: 39.7%;">
							<img onclick="openSoftswitch()" src="<?php echo base_url(); ?>assets/image/icons/telephony/softswitch.png" style="position: sticky; bottom:44.9%; left:44.3%;">
							<img onclick="openAccesslayer()" src="<?php echo base_url(); ?>assets/image/icons/telephony/accesslayer.png" style="position: sticky; top:72%; left:43.1%;">
							<img onclick="openMsan()" src="<?php echo base_url(); ?>assets/image/icons/telephony/msan.png" style="position: sticky; top:81%; left:45%;">
							<img onclick="openMsansip()" src="<?php echo base_url(); ?>assets/image/icons/telephony/msansip.png" style="position: sticky; top:79%; left: 61%;">
							<img onclick="openGpon()" src="<?php echo base_url(); ?>assets/image/icons/telephony/gpon.png" style="position: sticky; top:79%; left: 66%;">
							<img onclick="openEnum()"src="<?php echo base_url(); ?>assets/image/icons/telephony/enum.png" style="position: sticky; bottom:60.9%; left: 61.9%;">
							<img onclick="openDhcp()" src="<?php echo base_url(); ?>assets/image/icons/telephony/dhcp.png" style="position: sticky; bottom:60%; left: 65%;">
							<img onclick="openHuaweitick()" src="<?php echo base_url(); ?>assets/image/icons/telephony/huaweitick.png" style="position: sticky; bottom:78.2%; right: 48.3%;">
							<img onclick="openNgin()" src="<?php echo base_url(); ?>assets/image/icons/telephony/ngin.png" style="position: sticky; bottom:77.2%; right: 45.9%;">
							<img onclick="openHuaweitick()" src="<?php echo base_url(); ?>assets/image/icons/telephony/huaweitick.png" style="position: sticky; bottom:87.9%; right: 43.2%;">
							<img onclick="openConferenceas()" src="<?php echo base_url(); ?>assets/image/icons/telephony/conferenceas.png" style="position: sticky; bottom:76%; right: 41.1%;">
							<img onclick="openHuaweitick()" src="<?php echo base_url(); ?>assets/image/icons/telephony/huaweitick.png" style="position: sticky; bottom:86%; right: 20%;">
							<img onclick="openEricssontick()" src="<?php echo base_url(); ?>assets/image/icons/telephony/ericssontick.png" style="position: sticky; bottom:86%; right: 25.1%;">
							<img onclick="openImssystem()" src="<?php echo base_url(); ?>assets/image/icons/telephony/imssystem.png" style="position: sticky; bottom:91.8%; right: 33%;">
							<img onclick="openTelephonyas()" src="<?php echo base_url(); ?>assets/image/icons/telephony/telephonyas.png" style="position: sticky; bottom:80.6%; right: 38.1%;">
							<img onclick="openHss()" src="<?php echo base_url(); ?>assets/image/icons/telephony/hss.png" style="position: sticky; bottom:72%; right: 33.5%;"><br>
							<img onclick="openMgcf()" src="<?php echo base_url(); ?>assets/image/icons/telephony/mgcf.png"  alt="mgcf"style="position: sticky; bottom:52%; left: 56.3%;">
							<img onclick="openCscf()" src="<?php echo base_url(); ?>assets/image/icons/telephony/cscf.png"  alt="cscf"style="position: sticky; bottom:52%; left: 59.37%;">
							<img onclick="openMrf()" src="<?php echo base_url(); ?>assets/image/icons/telephony/mrf.png" alt="mrf" style="position: sticky; bottom:47.3%; left: 65.1%;">
							<img onclick="openAsbc()" src="<?php echo base_url(); ?>assets/image/icons/telephony/asbc.png" alt="asbc" style="position: sticky; bottom:29%; left: 64.7%;">
							<img onclick="openEricssontick()" src="<?php echo base_url(); ?>assets/image/icons/telephony/ericssontick.png" style="position: sticky; bottom:30.1%; left: 68.8%;">

							<img onclick="openHuaweitick()" src="<?php echo base_url(); ?>assets/image/icons/telephony/huaweitick.png" style="position: sticky; bottom:36%; left: 53%;">
							<img onclick="openZtetick()" src="<?php echo base_url(); ?>assets/image/icons/telephony/ztetick.png" style="position: sticky; bottom:32.3%; right: 42%;">
							<img onclick="openAgcf()" src="<?php echo base_url(); ?>assets/image/icons/telephony/agcf.png" style="position: sticky; bottom:35%; right:39.2%">
							<img onclick="openInternalvoice()" src="<?php echo base_url(); ?>assets/image/icons/telephony/Internalvoice.png" style="position: sticky; bottom:44%; right: 68.2%;"><br>
							<img onclick="openNsbc()" src="<?php echo base_url(); ?>assets/image/icons/telephony/nsbc.png" style="position: sticky; bottom:28.6%; left:24.8%;">
							<img onclick="openSipolo()" src="<?php echo base_url(); ?>assets/image/icons/telephony/sipolo.png" style="position: sticky; bottom:12.5%; left:25%;">
							<img onclick="openIppbx()" src="<?php echo base_url(); ?>assets/image/icons/telephony/ippbx.png" style="position: sticky; bottom:13%; left: 30.1%;">
							<img onclick="openTerminasicopper()" src="<?php echo base_url(); ?>assets/image/icons/telephony/terminasicopper.png" style="position: sticky; bottom:13%; left: 35.5%;">
							<img src="<?php echo base_url(); ?>assets/image/icons/telephony/available.png" style="position: sticky; right: 75%; bottom:0;">

							<img src="<?php echo base_url(); ?>assets/image/icons/telephony/null.png" style="position: sticky; right: 50%; bottom:0;">
							<img src="<?php echo base_url(); ?>assets/image/icons/telephony/notavailable.png" style="position: sticky; right: 20%; bottom:0;">

						</div>


					</div><br><br>



				</div>
			</div>
		</div>
	</section>

	<section id="internet">
		<div class="overlay"></div>
		<div class="container-content">
			<div class="row">
				<div class="section-content">
					<div class="child-content" style="margin-left:16vw; margin-top:20px; background-size: 110vh; background-image:url(<?php echo base_url(); ?>assets/image/internet.png); background-repeat: no-repeat; background-position: center 2%;">
						<div class="img-wrapper" >
							<img onclick="openInternet3()" src="<?php echo base_url(); ?>assets/image/icons/internet/internet3.png" style="bottom: 100%; left: 45%;"><br>
							<img onclick="openInternet2()" src="<?php echo base_url(); ?>assets/image/icons/internet/internet2.png" style="position: sticky; bottom: 61%; left: 40%;">
							<img onclick="openInternet9()" src="<?php echo base_url(); ?>assets/image/icons/internet/internet9.png" style="position: sticky; bottom: 51%; left: 9%">
							<img onclick="openInternet8()" src="<?php echo base_url(); ?>assets/image/icons/internet/internet8.png" style="position: sticky; bottom: 41%; left: 41%">
							<img onclick="openInternet1()" src="<?php echo base_url(); ?>assets/image/icons/internet/internet1.png" style="position: sticky; bottom: 41%; right: 68%;">
							<img onclick="openInternet7()" src="<?php echo base_url(); ?>assets/image/icons/internet/internet7.png" style="position: sticky; top:69%; right: 55%;">
							<img onclick="openInternet5()" src="<?php echo base_url(); ?>assets/image/icons/internet/internet5.png" style="position: sticky; top:85%; right: 55%;">
							<img onclick="openInternet10()" src="<?php echo base_url(); ?>assets/image/icons/internet/internet10.png" style="position: sticky; bottom:25%; right: 10%">
							<img onclick="openInternet6()" src="<?php echo base_url(); ?>assets/image/icons/internet/internet6.png" style="position: sticky; top: 70%; right: 68%;">
						</div>

				</div>
			</div>
		</div>
		</div>
	</section>

	<section id="cloud" data-parallax="scroll">
		<div class="overlay"></div>
		<div class="container" height="1000px;">
			<div class="row">
				<div class="section-content">
					<h1> Cloud </h1>
					<div class="child-content" style="margin-left:110px; margin-top:20px; background-size: 100vh; background-image:url(<?php echo base_url(); ?>assets/image/cloudremake.png); background-repeat: no-repeat; background-position: center;">
						<div class="img-wrapper">
						<img onclick="openVlb()" src="<?php echo base_url(); ?>assets/image/icons/cloud/vlb.png" style="position: sticky; height:9.3vh; top:12%; right:67.2%;">
						<img onclick="openVnf()" src="<?php echo base_url(); ?>assets/image/icons/cloud/vnf.png" style="position: sticky; height:3vh; top:33.5%; right:68.1%;"><br><br>
						<img onclick="openNfvi()" src="<?php echo base_url(); ?>assets/image/icons/cloud/nfvi.png" style="position: sticky; height:2vh; top:52.2%; right:68.2%;"><br>
						<img onclick="openHypervisor()" src="<?php echo base_url(); ?>assets/image/icons/cloud/hypervisor.png" style="position: sticky; height:8vh; top:61%; left:23%;">
						<img onclick="openNfvihardware()" src="<?php echo base_url(); ?>assets/image/icons/cloud/nfvihardware.png" style="position: sticky; height:2vh; top:81%; left:23%;">
						<img onclick="openMano()" src="<?php echo base_url(); ?>assets/image/icons/cloud/mano.png" style="position: sticky; height:2.8vh;bottom:81%; left:71%;">
						<img onclick="openOrchestrator()" src="<?php echo base_url(); ?>assets/image/icons/cloud/orchestrator.png" style="position: sticky; height: 10vh; bottom:68%; left:60%;">
						<img onclick="openVnfmanager()" src="<?php echo base_url(); ?>assets/image/icons/cloud/vnfmanager.png" style="position: sticky; height:9vh; top:40.2%; left:60.2%;">
						<img onclick="openVims()" src="<?php echo base_url(); ?>assets/image/icons/cloud/vims.png" style="position: sticky; height:9vh; top:65%; left:59.9%;">
						<img onclick="openOss()" src="<?php echo base_url(); ?>assets/image/icons/cloud/oss.png" style="position: sticky; height:3.3vh; bottom:85.2%; right:55%;">
						<img onclick="openOsma()" src="<?php echo base_url(); ?>assets/image/icons/cloud/osma.png" style="position: sticky; height:5vh; bottom:87%; left:50.2%;">
						<img onclick="openService()" src="<?php echo base_url(); ?>assets/image/icons/cloud/service.png" style="position: sticky; height:4.5vh; bottom:73.9%; right:48.3%;">
						<img onclick="openSema()" src="<?php echo base_url(); ?>assets/image/icons/cloud/sema.png" style="position: sticky; height:2vh; bottom:79%; right:43%;">
						<img onclick="openEms1()" src="<?php echo base_url(); ?>assets/image/icons/cloud/ems1.png" style="position: sticky; height:3vh; top:34%; right:61%;">
						<img onclick="openEms2()" src="<?php echo base_url(); ?>assets/image/icons/cloud/ems2.png" style="position: sticky; height:3vh; top:34%; right:53.2%;">
						<img onclick="openEms3()" src="<?php echo base_url(); ?>assets/image/icons/cloud/ems3.png" style="position: sticky; height:3vh; top:34%; right:46%;">
						<img onclick="openVnf1()" src="<?php echo base_url(); ?>assets/image/icons/cloud/vnf1.png" style="position: sticky; height:3vh; top:45%; right:61%;">
						<img onclick="openVnf2()" src="<?php echo base_url(); ?>assets/image/icons/cloud/vnf2.png" style="position: sticky; height:3.2vh; top:45%; right:53.5%;">
						<img onclick="openVnf3()" src="<?php echo base_url(); ?>assets/image/icons/cloud/vnf3.png" style="position: sticky; height:3.2vh; top:45%; right:46.2%;">
						<img onclick="openVevnfm()" src="<?php echo base_url(); ?>assets/image/icons/cloud/vevnfm.png" style="position: sticky; height:2.5vh; top:42%; right:41.2%;">
						<img onclick="openVirtualisation()" src="<?php echo base_url(); ?>assets/image/icons/cloud/virtualisation.png" style="position: sticky; height:2.7vh; top:71.2%; left:38.4%;">
						<img onclick="openVirtualcomp()" src="<?php echo base_url(); ?>assets/image/icons/cloud/virtualcomp.png" style="position: sticky; height:3.5vh; top:61.2%; left:34.5%;">
						<img onclick="openVirtualstor()" src="<?php echo base_url(); ?>assets/image/icons/cloud/virtualstor.png" style="position: sticky; height:3.5vh; top:61.3%; left:42%;">
						<img onclick="openVirtualnet()" src="<?php echo base_url(); ?>assets/image/icons/cloud/virtualnet.png" style="position: sticky; height:3.5vh; top:61%; left:48.9%;">
						<img onclick="openComphardware()" src="<?php echo base_url(); ?>assets/image/icons/cloud/comphardware.png" style="position: sticky; height:3.1vh; top:81.6%; left:34.4%;">
						<img onclick="openStorhardware()" src="<?php echo base_url(); ?>assets/image/icons/cloud/storhardware.png" style="position: sticky; height:3vh; top:81.9%; left:42%;">
						<img onclick="openNethardware()" src="<?php echo base_url(); ?>assets/image/icons/cloud/nethardware.png" style="position: sticky; height:3vh; top:81.9%; left:48.8%;">
						<img onclick="openNfvi2()" src="<?php echo base_url(); ?>assets/image/icons/cloud/nf-vi.png" style="position: sticky; height:2vh; top:67%; left:55.3%;">
						<img onclick="openVim()" src="<?php echo base_url(); ?>assets/image/icons/cloud/vim.png" style="position: sticky; height:5vh; top:74%; left:71.4%;">
						<img onclick="openVivnfm()" src="<?php echo base_url(); ?>assets/image/icons/cloud/vivnfm.png" style="position: sticky; height:2vh; top:58%; left:64%;">
						<img src="<?php echo base_url(); ?>assets/image/icons/cloud/execution.png" style="position: sticky; height:2.5vh; top:93.5%; right:43%;">
						<img src="<?php echo base_url(); ?>assets/image/icons/cloud/otherreferrence.png" style="position: sticky; height:7.5vh; top:89%; right:20%;">
						<img src="<?php echo base_url(); ?>assets/image/icons/cloud/mainnfv.png" style="position: sticky; height:7vh; top:90%; right:69.4%;">
					</div>


				</div>
			</div>
		</div>
	</section>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p> SIL CNP by pu </p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>-->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/parallax.min.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/sidebar.js">	</script>
	<!-- Icons -->
    <script src="<?php echo base_url(); ?>assets/js/feather.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>
