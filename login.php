<?php
require_once 'koneksi.php';
SESSION_START();

if (!empty($_SESSION['name']))
{
		header ('location:index.php')	;
}
else
{
// jika email dan password kosong
	if ((empty($_POST['email'])) and (empty($_POST['password'])))
	{	
?>
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
<div class="container">
	<div class="row">
		<div class="col s12" align="center"><h4>Login Pemilih</h4></div>
	</div>
</div>
<!--
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
<div class="container">	
  <div class="row">
	<div class="col s4"></div>
	<div class="col s6" align="center" style="background:cyan;">
		<form  action="login.php" method="POST" align="center">
		  <div class="row">
			<div class="input-field col s8" align="center">
			  <i class="material-icons prefix">account_circle</i>
			  <input id="icon_prefix" type="text" class="validate" name="email">
			  <label for="icon_prefix">Email</label>
			</div>
		  </div>
		  <div class="row">
			<div class="input-field col s8" align="center">
			  <i class="material-icons prefix">lock</i>
			  <input id="icon_telephone" type="password" class="validate" name="password">
			  <label for="icon_telephone">Password</label>
			</div>
		  </div>
		  <div class="row">
			<div class="col s6">
			  <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
				<i class="material-icons right">send</i>
			  </button>
			</div>  
		  </div>
		</form>
	</div>	
  </div>
 </div> 

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>  
	  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery2.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  <!--------------------->
</body>
</html>

<?php
	} 
	else
	{
	// jika session name tidak kosong

		 $nama=$_POST['email'];
		 $password=$_POST['password'];
		 
		 $sql="SELECT id, status FROM pemilih WHERE nama='$nama' and pass='$password'";
		 $hasil41= mysqli_query($konek, $sql);
		 $hasil4=mysqli_fetch_array($hasil41);
	
		$id=$hasil4[0];
		$status=$hasil4[1];
		  
		  if (mysqli_num_rows($hasil41)!=0) 
		{

			$_SESSION['name']=$nama;
			// jika id pemilih == 0
			
			if ($id==1)
			{
				$_SESSION['id']=$id;
				header ('location:admin.php');
			}
			else 
			{
				// jika status pemilih == 0
				if ($status==2)
				{
					// jika belum memilih 
					$_SESSION['status']=$status;
					header ('location:index.php');
				}
				else
				{
					// jika sudah memilih
					$_SESSION['status']=$status;
					header ('location:index.php?eror=1');
				}
			}
					 
		}
		else
		{
			header ('location:login.php?eror=1');
		}
	}
}
?>	  