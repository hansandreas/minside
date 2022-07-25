<?php
        
        //database details. You have created these details in the third step. Use your own.
        $host = "localhost";
        $username = "formdb_user";
        $password = "abc123";
        $dbname = "form_entriesdb";

        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname);
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
        
		$sql = 'SELECT name_fld, address_fld, telephone_fld, birthdate_fld FROM contactform_entries';
		//mysql_select_db('form_entriesdb');
		//$retval = mysql_query( $sql, $conn );
   
		while ($row = mysql_fetch_array($retval, mysql_assoc)) {
			echo "Navn: {$row[0]} <br> " . " test";
		}
		$x = 1;

		while($x <= 5) {
		echo "The number is: $x <br>";
		$x++;
		}
      
      //connection closed.
        mysqli_close($con);
    
?>