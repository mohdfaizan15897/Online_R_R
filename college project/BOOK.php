<HTML> 
<HEAD>
 <TITLE> BOOK</TITLE>
  
  
  
  
  
  
  
<HEAD>
 <BODY BGCOLOR="#CCFF99">
<FORM NAME="form1">
<TABLE WIDTH="100%"BORDER="1">
 <TR> 
<TD ALIGN="CENTER">
<FONT COLOR="GREEN"><H3><A HREF="A HOME PAGE OF RAILWAY RESERVATION.php"> HOME</A></H3></FONT> </TD> 
<TD ALIGN="CENTER><FONT COLOR="GREEN"><H3><A HREF="RAIL TOUR PACKAGES.php">RAIL TOUR PACKAGES</A></H3></FONT>
</TD>
<TD ALIGN="CENTER"><FONT COLOR="GREEN"><H3><A HREF="LOYALITYPROGRAMMES.php">LOYALITY PROGRAMMES</A></H3></FONT>
</TD>
<TD ALIGN="CENTER">
<FONT COLOR="GREEN"><H3><A HREF="ABOUT INDIAN RAILWAYS.php">ABOUT INDIAN RAILWAYS</A></H3></FONT>
</TD>
<TD ALIGN="CENTER">
<FONT COLOR="GREEN"><H3><A HREF="FIND TRAINS.php">RESERVATION</A></H3></FONT>
</TD>	
<TD ALIGN="CENTER"><FONT COLOR="GREEN"><H3><A HREF="NEWS.php">NEWS</A></H3></FONT>
</TD>
<TD ALIGN="CENTER"><FONT COLOR="GREEN"><H3><A HREF="CONTACT US.php">CONTACT US</A></H3></FONT>
</TD>
</TABLE>
</form>





<form method="post" action="BOOK.php" enctype="multipart/form-data">
<BR>
<center>
<table width="80%">
<tr>
<td align="center" colspan="6">
<u><font color="blue" size="5">	TICKET RESERVATION</FONT></U>
</TD>
</TR>
</TABLE>
</CENTER>
<HR SIZE="5%">
<CENTER>
<TABLE WIDTH="80%">
<TR>
<TD ALIGN="CENTER" COLSPAN="6">
<FONT COLOR="BLUE" SIZE="4">PASSENGER DETAILS</FONT>
</TD>
</TR>
<TR BGCOLOR="#B0BOB0">
<TD ALIGN="CENTER">
<B>S.No.</B>
</TD>
<TD ALIGN="CENTER">
<B>NAME</B>
</TD>
<TD ALIGN="CENTER">
<B>AGE</B>
</TD>
<TD ALIGN="CENTER">
<B>GENDER</B>
<TD ALIGN="CENTER">
<B>BIRTH PREFERENCE</B>
</TD>
<TD ALIGN="CENTER">
<B>SENIOR CITIZEN</B>
</TD>
<TD ALIGN="CENTER">
<B>upload image</B>
</TD>
</TR>
<TR>
<TD ALIGN="CENTER">
1
</TD>
<TD ALIGN="CENTER">
<INPUT TYPE="TXT" NAME="name1" required><FONT COLOR="RED">*</FONT>
</TD>
<TD ALIGN="CENTER">
<INPUT TYPE="TXT" NAME="age1"><FONT COLOR="RED">*</FONT>
</TD>
<TD ALIGN="CENTER">
<SELECT name="gender1">
<OPTION value="">SELECT</OPTION>
<OPTION value="male">MALE</OPTION>
<OPTION value="female">FEMALE</OPTION>
</SELECT>
</TD>
<TD ALIGN="CENTER">
<SELECT name="birth1">
<OPTION value="">CHOOSE BERTH</OPTION>
<OPTION value="lower">LOWER</OPTION>
<OPTION value="middle">MIDDLE</OPTION>
<OPTION value="upper">UPPER</OPTION>
<OPTION value="side upper">SIDE UPPER</OPTION>
</SELECT>
</TD>
<TD ALIGN="CENTER">
<INPUT TYPE="CHECKBOX" name="senior">
</TD>

<TD ALIGN="CENTER">
<INPUT TYPE="file" name="img1">
</TD>





</TR>










<TR>
<TD ALIGN="CENTER">
2
</TD>
<TD ALIGN="CENTER">
<INPUT TYPE="TXT" name="name2">
</TD>
<TD ALIGN="CENTER">
<INPUT TYPE="txt" name="age2">
</td>
<TD ALIGN="CENTER">
<select name="gender2">
<OPTION value="">SELECT</OPTION>
<OPTION value="male">MALE</OPTON>
<OPTION value="female">FEMALE</OPTION>
</SELECT>
</TD>
<TD ALIGN="CENTER">
<SELECT name="birth2">
<OPTION value="">CHOOSE BERTH</OPTION>
<OPTION value="lower">LOWER</OPTION>
<OPTION value="middle">MIDDLE</OPTION>
<OPTION value="upper">UPPER</OPTION>
<OPTION value="side upper">SIDE UPPER</OPTION>
<OPTION value="side lower">SIDE LOWER</OPTION>
</SELECT>
</TD>
<TD ALIGN="CENTER">
<INPUT TYPE="CHECKBOX">
</TD>


<TD ALIGN="CENTER">
<INPUT TYPE="file" name="img2">
</TD>



</TR>
<TR>
<TD ALIGN="CENTER">
<FONT COLOR="GREY" CHILDREN BELOW 5 YEARS(FOR WHOM TICKET IS NOT TO BE ISSUED).</FONT>
</TD>
</TR>
<TR>











<TD ALIGN="CENTER" COLSPAN="6">
<FONT COLOR="BLUE"SIZE="4"><U>CHILD PASSENGER DETAILS</U></FONT>
</TD>
</TR>
<TR BGCOLOR="#B0BOB0">
<TD ALIGN="CENTER">
<B>S.No.</B>

<TD ALIGN="CENTER">
<B> NAME</B>
</TD>
<TD ALIGN="CENTER">
<B>AGE</B>
</TD>
<TD ALIGN="CENTER">
<B>SEX</B>
</TR>
<TR>
<TD ALIGN="CENTER">
1
</TD>
<TD ALIGN="CENTER">
<INPUT TYPE="TEXT" name="cname">
</TD>
<TD ALIGN="CENTER">
<INPUT TYPE="TEXT" name="age3">
</TD>
<TD ALIGN="CENTER">
<SELECT name="gender3">
<OPTION value="">SELECT</OPTION>
<OPTION value="male">MALE</OPTION>
<OPTION value="female">FEMALE</OPTION>
</SELECT>
</TD>
</TR>
</TABLE>
<CENTER><U>NOTE:</U><FONT COLOR="RED">"*"ARE THE MANDATORY FIELDS.</FONT></CENTER>

<HR SIZE="5%">
<CENTER>
<TABLE>
<TR>
<TD>
<INPUT TYPE="CHECKBOX"><FONT COLOR="GREEN">
CONSIDER FOR AUTO UPGRADATION </FONT><BR>
</TD>
</TR>
<TR>
<TD COLSPAN="6">
BERTH PREFERENCE DOES NOT FUARANTEE ALLOTMENT OF PREFERED BERTH TYPE. IF YOU NEED 
ASSURED LOWER BERTH<BR>
</TD>
</TR>
<TR>
<TD COLSPAN="6">
<INPUT TYPE="RADIO">NONE<BR>
<INPUT TYPE ="RADIO">BOOK MY TICKET ONLY IF ATLEST ONE LOWER BERTH IS ALLOTED<BR>
<INPUT TYPE="RADIO">BOOK MY TICKET ONLY IF ATLEAST TWO LOWER BERTHS ARE ALLOTED<BR>
</TD>
</TR>
<TD>
PASSENGER MOBILE NUMBER:+91<INPUT TYPE="TXT"  NAME="mob"><FONT COLOR="RED">*</FONT>&nbsp&nbsp&nbsp(SMS WILL BE SENT TO THIS MOBILE NUMBER.)
</TD>
</TR>
<TR BGCOLOR="#B0B0BO#>
<TD ALIGN="CENTER">
E-TICKET
</TD>
</TR>
<TR>
<TD>
THE IDENTIFICATION DETAILS ARE REQUIRED AT THE TIME OF TATKAL TICKET BOOKING. THE ID CARD WILL ALSO BE REQUIRED DURING JOURNEY. ONE OF THE <BR>
CARD/PASSOPORT/PANCARD/DRIVINGLICENSE/PHOTO<BR>
ID CARD ISSUED BY CENTRAL/STATE GOVT WHICH ARE HAVING SERAIL NUMBER /STUDENT IDENTITY CARD WITH PHOTOGRAPH ISSUED BY RECOGNIZED SCHOOL OR<BR>
COLLEGE FOR THEIR STUDENT /NATIONALLIZED BANK PASSBOOK WITH PHOTOGRAPH/CREDIT CARDS ISSUED BY BANKS WITH LAMINATED PHOTOGRAPH/UNIQUE<BR>
IDENTIFICATION CARD "AADHAR")DURING TRAIN JOURNEY IN ORIGINAL. RATION CARD WILL BE ACCEPETED AS PROOF OF IDENTITY FOR UNDERTAKING JOURNEY<BR>
UNDER TATKAL SCHEME ONLY IF THE PASSENGER WHOSE PHOTOGRAPH IS AVILABLE ON THE RATION CARD IS TRAVELLING.
</TD>
</TR>
<TD ALIGN="RIGHT">
<A HREF="SELECT DEBIT CARD.php">
<INPUT TYPE="submit" VALUE="SUBMIT" name="submit" STYLE=WIDTH:70PX"/></A>
<A HREF="BOOK.php"><INPUT TYPE="BUTTON" VALUE="CANCEL" STYLE="WIDTH:70PX"></A.>
</TD>
</TR></TABLE>
</CENTER>

<HR SIZE="5%">

<CENTER>
<TABLE>
<TR>
<TD ALIGN="CENTER">
<FONT COLOUR="BLUE">COPRIGHT 2012-WWW.IRCTC.CO.IN.ALL RIGHTS RESERVED SITE BEST VIEWES N IE 5.5AND ABOVE 26</FONT>
</TD>





</TR>
</TABLE>
</CENTER>
</FORM>
</BODY>
</HTML>



<?php


   if(isset($_POST['submit']))
   {
	   
	   $con=mysqli_connect('localhost','root','','collage_project');
	   
	   $name1=$_POST['name1'];
	   
	   $age1=$_POST['age1'];
	   
	   $gender1=$_POST['gender1'];
	   
	   $birth1=$_POST['birth1'];
	   
	   $senior1=$_POST['senior1'];
	   
	   $mob=$_POST['mob'];
	   
	   $imagename1=$_FILES['img1']['name'];
	   $tempname1=$_FILES['img1']['tmp_name'];
	   
	   
	   
	   
	   $name2=$_POST['name2'];
	   
	   $age2=$_POST['age2'];
	   
	   $gender2=$_POST['gender2'];
	   
	   $birth2=$_POST['birth2'];
	   
	   $senior2=$_POST['senior2'];
	   
	    $imagename2=$_FILES['img2']['name'];
	   $tempname2=$_FILES['img2']['tmp_name'];
	   
	   
	   
	   
	   
	    $cname=$_POST['cname'];
	   
	   $age3=$_POST['age3'];
	   
	   $gender3=$_POST['gender3'];
	   
	   
	   
	   
	   
	   
	   
	   move_uploaded_file($tempname1,"dataimg/$imagename1");
	   
	   move_uploaded_file($tempname2,"dataimg1/$imagename2");
	   
	   
	   
	   $sql2="INSERT INTO user2(name,age,mob,image,gender,birth)
	          VALUES('$name2','$age2','$mob','$imagename2','$gender2','$birth2')";
			  
	   
	   
	   $sql1="INSERT INTO user1(name,age,mob,image,gender,birth)
	          VALUES('$name1','$age1','$mob','$imagename1','$gender1','$birth1')";
			  
			  
		 $sql3="INSERT INTO cuser(name,age,mob,gender)
	          VALUES('$cname','$age3','$mob','$gender3')";
			  
			  
		$run1=mysqli_query($con,$sql1);
		
		
		$run2=mysqli_query($con,$sql2);
		
		
		$run3=mysqli_query($con,$sql3);
		
		
		
		if($run1 == 1 || $run2 == 1 || $run3 == 1)
		   {
			   
			   ?>
			   
			   <script>
			     alert('data inserted successfully');
				
			   </script>
			     
			   
			   <?php
			   header('location: dounload.php');
			   
		   }
	   
	   
	   
   }






?>







