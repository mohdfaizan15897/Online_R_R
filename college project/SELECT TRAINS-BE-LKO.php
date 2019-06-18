<HTML>
<HEAD>
<TITLE><SELECT TRAINS-BE-LKO</TITLE>

</HEAD>
<FORM NAME"LOGIN">
<BODY BGCOLOR="ORANGE">
<TABLE WIDTH="100%"BORDER="1">
<TR>
<TD ALIGN="CENTER">
<FONT COLOR="GREEN"<H3><A HREF="A HOME PAGE OF RAILWAY RESERVATION.php">HOME</A></H3></FONT>
</TD>
<TD ALIGN="CENTER">
<FONT COLOR="GREEN"><H3><A HREF="RAIL TOUR PACKAGES.php">RAIL TOUR PACKAGES</A></H3></FONT>
</TD>
<TD ALIGN="CENTER">
<FONT COLOR="GREEN">

<A HREF="LOYALITYPROGRAMMES.php">LOYALITY PROGRAMMES</A></H3></FONT>
</TD>
<TD ALIGN="CENTER"><FONT COLOR="GREEN"><H3><A HREF="ABOUT INDIAN RAILWAYS.php">
ABOUT INDIAN RAILWAYS</A></H3></FONT>
</TD>
<TD ALIGN="CENTER"><FONT COLOR="GREEN"><H3>
<A HREF="FIND TRAINS.php">RESERVATION</A></H3></FONT>
</TD>	
<TD ALIGN="CENTER"><FONT COLOR="GREEN"><H3>
<A HREF="NEWS.php">NEWS</A></H3></FONT>
</TD>
<TD ALIGN="CENTER"><FONT COLOR="GREEN"><H3><A HREF="CONTACT US.php">CONTACT US</A></H3></FONT>
</TD>
</TABLE>
</form>



<form action="SELECT TRAINS-BE-LKO.php" method="post">
<BR>
<CENTER>
<TABLE BGCOLOR="#99FF33" WIDTH="70%"BORDER="1">
<TR BGCOLOR="YELLOW">
<TD COLSPAN="4"ALIGN="CENTER">
<FONT COLOR="BLUE" SIZE="5"><U><FONT>LIST OF TRAINS FROM "BAREILLY" TO "LUCKNOW"</FONT></U>
</TD>
</TR>
<TR>
<TD ALIGN="CENTER">
<B>TRAIN NUMBER</B>
</TD>
<TD ALIGN="CENTER">
<B>TRAIN NAME</B>
</TD>
<TD ALIGN="CENTER">
<B>
TRAIN DEPARTS</B>
</TD>
<TD ALIGN="CENTER">
<B>TRAIN ARRIVES</B>
</TD>
</TR>
<TR> 
<TD ALIGN="CENTER">
12230
</TD>
<TD ALIGN="CENTER">
LUCKNOW MAIL
</TD>
<TD ALIGN="CENTER">
2:40
</TD>
<TD ALIGN="CENTER">
6:40
</TD>
</TR>
<TR>
<TD ALIGN="CENTER">
12204
</TD>
<TD ALIGN="CENTER">
SAHRSA JUNCTION GARIB RATH
</TD>
<TD ALIGN="CENTER">
15:21
</TD>
<TD ALIGN="CENTER">
18:40
</TD>
</TR>
<TR>
<TD ALIGN="CENTER">
14236
</TD>
<TD ALIGN="CENTER">
BE BSB EXPRESS
</TD>
<TD ALIGN="CENTER">
15:30
</TD>

<TD ALIGN="CENTER">
23:40
</TD>
</TR>
<TD ALIGN="CENTER">
ENTER TRAIN NUMBER
</TD>
<TD COLSPAN="3">
<INPUT TYPE="TEXT" NAME="trainno">
</TD>
</TR>
<TR>
<TD ALIGN="CENTER">
SELECT COACH TYPE
</TD>
<TD COLSPAN="3">

<SELECT>
<OPTION>SLEEPER</OPTION>
<OPTION>FIRST AC</OPTION>
<OPTION>SECOND AC</OPTION>
<OPTION>CHAIR CAR AC</OPTION>
<OPTION>THIRD AC</OPTION>
</SELECT>
</TD>
</TR>
<TR>
<TD COLSPAN="4" ALIGN="CENTER">


<INPUT TYPE="submit" VALUE="BOOK NOW" name="submit" STYLE="HEIGHT:30PX">
</TD>
</TR>
</TABLE>
</CENTER>
</form>


</BODY>
</HTML>

<?php

    if(isset($_POST['submit']))
	{
		$con= mysqli_connect('localhost','root','','collage_project');
		
		
		$trainno= $_POST['trainno'];
		
		$sql= "select*
		from train_no
		where number= '$trainno'";
		
		$run= mysqli_query($con,$sql);
		$num= mysqli_num_rows($run);
		
		
		if($num <1)
		{
			?>
			
			 <script>
			   alert("Train number not matched !!");
			   window.open('SELECT TRAINS-BE-LKO.php','_self');
			 
			 </script>
			
			
			<?php
		}
		else
		{
			mysqli_fetch_assoc($run);
			
			header('location:BOOK.php');
			
		}
	}





?>






