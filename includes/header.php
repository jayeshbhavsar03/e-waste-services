<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-WASTE SERVICES</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css?v=<?php echo time();?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css?v=<?php echo time();?>">
    <!-- Magnify -->
    <link rel="stylesheet" href="magnify/magnify.min.css">
    <!-- css for contact us page -->
    <link rel="stylesheet" href="dist/css/contact.css?v=<?php echo time();?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Paypal Express -->
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <!-- Google Recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Custom CSS -->
    <style type="text/css">
    /* Small devices (tablets, 768px and up) */
    @media (min-width: 768px) {
        #navbar-search-input {
            width: 60px;
        }

        #navbar-search-input:focus {
            width: 100px;
        }
    }

    /* Medium devices (desktops, 992px and up) */
    @media (min-width: 992px) {
        #navbar-search-input {
            width: 150px;
        }

        #navbar-search-input:focus {
            width: 250px;
        }
    }

    .word-wrap {
        overflow-wrap: break-word;
    }

    .prod-body {
        height: 300px;
    }

    .box:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .register-box {
        margin-top: 20px;
    }

    #trending {
        list-style: none;
        padding: 10px 5px 10px 15px;
    }

    #trending li {
        padding-left: 1.3em;
    }

    #trending li:before {
        content: "\f046";
        font-family: FontAwesome;
        display: inline-block;
        margin-left: -1.3em;
        width: 1.3em;
    }

    /*Magnify*/
    .magnify>.magnify-lens {
        width: 100px;
        height: 100px;
    }

    .main-img {
        width: 50%;
    }

    .main-img-about {
        width: 15%;
    }

    .img-set {
        display: flex;
        justify-content: center;
    }

    .soften {
        height: 1px;
        background-image: -webkit-linear-gradient(left, rgb(0 0 0 / 0%), rgb(0 0 0), rgb(0 0 0 / 0%));
        background-image: -moz-linear-gradient(left,
                rgba(255, 255, 255, 0),
                rgba(255, 255, 255, 1),
                rgba(255, 255, 255, 0));
        background-image: -ms-linear-gradient(left,
                rgba(255, 255, 255, 0),
                rgba(255, 255, 255, 1),
                rgba(255, 255, 255, 0));
        background-image: -o-linear-gradient(left,
                rgba(255, 255, 255, 0),
                rgba(255, 255, 255, 1),
                rgba(255, 255, 255, 0));
        border: 0;
    }
    .col-green{
      color: #2c8900;
    }
    .col-green-back{
      background: #2c8900;
    }
    .col-green:hover{
      color: #1a5000;
    }
    .col-green-back:hover{
      background: #1a5000;
    }
    .skin-blue .main-header li.user-header{
        background: #329e00;
    }
    </style>

</head>