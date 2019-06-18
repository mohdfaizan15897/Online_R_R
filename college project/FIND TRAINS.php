<HTML>
<HEAD>
<TITLE>FIND TRAINS</TITLE>
<script language="javascript">
function find()
{
if (login.user.value=="SPN" && login.pass.value=="LKO")
{
document.location.href="SELECT TRAINS-SPN-LKO.HTML";
}
else if (login.user.value=="SPN" && login.pass.value=="NDLS")
{
document.location.href="SELECT TRAINS-SPN-NDLS.HTML";
}
else if (login.user.value=="BE" && login.pass.value=="LKO")
{
document.location.href="SELECT TRAINS-BE-LKO.php";
}
else if (login.user.value=="BE" && login.pass.value=="NDLS")
{
document.location.href="SELECT TRAINS-BE-NDLS.HTML";
}
else if (login.user.value=="MB" && login.pass.value=="LKO")
{
document.location.href="SELECT TRAINS-MB-LKO.HTML";
}
else if (login.user.value=="MB" && login.pass.value=="NDLS")
{
document.location.href="SELECT TRAINS-MB-NDLS.HTML";
}
else
{
alert("Please enter only available station codes in capital letters.");
}
}
</script>
</HEAD>
<BODY BGCOLOR="#CCFF99">
<FORM NAME="login">
<TABLE WIDTH="100%" BORDER="1">
<TR>
<TD ALIGN="CENTER">
<FONT COLOR="GREEN"><H3><A HREF="A HOME PAGE OF RAILWAY RESERVATION.php">HOME</A></H3>
</FONT>
</TD>
<TD ALIGN="CENTER">
<FONT COLOR="GREEN"><H3><A HREF="RAIL TOUR PACKAGES.php">RAIL TOUR PACKAGES</A></H3>
</FONT>
</TD>
<TD ALIGN="CENTER">
<FONT COLOR="GREEN"><H3><A HREF="LOYALITYPROGRAMMES.php">LOYALITY PROGRAMMES</A></H3></FONT>
</TD>
<TD ALIGN="CENTER">
<FONT COLOR="GREEN"><H3><A HREF="ABOUT INDIAN RAILWAYS.php">ABOUT INDIAN RAILWAYS</A></H3></FONT>
</TD>
<TD ALIGN="CENTER">
<FONT COLOR="GREEN"><H3><A HREF="FIND TRAINS.php">RESERVATION</A></H3></FONT>
</TD>	
<TD ALIGN="CENTER"><FONT COLOR="GREEN"><H3><A HREF="NEWS.php">NEWS</A></H3></FONT></TD>
<TD ALIGN="CENTER">
<FONT COLOR="GREEN"><H3><A HREF="CONTACT US.php">CONTACT US</A></H3></FONT></TD></TABLE><BR>
<CENTER>
<TABLE BGCOLOR="#99FF33" WIDTH="70%" BORDER="1">
<TR>
<TD COLSPAN="2" ALIGN="CENTER">
<U><FONT COLOR="GREEN" SIZE="6">WELCOME TO RAILWAY TICKET RESERVATION</FONT></U></TD></TR>
<TR BGCOLOR="YELLOW">
<TD COLSPAN="2" ALIGN="CENTER" >
<FONT COLOR="BLUE">SELECT STATIONS</FONT>
</TD>
</TR>
<TR>
<TD>Select Source Station</TD><TD>
<SELECT>
<OPTION>Shahjahanpur,SPN</OPTION>
<OPTION>Bareilly,BE</OPTION>
<OPTION>Moradabad,MB</OPTION>
</SELECT>
</TD>
</TR>
<TR>
<TD>Select Destination Station</TD><TD>
<SELECT><OPTION>Lucknow,LKO</OPTION>
<OPTION>New Delhi,NDLS</OPTION>
</SELECT></TD></TR><TR><TD>Enter Source Station Code</TD><TD>
<INPUT TYPE="TEXT" NAME="user"><BR><FONT COLOR="BLUE">(in given capital characters only)</FONT></TD>
</TR>
<TR>
<TD>
Enter Source Destination Code
</TD>
<TD>
<INPUT TYPE="TEXT" NAME="pass">
<BR>
<FONT COLOR="BLUE">(in given capital characters only)</FONT>
</TD>
</TR>
<TR>
<TD COLSPAN="2" ALIGN="CENTER">
<INPUT TYPE="BUTTON" VALUE="FIND TRAINS" onClick="find();"</A><STYLE="HEIGHT:30PX">	
</TD>
</TR>
</TABLE>
</CENTER>
</FORM>
</BODY>
</HTML>
