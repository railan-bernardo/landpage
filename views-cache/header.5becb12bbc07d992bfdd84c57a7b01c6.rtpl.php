<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CACURSOS | Painel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/res/admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/res/admin/plugins/select2/select2.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/res/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/res/admin/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="/res/admin/dist/css/styles.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

 <!-- Logo -->
    <a src="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CA</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
        <img src="/res/site/assets/images/marca_dagua_escura.png">
      </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top bg-blue" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
             <img class="img-circle" style="width: 22px; height: 22px; margin-right: 2px;" src='<?php echo getUserPhoto(); ?>'>
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo getUserName(); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
             
                <img class="img-circle" src='<?php echo getUserPhoto(); ?>'>
               
                <p>
                  <?php echo getUserName(); ?>
                  <small><?php echo getUserEmail(); ?></small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="/admin/logout" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>

     <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
    
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img class="img-circle" src='<?php echo getUserPhoto(); ?>'>
            </div>
            <div class="pull-left info">
              <p>
                <?php echo getUserName(); ?>
              </p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
    
          <!-- search form (Optional) -->
          <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form> -->
          <!-- /.search form -->
    
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="/admin"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
            <a href="#"><i class="fa fa-users"></i> <span>Alunos</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
            <ul class="treeview-menu">
              <li><a href="/admin/alunos"><i class="fa fa-list-ul"></i> <span>Listar</span></a></li>
              <li><a href="/admin/aluno/create"><i class="fa fa-plus-square-o"></i> <span>Novo</span></a></li>
            </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-user"></i><span>Vendedores</span>
               <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
              <ul class="treeview-menu">
                 <li><a href="/admin/users"> <span>Listar</span></a></li>
                  <li><a href='/admin/sales/<?php echo getUserId(); ?>'> <span>Meus Cadastro</span></a></li>
              </ul>
            </li>
            <li><a href="/admin/contrato/create"><i class="fa fa-file-pdf-o"></i> <span>Contrato</span></a></li>
            <li>
              <a href="/admin/new/page"><i class="fa fa-clone"></i> <span>Nova Página</span></a>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-sitemap"></i> <span>Sistema de controle</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/admin/orders">Listar</a></li>
                <li><a href="/admin/order/create">Criar</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#"><i class="fa fa-th"></i> <span>Ordem de serviço</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/admin/os/preview">Listar</a></li>
                <li><a href="/admin/os/create">Criar</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-wrench"></i> <span>Estoque</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/admin/stock">Listar</a></li>
                <li><a href="/admin/service/create">Criar</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-calendar"></i> <span>Agendar Aula</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/admin/schedule">Listar</a></li>
                <li><a href="/admin/schedule/create">Criar</a></li>
              </ul>
            </li>
             <li><a href="/admin/simulator"><i class="fa fa-bank"></i> <span>Consócio</span></a></li>
          </ul>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>