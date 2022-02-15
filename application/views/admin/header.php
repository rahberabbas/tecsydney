<head>
	<?php $CI =& get_instance(); $CI->load->model('MainModel','admin'); ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
   
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    
	<!-- Morris Charts CSS -->
    <link href="<?= base_url('resource/vendors/morris.js/morris.css');?>" rel="stylesheet" type="text/css" />
	
    <!-- Toggles CSS -->
    <link href="<?= base_url('resource/vendors/jquery-toggles/css/toggles.css');?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('resource/vendors/jquery-toggles/css/themes/toggles-light.css');?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('resource/vendors/select2/dist/css/select2.min.css');?>" rel="stylesheet" type="text/css" />

	<!-- Toastr CSS -->
    <link href="<?= base_url('resource/vendors/jquery-toast-plugin/dist/jquery.toast.min.css');?>" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="<?= base_url('resource/dist/css/style.css');?>" rel="stylesheet" type="text/css">
</head>
