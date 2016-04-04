<!DOCTYPE html>
<html lang="en" ng-app="app" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="margin-top: -4px;"><img src="assets/img/logo.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

        </div><!--/.nav-collapse -->
    </div>
</nav>

<nav class="navbar navbar-default navbar-p2b">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#/colaboradores/list" style="color: #e2e2e2;">
                <img alt="Brand" src="assets/img/ico-user.png" style="margin-left: 40px;">
                Colaboradores
            </a>
            <a class="navbar-brand" href="#/empresas/list" style="color: #e2e2e2;">
                <img alt="Brand" src="assets/img/ico-phone.png" style="margin-left: 24px;">
                Empresas
            </a>
        </div>
    </div>
</nav>


<div class="container">
    <div class="view" ng-view></div>
    <!--    <div class="row">-->
    <!--        <div class="col-md-12">-->
    <!--            <h1 class="page-header">Dashboard</h1>-->
    <!--        </div>-->
    <!--    </div>-->
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/angularjs/angularjs.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/angularjs/angular-route.min.js"></script>
<script src="<?php echo base_url() ?>js/app.js"></script>
<script src="<?php echo base_url() ?>js/controllers/EmpresasController.js"></script>
<script src="<?php echo base_url() ?>js/controllers/ColaboradoresController.js"></script>

</body>
</html>