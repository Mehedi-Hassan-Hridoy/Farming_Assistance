<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body style="background-color:#B38CB6;">
	 <style>
        a:hover{
            color: brown;
        }
        a:hover{
            border:2px solid blue;
        }
    </style>
	<fieldset  style=" background-color:#D60A1C;height:150px;width:" >
		<h1>E-Farming</h1>
		
		<h3 style="text-align:right; ">Welcome,Admin Profile</h3>
		<h4 style="text-align:right; ">A Smart Farming Assistance</h4>
	</fieldset>

	 <fieldset style="background-color:#02000A; height:205px; width:10%">
           <h2 style="color: white ">Profile</h2>
           <button>
		 <a href="viewProfile.php">View</a> </button> <br><br>

		 <button>
		  <a href="../Controller/editProfile.php">Edit</button> <br><br>

		  <button>
		  <a href="../Controller/changePassword.php">Change Password</button> <br><br>

		  <button>
		 	<a href="home.html">Logout</a> </button>

      </fieldset>
 
		<fieldset style="background-color:#02000A; height:340px; width:10%">
			 <h2 style="color: white ">Actions</h2>

			 <button>
		 <a href="../Controller/sellerinfo.php">Seller Information</a> </button> <br><br>

			<button>
		 <a href="../Controller/employeeinfo.php">Employee Information</a> </button> <br><br>

		 <button>
		 <a href="../Controller/buyerinfo.php">Buyer Information</a> </button> <br><br>

		  

		 <button>
		 <a href="../Controller/productinfo.php">Products Information</a> </button><br><br>

		  <button>
		 <a href="notification_action.php">Notification</a> </button><br><br>
		 

		 <button>
		 <a href="transiction_action.php">Transaction</a> </button><br><br>


			

		</fieldset> 
		

        	
		 
        	
        


	
</body>
</html> 