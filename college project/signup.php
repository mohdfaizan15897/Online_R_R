<html>
  <head>
      <title>sign up for new user</title>
      
  
  </head>
  <body bgcolor="#faa555">
  <h1 align="center">Fill the information for signup for the Reservation</h1>
     <form method="post" action="signup.php" style="padding: 10px;">

        <table align="center" border="1" style="height: 600px; width: 1000px;">
	    <tr>
		  <th>Enter your name</th>
		  <td><input type="text" name="name" placeholder="Enter name here." required></td>
		</tr>
		<tr>
		  <th>Age</th>
		  <td><input type="text" name="age" placeholder="Enter age here" required></td>
		</tr>
		<tr>
		  <th>City</th>
		  <td><input type="text" name="city" placeholder="Enter City" required></td>
		</tr>
		<tr>
		  <th>Mob.</th>
		  <td><input type="text" name="mob" placeholder="Enter Mobile No." required></td>
		</tr>
		<tr>
		  <th>Email</th>
		  <td><input type="text" name="email" placeholder="Enter your email id" required></td>
		</tr>
		
		<tr>
		  <th>password</th>
		  <td><input type="password" name="password" required></td>
		</tr>
		<tr>
		   <td colspan="3" align="center">
			  <input type="submit" name="submit">
			  <input type="reset" name="reset" value="reset data">
			  <a href="A HOME PAGE OF RAILWAY RESERVATION.php"><input type="button" name="button" value="Go Home"></a>
		   </td>
		
		
		
	   </table>


     </form>
  
  </body>
</html>
<?php



   if(isset($_POST['submit']))
  {
     
	 $con=mysqli_connect('localhost','root','','collage_project');
	 
	 $name=$_POST['name'];
	 $age=$_POST['age'];
	 $city=$_POST['city'];
	 $mob=$_POST['mob'];
	 $email=$_POST['email'];
	 $password=$_POST['password'];
	 
	 

     $sql="INSERT INTO signup(name,age,city,email,mob,password) 
	 VALUES('$name','$age','$city','$email','$mob','$password')";

		   
		    $run=mysqli_query($con,$sql);
		   
		   if($run == 1)
		   {
			   
			   ?>
			   
			   <script>
			     alert('data inserted successfully');
				 
			   </script>
			   
			   
			   <?php
			   
			
		   }
		   
  }   
?>





