<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Convert Data from Mysql to JSON Format using PHP</title>  
      </head>  
      <body>  
           <?php   
	
	 header("Access-Control-Allow-Origin: *");
           $connect = mysqli_connect("localhost", "root", "", "testing");  
           $sql = "SELECT * FROM test";  
           $result = mysqli_query($connect, $sql);
		header("Content-Type: JSON");  
           $json_array = array();  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $json_array[] = $row;  
           }  
           /*echo '<pre>';  
           print_r(json_encode($json_array));  
           echo '</pre>';*/  
           echo json_encode($json_array);  
           ?>  
      </body>  
 </html>