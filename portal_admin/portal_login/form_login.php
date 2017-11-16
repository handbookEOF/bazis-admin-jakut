<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>PORTAL ADMIN || BAZIS KOTA ADMINISTRASI JAKARTA TIMUR</title>
	<link rel="shortcut icon" href="../../asset/gambar/Logo.png" type="image/x-icon" />
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="../assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	<script type="text/javascript">
		function Validasi()
		{  
		
		var user=document.getElementById('user').value; 
		var pass=document.getElementById('pass').value;
		
		if (user=="" || pass=="")
		{
			alert("Ada form yang belum terisi");  return false; 
		}  
		}
	</script>
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
                    <img src="../assets/img/logo.png" width="240px" height="130px"/>
                </a>
            </div>

            <div class="left-div">
                <i class="fa fa-user-plus login-icon" ></i>
			</div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
   
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">LAKUKAN LOGIN UNTUK MASUK</h4>

                </div>
            </div>
            <div class="row">
			<form action="../logik/logik_admin.php" method="POST" onsubmit="return Validasi();">
                <div class="col-md-6">
                     <label>User Admin Bazis Jakarta Utara : </label>
                        <input type="text" class="form-control" placeholder="User Admin" name="user" id="user"/>
				</div>
				<div class="col-md-6">
                        <label>Password :  </label>
                        <input type="password" class="form-control" placeholder="Password" name="pass" id="pass"/>
                </div>
				<div class="col-md-12" ALIGN="CENTER">
						<br>
						<input type="hidden" name="perintah" value="admin_masuk">
                        <input type="submit" class="button" value="MASUK">
                </div>
			</form>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
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
    <script src="../assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="../assets/js/bootstrap.js"></script>
</body>
</html>
