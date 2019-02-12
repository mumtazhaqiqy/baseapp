<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themetrace.com/demo/quirk/templates/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2017 04:42:28 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="shortcut icon" href="<?= base_url()?>assets/quirk/images/favicon.png" type="image/png">-->

  <title>Login Page</title>
  <?php
      $path = [
        'assets/quirk/lib/fontawesome/css/font-awesome.css',
        'assets/quirk/css/quirk.css'
      ];
      if (isset($css_plugins)) {
          foreach ($css_plugins as $key => $value) {
              $path[] = $value;
          }
      }
      $path[] = 'assets/css/a-design.css';
  ?>
  <?php $this->layout->set_assets($path, 'styles') ?>
  <?php echo $this->layout->get_assets('styles') ?>

</head>

<body class="signwrapper">

  <div class="sign-overlay"></div>
  <div class="signpanel"></div>

  <div class="panel signin">
    <div class="panel-heading">
      <h1>Quirk</h1>
      <h4 class="panel-title">Welcome! Please signin.</h4>
    </div>
    <div class="panel-body">

      <form action="">
        <div class="form-group mb10">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" placeholder="Enter Username">
          </div>
        </div>
        <div class="form-group nomargin">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="text" class="form-control" placeholder="Enter Password">
          </div>
        </div>
        <div><a href="#" class="forgot">Forgot password?</a></div>
        <div class="form-group">
          <button class="btn btn-success btn-quirk btn-block">Sign In</button>
        </div>
      </form>
      <hr class="invisible">
      <div class="form-group">
        <a href="signup.html" class="btn btn-default btn-quirk btn-stroke btn-stroke-thin btn-block btn-sign">Not a member? Sign up now!</a>
      </div>
    </div>
  </div><!-- panel -->

</body>

<!-- Mirrored from themetrace.com/demo/quirk/templates/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2017 04:42:28 GMT -->
</html>
