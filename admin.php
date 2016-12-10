<?php
SESSION_START();
require_once 'koneksi.php';

if (empty($_SESSION['id']))
{
	header ('location:index.php');
}
else
{


 ?>
 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="css/css1.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
	  <style>
	  </style>
    </head>

    <body style="background:cyan;">
     <div class="navbar-fixed"> 
	  <nav>
		<div class="nav-wrapper">
			<a class="brand-logo">E-Voting</a>
			<a data-activates ="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
			
<?php			
if (empty($_SESSION['name']))
{				
?>			
			<ul class="right hide-on-med-and-down">
				<li><a href="login.php">Login</a></li>
			</ul>
			<ul class="side-nav" id="mobile-menu">
				<li><a href="login">Login</a></li>
			</ul>
<?php
}
else
{
?>
			<ul class="right hide-on-med-and-down">
				<li><a href="logout.php">Logout</a></li>
			</ul>
			<ul class="side-nav" id="mobile-menu">
				<li><a href="logout">Logout</a></li>
			</ul>
<?php	
}	
?>			
		</div>
	  </nav>
	 </div> 
 
			<div class="brand-logo">
				<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
			</div>	
<br><br> <!--
<div class="row">
	<div class="col s1" id="1" style="background:blue;">1</div>
	<div class="col s1" id="2" style="background:red;">1</div>
	<div class="col s1" id="1" style="background:blue;">1</div>
	<div class="col s1" id="2" style="background:red;">1</div>
	<div class="col s1" id="1" style="background:blue;">1</div>
	<div class="col s1" id="2" style="background:red;">1</div>
	<div class="col s1" id="1" style="background:blue;">1</div>
	<div class="col s1" id="2" style="background:red;">1</div>
	<div class="col s1" id="1" style="background:blue;">1</div>
	<div class="col s1" id="2" style="background:red;">1</div>
	<div class="col s1" id="1" style="background:blue;">1</div>
	<div class="col s1" id="2" style="background:red;">1</div>
</div> -->
<div class="row">
	<div class="col s2" id="2"></div>
	<div class="col s2" id="1" style="background:blue;" align="center">Jumlah Data Pemilih</div>
	<div class="col s1" id="2"></div>
	<div class="col s2" id="1" style="background:blue;" align="center">Jumlah Calon Kating</div>
	<div class="col s1" id="2"></div>
	<div class="col s2" id="1" style="background:blue;" align="center">Yang Sudah Memilih</div>
	<div class="col s2" id="1"></div>
<br>	
	<div class="col s2" id="2"></div>
	<div class="col s2" id="1" style="background:blue;" align="center">Jumlah Data Pemilih</div>
	<div class="col s1" id="2"></div>
	<div class="col s2" id="1" style="background:blue;" align="center">Jumlah Calon Kating</div>
	<div class="col s1" id="2"></div>
	<div class="col s2" id="1" style="background:blue;" align="center">Yang Sudah Memilih</div>
	<div class="col s2" id="1"></div>
<br>	
	<div class="col s2" id="2"></div>
	<div class="col s2" id="1" style="background:blue;" align="center"></div>
	<div class="col s1" id="2"></div>
	<div class="col s2" id="1" style="background:blue;" align="center"></div>
	<div class="col s1" id="2"></div>
	<div class="col s2" id="1" style="background:blue;" align="center"></div>
	<div class="col s2" id="1"></div>	
</div>

<ul id="slide-out" class="side-nav">
    <li>
		<div class="userView">
		  <div class="background">
			<img src="images/office.jpg" width="100%" height="240px">
		  </div>
		  <a href="images/yuna.jpg"><img class="circle" src="images/yuna.jpg"></a>
		  <a href="#!name"><span class="white-text name">M Nur Alfiansyah</span></a>
		  <a href="#!email"><span class="white-text email">mnuralfiansyah@gmail.com</span></a>
		</div>
	</li>
    <li class="active"><a href="#!"><i class="material-icons">home</i>Dashboard</a></li>
    <li><a href="#!"><i class="material-icons">person</i>Data Pemilih</a></li>
    <li><a href="#!"><i class="material-icons">add</i>Data Calon Ketua</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
  </ul>
  
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  
	  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery2.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  <!--------------------->
	  <script>
		
  // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
	  </script>
	  
	 
    </body>
  </html>
 <?php
}
?> 