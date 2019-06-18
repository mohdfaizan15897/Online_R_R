<HTML>
<HEAD><TITLE>RESERVATION</TITLE>

</HEAD>
<BODY BGCOLOR="silver">
<FORM NAME="login">

<CENTER><I><U><FONT COLOR="BLUE" SIZE="22" FACE="NONIMPACT"><MARQUEE SCROLLAMOUNT="15"BGCOLOR="LIGHTBLUE"DIRECTION="LEFT"BEHAVIOR="ALTERNATE">WELCOME TO INDIAN RAILWAYS</MARQUEE></FONT></I><U></CENTER>
<TR>
<TD>
<IMG SRC="images/IMG HOME3.JPG" HEIGHT="200" WIDTH="200" >
</TD>
<TD><IMG SRC="images/IMG HOME4.JPG" HEIGHT="200" WIDTH="800">
</TD>
<TD><IMG SRC="images/IMG HOME5.JPG" HEIGHT="200" WIDTH="300">
</TD>
</TR>
</TABLE><HR SIZE="5%" COLOR="GREEN">
<TABLE WIDTH="100%" BORDER="1"><TR><TD ALIGN="CENTER">
<FONT COLOR="GREEN"><H3><A HREF="A HOME PAGE OF RAILWAY RESERVATION.php">HOME</A></H3></FONT>
</TD>
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




<form action="A HOME PAGE OF RAILWAY RESERVATION.php" method="post">
<HR SIZE="5%" COLOR="GREEN">
<TABLE BORDER="1" WIDTH="100%">
<TR>
<TD ALIGN="CENTER">
<TABLE BGCOLOR="#99FF33" BORDER="1" WIDTH="75%">
<TR><TD ALIGN="CENTER">	
<I><H4>LOGIN</H1></I>
</TD>
</TR>
<TR>
<TD> USER NAME &nbsp&nbsp <INPUT TYPE="TXT" NAME="username">
</TD>	
</TR>
<TR>
<TD>
PASSWORD &nbsp&nbsp&nbsp <INPUT TYPE="TXT" NAME="password">
</TD>
</TR>
<TR>
<TD>
<CENTER><INPUT TYPE="submit" VALUE="LOGIN" name="submit" STYLE="HEIGHT:30PX"></CENTER>
</TD>
</TR>
<TR>
<TD ALIGN="CENTER">
<FONT SIZE="4"><B><a href="signup.php">SIGN UP</a></B> (NEW USER)</FONT>
</TD>
</TR>
</TABLE></TD><TD ALIGN="CENTER">
</form>




<form>
<TABLE BGCOLOR="#99FF33" BORDER="1" WIDTH="75%><TR><TD ALIGN="CENTER">	
<I><H4>AN APPEAL TO PASSENGERS</H1></I>
</TD>	</TR><TR>
<TD ALIGN="CENTER">
<IMG SRC="images/IMG HOME6.JPG"HEIGHT="100"><BR>TAKE PAPERLESS TICKET SAVE OUR EARTH

</TD></TR><TR><TD ALIGN="CENTER"><FONT SIZE="4"><B><A HREF="knowmore.php">KNOW MORE</A></B></FONT>
</TD></TR>		
</TABLE>
</TD>
<TD ALIGN="CENTER">
<TABLE BGCOLOR="#99FF33" BORDER="1" WIDTH="75%"><TD ALIGN="CENTER"><I><H4>RAILWAY ENQUIRY</H1></I></TD>

<TR>
<TD ALIGN="CENTER"><IMG SRC="images/IMG HOME7.JPG" HEIGHT="90" WIDTH="120"><BR>
<b>CALL 139 <BR> (24 X 7 SUPPORT) <BR> CALL 131 (TOLL FREE NO.) <BR> VISIT <a href="https://www.irctc.co.in" target="_blank">www.irctc.co.in</a><BR></b>
</TD>
</TR>
<TR>

</TD>
</TR>
</TABLE>
</TD>
</TR>
</TABLE>
<HR SIZE="5%" COLOR="GREEN">
<CENTER><I><FONT SIZE="4" COLOR="GREEN"><MARQUEE BGCOLOR="SILVER"BEHAVIOR="ALTERNATE" >Copyright © 2012 - www.irctc.co.in. All Rights Reserved<BR>
Site best viewed in IE 5.5 and above</FONT></I></CENTER></MARQUEE>

</FORM>
</BODY>
</HTML>

</TABLE></CENTER><HR SIZE="5%" COLOR="GREEN">
</BODY>
</HTML>

<?php



   if(isset($_POST['submit']))
  {
     
	 $con=mysqli_connect('localhost','root','','collage_project');
	 
	 $username=$_POST['username'];
	 
	 $password=$_POST['password'];
	 
	 

              $sql="select*
              from signup 
			  where name='$username' and password='$password'";
		   
		    $run=mysqli_query($con,$sql);
			
			$num=mysqli_num_rows($run);
		   
		  if($num <1)
		 {
			 ?>
			 <script>
			   alert('username or password not matched !!');
			   window.open('A HOME PAGE OF RAILWAY RESERVATION.php','_self');
			 </script>
			 <?php
		 }
         else
		 {
			 
			 mysqli_fetch_assoc($run);
			 
			
	          header('location:FIND TRAINS.php');
		 }			 
		   
  }   
?>







