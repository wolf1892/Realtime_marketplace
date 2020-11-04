<?php  
session_start();
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 $output = '';  
$username=$_SESSION['username'];
 $sql = "SELECT * FROM test where username='$username'";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID</th>
						<th width="10%">Product Name</th>
						<th width="5%">Price</th>
						<th width="5%">Per</th>
						<th width="10%">Person Name</th>
						<th width="10%">Phone Number</th>
						<th width="5%">Packaging Size</th>
						<th width="10%">Brand</th>
						<th width="10%">Speciality</th>
						<th width="10%">Life</th>
						<th width="5%">MOQ</th>
						<th width="5%">Price change</th>
		     <th width="10%">Delete</th>
		     
                </tr>';  

 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM tbl_sample LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="product_name" data-id1="'.$row["id"].'" contenteditable>'.$row["product_name"].'</td>  
                     <td class="price" data-id2="'.$row["id"].'" contenteditable>'.$row["price"].'</td>  
					 <td class="per" data-id3="'.$row["id"].'" contenteditable>'.$row["per"].'</td>  
					 <td class="person_name" data-id4="'.$row["id"].'" contenteditable>'.$row["person_name"].'</td>  
					 <td class="phone" data-id5="'.$row["id"].'" contenteditable>'.$row["phone"].'</td>  
					 <td class="size" data-id6="'.$row["id"].'" contenteditable>'.$row["size"].'</td>  
					 <td class="brand" data-id7="'.$row["id"].'" contenteditable>'.$row["brand"].'</td>  
					 <td class="special" data-id8="'.$row["id"].'" contenteditable>'.$row["special"].'</td>  
					 <td class="life" data-id9="'.$row["id"].'" contenteditable>'.$row["life"].'</td>  
					 <td class="moq" data-id10="'.$row["id"].'" contenteditable>'.$row["moq"].'</td>  
					 <td class="price_change" data-id11="'.$row["id"].'" contenteditable>'.$row["price_change"].'</td>  
                     <td><button type="button" name="delete_btn" data-id12="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="product_name" contenteditable></td>  
                <td id="price" contenteditable></td>  
				<td id="per" contenteditable></td>  
				<td id="person_name" contenteditable></td>  
				<td id="phone" contenteditable></td>  
				<td id="size" contenteditable></td>  
				<td id="brand" contenteditable></td>  
				<td id="special" contenteditable></td>  
				<td id="life" contenteditable></td>  
				<td id="moq" contenteditable></td>  
				<td id="price_change" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="product_name" contenteditable></td>  
                <td id="price" contenteditable></td>  
				<td id="per" contenteditable></td>  
				<td id="person_name" contenteditable></td>  
				<td id="phone" contenteditable></td>  
				<td id="size" contenteditable></td>  
				<td id="brand" contenteditable></td>  
				<td id="special" contenteditable></td>  
				<td id="life" contenteditable></td>  
				<td id="moq" contenteditable></td>  
				<td id="price_change" contenteditable></td>   
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;

 ?>

<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</html>