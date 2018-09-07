<?php
error_reporting(1);
	function ExecuteQuery ($SQL)
	{	
		$con=mysqli_connect ("localhost", "id3010239_doubt","Javedrani@123");
		mysqli_select_db ("id3010239_doubt",$con);
		
		$rows = mysqli_query ($SQL);
		
		mysqli_close ();
		
		return $rows;
	}
	
	function ExecuteNonQuery ($SQL)
	{
		$con=mysqli_connect ("localhost", "id3010239_doubt","Javedrani@123");
		mysqli_select_db ("id3010239_doubt",$con);
		
		$result = mysqli_query ($SQL);
		
		mysqli_close ();
		
		return $result;
	}
?>