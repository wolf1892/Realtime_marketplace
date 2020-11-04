<?php 
	session_start(); //starting the session, to use and store data in session variable

	//if the session variable is empty, this means the user is yet to login
	//user will be sent to 'login.php' page to allow the user to login
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You have to log in first";
		header('location: login.php');
	}

	// logout button will destroy the session, and will unset the session variables
	//user will be headed to 'login.php' after loggin out
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


</head>
<body>


<button class="tablink" onclick="openPage('Home', this, 'red')" id="defaultOpen">Products</button>
<button class="tablink" onclick="openPage('News', this, 'green')">News</button>
<button class="tablink" onclick="openPage('Contact', this, 'blue')">Contact</button>
<button class="tablink" onclick="openPage('About', this, 'orange')">Profile</button>

<div id="Home" class="tabcontent">
  <!-- home
  -->
  <div class="header">
		
	</div>
	<div class="content">

		<!-- creating notification when the user logs in -->
		<!-- accessible only to the users that have logged in already -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- information of the user logged in -->
		<!-- welcome message for the logged in user -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">Click here to Logout</a> </p>
		<?php endif ?>
	</div>
		<div class="container">  
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
				
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
		</div>
</div>

<div id="News" class="tabcontent">
  <h3>News</h3>
  <p>Some news this fine day!</p>
</div>

<div id="Contact" class="tabcontent">
  <h3>Contact</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="About" class="tabcontent">
  <h3>Profile</h3>
  <p>Who we are and what we do.</p>
</div>





	
		
</body>



<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var product_name = $('#product_name').text();  
        var price = $('#price').text();
	var per = $('#per').text();
	var person_name = $('#person_name').text();
	var phone = $('#phone').text();
	var size = $('#size').text();
	var brand = $('#brand').text();
	var special = $('#special').text();
	var life = $('#life').text();
	var moq = $('#moq').text(); 
	var price_change = $('#price_change').text(); 
        if(product_name == '')  
        {  
            alert("Enter First Name");  
            return false;  
        }  
        if(price == '')  
        {  
            alert("Enter Last Name");  
            return false;  
        }  
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{product_name:product_name, price:price, per:per, person_name:person_name, phone:phone, size:size, brand:brand, special:special, life:life, moq:moq, price_change:price_change},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.product_name', function(){  
        var id = $(this).data("id1");  
        var product_name = $(this).text();  
        edit_data(id, product_name, "product_name");  
    });  
    $(document).on('blur', '.price', function(){  
        var id = $(this).data("id2");  
        var price = $(this).text();  
        edit_data(id, price, "price");  
    }); 
	$(document).on('blur', '.per', function(){  
        var id = $(this).data("id3");  
        var product_name = $(this).text();  
        edit_data(id, per, "per");  
    }); 
	$(document).on('blur', '.person_name', function(){  
        var id = $(this).data("id4");  
        var person_name = $(this).text();  
        edit_data(id, person_name, "person_name");  
    });
	$(document).on('blur', '.phone', function(){  
        var id = $(this).data("id5");  
        var phone = $(this).text();  
        edit_data(id, phone, "phone");  
    });
	$(document).on('blur', '.size', function(){  
        var id = $(this).data("id6");  
        var size = $(this).text();  
        edit_data(id, size, "size");  
    });
	$(document).on('blur', '.brand', function(){  
        var id = $(this).data("id7");  
        var brand = $(this).text();  
        edit_data(id, brand, "brand");  
    });
	$(document).on('blur', '.special', function(){  
        var id = $(this).data("id8");  
        var special = $(this).text();  
        edit_data(id, special, "special");  
    });
	$(document).on('blur', '.life', function(){  
        var id = $(this).data("id9");  
        var life = $(this).text();  
        edit_data(id, life, "life");  
    });
	$(document).on('blur', '.moq', function(){  
        var id = $(this).data("id10");  
        var moq = $(this).text();  
        edit_data(id, moq, "moq");  
    });
	$(document).on('blur', '.price_change', function(){  
        var id = $(this).data("id11");  
        var price_change = $(this).text();  
        edit_data(id, price_change, "price_change");  
    });
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id12");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>






<style>
/* Set height of body and the document to 100% to enable "full page tabs" */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#Home 
#News {background-color: green;}
#Contact {background-color: blue;}
#About 
</style>
<script>
function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(pageName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</html>