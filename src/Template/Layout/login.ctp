<?php
$cakeDescription = 'SIM Tecmol';
$webroot = $this->request->getAttribute('webroot');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=$webroot?>assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?=$webroot?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=$webroot?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=$webroot?>assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <?= $this->fetch('content') ?>
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">            
            <?=date('Y')?> &copy; Powered by <a href="" class="text-white-50">invento.co</a> 
        </footer>

        <!-- Vendor js -->
        <script src="<?=$webroot?>assets/js/vendor.min.js"></script>

        <!-- Plugins -->
        <script src="<?=$webroot?>assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="<?=$webroot?>assets/libs/jquery-form/jquery.form.min.js"></script>

        <script src="<?=$webroot?>assets/js/pages/form-ajax-actions-forms.init.js"></script>
        
    </body>
</html>