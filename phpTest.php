

<?php
   $dbhost = '137.99.113.126';
   $dbuser = 'melvin';
   $dbpass = 'GermanyWillWin!';
   $zip = 0;
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT name FROM city';
   mysql_select_db('world');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_assoc($retval)) {
      echo "ZIP :{$row['name']}  <br> ".
         "--------------------------------<br>";
         $zip = $row['name'];
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>

<html>
<body>
    <input id="test" type="text" value = "<?php echo $zip ?> ">
    </body>    
    
</html>