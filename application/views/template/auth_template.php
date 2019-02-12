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
  ?>
  <?php $this->layout->set_assets($path, 'styles') ?>
  <?php echo $this->layout->get_assets('styles') ?>

</head>

<body class="signwrapper">

  <div class="sign-overlay"></div>
  <div class="signpanel"></div>

  <!-- Page Content -->
  <?php echo $this->layout->get_wrapper('page') ?>

</body>

<!-- Mirrored from themetrace.com/demo/quirk/templates/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2017 04:42:28 GMT -->
</html>
