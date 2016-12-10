<?php
session_start();

if (empty($_SESSION['name']))
{
	header ('location:index.php');
}
else
{
	if (empty($_GET['id']))
	{
		header ('location:index.php');
	}
	else
	{
		if (!empty($_SESSION['status']))
		{	
			if ($_SESSION['status']==2)
			{
				// prosesnya disni
				//echo "bisa vote";
				$id=$_GET['id'];
				
				require_once 'koneksi.php';
				$sql5="INSERT INTO voting VALUES ('','$id')";
				$sql5=mysqli_query($konek, $sql5);
				
				if ($sql5)
				{
					$nama=$_SESSION['name'];
					$kueri="UPDATE pemilih SET status=1 WHERE nama='$nama'";
					$kueri=mysqli_query($konek, $kueri);
						
					if ($kueri)
					{
							header ('location:logout.php');
					}
					else
					{
						echo "gagal Ubah status";
					}	
					
				}
				else
				{
					echo "Gagal Vote";
				}
			}
			else
			{
				header ('location:index.php?eror=1');
			}
		}	
		else
		{
			header ('location:index.php?eror=2');	//eeor masih dsini
		}
	}	
		
}	


?> 