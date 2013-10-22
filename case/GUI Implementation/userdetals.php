<?php
require_once('functions.php');
secure(1);
require_once('conn.php');
?>
<?php
require_once('header.php');

?>

<?php

if(isset($_POST['Submit']))
		{
    $val=$_POST['query'];
    
    $sq="Select * from registrations where rollno='".$_SESSION['user']."'";
					$resul=mysql_query($sq,$conn) OR die(mysql_error());
                                        if($resul and mysql_num_rows($resul)>0)
					{
						$row=mysql_fetch_array($resul);
						//$current=$row['amount'];
					}
    if($val==1)
        {
        $text= $_SESSION['user'].' Your cycle registration number is '.$row['regno'];
    }
   else if($val==2)
        {
        $text= $_SESSION['user'].' Your Cycle unique key is '.$row['cyclekey'];
    }
 
}


?>


<div id="content">

<div id="right"style="background-image: url('images/arun1.png')">
    <form name="query" method="post">

        <select id="query" name="query" style="border:solid 1px black;">

						<option value="">User Help Menu</option>
						<option value="1">MY CYCLE REGISTRATION NUMBER</option>
                                                <option value="2">MY CYCLE UNIQUE KEY</option>
              

    </select>
    <input type="submit" name="Submit" value="Show" />
    </form>

    <div align="center" class="box" style="color:#006600"><?php if (!isset($text)) $text=""; echo $text ?></div>

</div>

</div>
<?php require_once('footer.php')?>
</body>

</html>
