<html>
  <head>
    <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet" type="text/css" />
  </head>
    <body>
      <div class="login-page">
        <div class="form">
          <form method="post" action="<?php echo base_url();?>index.php/c_login/proses_auth" class="login-form">
            <p class="message"><?php echo $this->session->flashdata('msg');?></p><br>
            <input type="text" name="username" placeholder="Username"/>
            <input type="password" name="password" placeholder="Password"/>
            <button>LOGIN</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
          </form>
        </div>
      </div>
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main_login.js" ></script>
    </body>
</html>
