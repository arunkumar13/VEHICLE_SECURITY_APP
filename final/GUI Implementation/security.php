<?php
require_once('functions.php');
secure(2);
require_once('conn.php');
if($_SESSION['type']==1)
header("Location: index.php");
?>
<?php

if(isset($_POST['Submit']))
    {
    $sql="Select cyclekey from registrations where rollno='".$_POST['userid']."' and regno='".$_POST['password']."'";
					$result=mysql_query($sql,$conn) OR die(mysql_error());
                                   if($result and mysql_num_rows($result)>0)
					{
						$row=mysql_fetch_array($result);
						$key=$row['cyclekey'];
					}
                                       // echo $current;
                                       // $text=$current;

                                        $text="The Cycle key for this cycle should be ".$key;

    }

	
?>
<?php require_once('header.php') ?>
<script>

var x;

function blinkBorder(colorA, colorB, element, time){
  x++;
  if(x == 10)
	  return;
  element.style.borderColor = colorB ;
  setTimeout( function(){
    blinkBorder(colorB, colorA, element, time);
    colorB = null;
    colorA = null;
    element = null;
    time = null;
  } , time) ;
}

function validate()
{
	var f=document.form1
	//alert("hi calculation "+calc()+"timing::"+calct()+"problem::"+calcp())
	
	var numReg = /^\d+$/;


if(f.amount.value=="" || !numReg.test(f.amount.value))
	{	alert("Please Enter Amount properly.");
		f.amount.focus()
		x = 0;
		blinkBorder("white","red", f.amount, 500);
		return false;
	}


}
function error(str)
{
	document.getElementById("errorbox").innerHTML=str
}


</script>


<div id="content">
<div id="right"style="background-image: url('images/arun1.png')">
<form name="form1" method="post" onsubmit="return validate()">
<div align="center" class="box" style="color:#006600"><?php if (!isset($text)) $text=""; echo $text ?></div>
<div id="errorbox" class="box" align="center" style="color:#FF0000"></div>

<table width="40%" align="center" border="0" cellpadding="5" cellspacing="5">
    <tr>
        <td colspan="2" align="center">
            <img src="images/sec.jpg" width="200px" height="100px" />
           <!-- <h1>FESTEMBER THE 13th</h1> -->
        </td>
        
    </tr>
    <tr>
        <td colspan="2" align="center"><h2>NIT Trichy</h2></td>

    </tr>
    <tr>
        <td colspan="2" align="center"><h3>Security</h3></td>

    </tr>
    <tr align="center">
<td width="39%" align="center">Roll No. : </td>
<td id="userTbox" width="25%" align="left"><input type="text" name="userid" size="26" /></td>
</tr>
<tr>
<td width="39%" align="center">Cycle Registration No. : </td>
<td id="" width="25%" align="left"><input type="password" name="password" size="26" /></td>
</tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="Submit" value="Check" /><!--<input type="button" value="Check" onclick="validate()"/>--></td>
</tr>
</table>
</form>
</div>
	
<!--<div id="left">
	<div>
			<marquee><img src="images/1.gif" /><br/></marquee>
                        <img src="images/nitt.jpg" />
                        <img src="images/poster.jpg" width="250px" height="200px" />
	</div>
	   
</div>-->

</div>

<?php require_once('footer.php') ?>
</body>
</html>