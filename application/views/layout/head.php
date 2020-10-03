<?php
//load konfigurasi model
$site = $this->konfigurasi_model->listing();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/upload/image/'.$site->icon)?>"/>

    <meta name="keywords" content="<?php echo $site->keywords?>">
    <meta name="description" content="<?php echo $title?>,<?php echo $site->deskripsi?>">  
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    


    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/core.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/shortcode/shortcodes.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/style.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/responsive.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/custom.css">



    <script src="<?php echo base_url()?>assets/frontend/js/vendor/modernizr-3.5.0.min.js">
        
    </script>
</head>

<body>