 <?php
 error_reporting(0);
 $host='localhost';
 $root='root';
 $pas='';
 $db='kampus';
 
$konek= mysqli_connect($host, $root, $pas, $db) or die ('gagal konek data base');




		$query1="SELECT COUNT(vote) as 'jumlah' FROM voting WHERE vote='1'";
		$hasil1=mysqli_query($konek, $query1);
		while($result1=mysqli_fetch_array($hasil1))
		{
			$hasil1= $result1[0];
		}
		
		$query2="SELECT COUNT(vote) as 'jumlah' FROM voting WHERE vote='2'";
		$hasil2=mysqli_query($konek, $query2);
		while($result2=mysqli_fetch_array($hasil2))
		{
			$hasil2= $result2[0];
		}
		
		$totalhasil=($hasil1+$hasil2);		
		$kandidat1=($hasil1/$totalhasil)*100;
		$kandidat1= round($kandidat1, 2);
		$kandidat2=($hasil2/$totalhasil)*100;
		$kandidat2= round($kandidat2, 2);
		
		
		$query3="SELECT COUNT(status) as 'jumlah' FROM pemilih WHERE status='1'";
		$hasil3=mysqli_query($konek, $query3);
		while($result3=mysqli_fetch_array($hasil3))
		{
			$hasil3= $result3[0];
		}
		
		$query4="SELECT COUNT(status) as 'jumlah' FROM pemilih WHERE status='2'";
		$hasil4=mysqli_query($konek, $query4);
		while($result4=mysqli_fetch_array($hasil4))
		{
			$hasil4= $result4[0];
		}
		
		$totalstatus=$hasil4+$hasil3;		
		$status=($hasil3/$totalstatus)*100;
		$status= round($status, 0);
		

	
?>