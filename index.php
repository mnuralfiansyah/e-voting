 <?php
SESSION_START();
 require_once 'koneksi.php';
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

<br><br>
<?php 
	if (!empty($_GET['eror']))
	{
		$eror=$_GET['eror'];
		
			if ($eror==1)
			{
?>
<div class="row">
	<div class="col s12" align="center" style="background:red;"><h6>Anda Sudah Memilih, Hanya Bisa Dilakukan 1 Kali Saja</h6></div> 
</div>
<?php
			}
	}		
?>
<div class="row">
	<div class="col s12" align="center"><h4>Pemilihan Kating Online 2017</h4></div> 
</div>

<br>  
	  
<center>
<div class="row">
	<div class="col s4"></div>
	<div class="col s4">	  
	  <div class="progress">
		  <div class="determinate" style="width: <?php echo $status ; ?>%"></div>
	  </div>   <?php echo $status ; ?> % Dari Semua Pemilih
	</div> 
</div>
</center>
<!--
<div class="row">
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	<div class="col s1">1</div>
	
</div>    -->  

<div class="row">
	<div class="col s2" ></div>
	<div class="col s4" align="center" >Presentase Pemilih Mr. A</div> 
	<div class="col s1" ></div>
	<div class="col s4" align="center" >Presentase Pemilih Mrs. B</div>
	<div class="col s1" ></div>
</div> 
<!--
<div class="row">
	<div class="col s2" ></div>
	<div class="col s4" align="center" >Mr. A</div> 
	<div class="col s1" ></div>
	<div class="col s4" align="center" >Mrs. B</div>
	<div class="col s1" ></div>
</div>     -->    

<div class="row"  id="t">
	<div class="col s3" ></div>
	<div class="col s2"  align="center"><?php echo $kandidat1 ; ?>%</div> 
	<div class="col s3"  ></div>
	<div class="col s2"  align="center"><?php echo $kandidat2 ; ?>%</div> 
	<div class="col s2"></div>
</div> <!--
<div class="row">
	<div class="col s1" id="1">1</div>
	<div class="col s1" id="2">1</div>
	<div class="col s1" id="3">1</div>
	<div class="col s1" id="4">1</div>
	<div class="col s1" id="5">1</div>
	<div class="col s1" id="6">1</div>
	<div class="col s1" id="7">1</div>
	<div class="col s1" id="8">1</div>
	<div class="col s1" id="9">1</div>
	<div class="col s1" id="10">1</div>
	<div class="col s1" id="11">1</div>
	<div class="col s1" id="12">1</div>
</div>  -->
<div class="row"  id="t">
	<div class="col s2" ></div>
	<div class="col s4" align="center" ><img alt="2" src="2.jpg"/></div> 
	<div class="col s1"  ></div>
	<div class="col s4" align="center" ><img alt="1" src="1.jpg"/></div> 
	<div class="col s1"></div>
</div> 

<?php

if (empty($_SESSION['id']))
{ 
	if ($_SESSION['status']==2)
	{
		if (!empty($_SESSION['name']))
		{
?>	
<div class="row"  id="t">
	<div class="col s3" ></div>
	<div class="col s2"  align="center">
		<a class="btn-floating btn-large red" href="hasil.php?id=1">
			<i class="large material-icons">mode_edit</i>
		</a>
	</div> 
	<div class="col s3"  ></div>
	<div class="col s2" align="center">
		<a class="btn-floating btn-large red" href="hasil.php?id=2">
			<i class="large material-icons">mode_edit</i>
		</a> 
	</div> 
	<div class="col s2"></div>
</div>
<?php
		}
	}
}
?>
<div class="row"  id="t">
	<div class="col s2" ></div>
	<div class="col s4" align="left" >Visi</div> 
	<div class="col s1"  ></div>
	<div class="col s4" align="left" >Visi</div> 
	<div class="col s1"></div>
</div>
<div class="row"  id="t">
	<div class="col s2" ></div>
	<div class="col s4" align="center" >" Menjadikan yang saya pimpin Menjadi lebih baik "</div> 
	<div class="col s1"  ></div>
	<div class="col s4" align="center" >" melanjutkan program yang sudah ada dengan penambahan sedikit "</div> 
	<div class="col s1"></div>
</div>
<div class="row"  id="t">
	<div class="col s2" ></div>
	<div class="col s4" align="left" >Misi</div> 
	<div class="col s1"  ></div>
	<div class="col s4" align="left" >Misi</div> 
	<div class="col s1"></div>
</div>
<div class="row"  id="t">
	<div class="col s2" ></div>
	<div class="col s4" align="center" >1. Memperbaharui yang sudah ada</div> 
	<div class="col s1"  ></div>
	<div class="col s4" align="center" >1. Melanjutkan Program yang sudah ada</div> 
	<div class="col s1"></div>
</div>
<div class="row"  id="t">
	<div class="col s2" ></div>
	<div class="col s4" align="center" >2. Memperbaharui yang sudah ada</div> 
	<div class="col s1"  ></div>
	<div class="col s4" align="center" >2. Melanjutkan Program yang sudah ada</div> 
	<div class="col s1"></div>
</div>  
<div class="row"  id="t">
	<div class="col s2" ></div>
	<div class="col s4" align="center" >3. Memperbaharui yang sudah ada</div> 
	<div class="col s1"  ></div>
	<div class="col s4" align="center" >3. Melanjutkan Program yang sudah ada</div> 
	<div class="col s1"></div>
</div>  	  
<!--
<div>
<table width="100%" align="center" border="2">
	<tr>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		
	</tr>
	<tr>
		<td colspan="12"></td>
	</tr>
	<tr align="center">
		<td colspan="3" align="center">pemilih2</td>
		<td colspan="6" align="center">Pemilih</td>
		<td colspan="3" align="center">pemilih3</td>
	</tr> 
</table>	
</div>	 --> 
	  
	  
	  
	  
	  
	  
	  
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  
	  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery2.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  <!--------------------->
	  <script>
		$(document).ready(function()
		{
			$('.button-collapse').sideNav();
		});
	  </script>
	  
	 
    </body>
  </html>