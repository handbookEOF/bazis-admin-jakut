<?php
	session_start();
	if (!isset($_SESSION['user_admin_bazis_jakut']) || empty($_SESSION['user_admin_bazis_jakut'])) {
		header("location:portal_login/form_login.php");
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>PORTAL ADMIN || BAZIS KOTA ADMINISTRASI JAKARTA TIMUR</title>
	<link rel="shortcut icon" href="../asset/gambar/Logo.png" type="image/x-icon" />
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
		<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>PORTAL ADMIN BAZIS KOTA ADMINISTRASI JAKARTA UTARA</strong>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" width="240px" height="130px"/>
                </a>
            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="prof.html" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
					<?php
						$menu_aktif="class='menu-top-active'";
					?>
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
							<li><a href="logik/logik_admin.php?perintah=admin_keluar">Keluar</a></li>
                            <li><a href="?perihal=berita" >File Berita</a></li>
                            <li><a href="?perihal=foto">File Foto</a></li>
                            <li><a href="?perihal=vidio">File Vidio</a></li>
                            <li><a href="?perihal=laporan">File Lap.Keuangan</a></li>
                            <li><a href="?perihal=anggota">File Anggota ZIS</a></li>
                            <li><a href="?perihal=penerima">File Penerima ZIS</a></li>
                            <li><a href="?perihal=zis">File Zakat Infaq dan Sodaqoh</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
   	
	<div class="content-wrapper">
        <div class="container">
			<?php
			include "logik/logik_menu.php";
			?>
		</div>
	</div>
	
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2016 BAZIS KOTA ADMINISTRASI JAKARTA UTARA
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
