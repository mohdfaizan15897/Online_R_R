<HTML>
<HEAD>
    <TITLE>BANK OF BARODA</TITLE>
    <script language="javascript">
    function sub()
        {
            if document.form1.r1.checked==false>
                {
                alert("please select the card detail options");
                
                
            }
            else if(form1.text1.value.length==0||form1.text2.value.length==0||form1.text3.vlaue.length==0||form1.text4.value.length==0)
                {
                    alert("please fill all mandotary fields");
                    
                    
                }
                else{
                    
                    document.location.href="RESERVATION COMPLETED.HTML";
                    
                }        
            
        }
    
    
    </script>
    </HEAD>
<BODY BGCOLOR="SILVER">
    
    <TABLE WIDTH="100%" BORDER="1">
<TR><TD ALIGN="CENTER">
<FONT COLOR="GREEN"><H3><A HREF="A HOME PAGE OF RAILWAY RESERVATION.php">HOME</A></H3></FONT>
</TD>
<TD ALIGN="CENTER"><FONT COLOR="GREEN"><H3><A HREF="RAIL TOUR PACKAGES.php">RAIL TOUR PACKAGES</A></H3>
</FONT></TD>
<TD ALIGN="CENTER"><FONT COLOR="GREEN"><H3><A HREF="LOYALITYPROGRAMMES.php">LOYALITY PROGRAMMES</A></H3>
</FONT>
</TD>
<TD ALIGN="CENTER"><FONT COLOR="GREEN"><H3><A HREF="ABOUT INDIAN RAILWAYS.php">ABOUT INDIAN RAILWAYS</A></H3></FONT></TD><TD ALIGN="CENTER">
<FONT COLOR="GREEN"><H3><A HREF="FIND TRAINS.php">RESERVATION</A></H3>
</FONT>
</TD>
<TD ALIGN="CENTER"><FONT COLOR="GREEN"><H3>
<A HREF="NEWS.php">NEWS</A></H3></FONT>
</TD>
<TD ALIGN="CENTER"><FONT COLOR="GREEN"><H3>
<A HREF="CONTACT US.php">CONTACT US</A></H3></FONT>
</TD>
    </TABLE>
<HR SIZE="5%"COLOR="RED">
    <CENTER>
    <IMG SRC="images/AKHIL.jpg" WIDTH="60%" HEIGHT="40%">
    </CENTER><CENTER>
        <HR SIZE="2%" COLOR="BLUE">
            <TABLE BGCOLOR="GREY">
            
            <TR>
                <TD>
                <FONT SIZE="4" COLOR="ORANGE"><U>WELCOME TO BANK OF BARODA PAYMENT GATEWAY</U></FONT>
                </TD>
                </TR>
                
                
                
            </TABLE>
            </CENTER>
        <BR>
             <CENTER> 
                <TABLE WIDTH="50%">
              <TR>
                    <TD BGCOLOR="GREY" ALIGN="CENTER" COLSPAN="2">
                    BILLING INFORMATION
                    
                    </TD>
                    </TR></CENTER>
                <TR>
                    <TD>
                    <B>MERCHANT</B>
                    </TD><TD>IRCTC</TD></TR>
                 <TR><TD><B>Website</B></TD><td>http.//www.irctc.co.in</td></TR>
                 <tr><td><b>Track id</b></td><td>02476935821548</td></tr>
                 <tr> <td bgcolor="grey"align="center"colspan="2">PAYMENT INFORMATION</td></tr>
                 <TR><td colspan="2"><input type="radio" name="r1"><u>CARD DETAILS</u></td></TR>
                 <TR><td>Card Number<font color="red">*</font></td><td><input type="text"name="text1"></td></TR>
                 <tr><td>Valid from/Expiration Date<font color="red">*</font><td><input type="text"name="text2"></td></td></tr>
                 
                 <tr><td>Card Holder Name<font color="red">*</font><td><input type="text"name="text2"></td></td></tr>
                 <tr><td>PIN<font color="red">*</font><td><input type="text"name="text2"></td></td></tr>
                   <center><tr><td align="center"colspan="3"><u><b>NOTE</b></u><font color="red">*</font> All fields are mandatory</td></tr></center>
                                       
    </TABLE>
        </CENTER>
<hr size="2%">
<center>
<table>
    <tr>
    
        <td colspan="3"><A HREF="CAUTION.php"><input type="button"value="SUBMIT"style="height:40px"onClick="sub();"/></td></A><td><a href=BANK%20OF%20BARODA.HTML><input type="button"value="CANCEL"style="height:40px"></a></td></tr>
    </table>
</center>
</form>
    </BODY>
</HTML>