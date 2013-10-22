<?php
require_once('functions.php');
secure(1);
require_once('conn.php');
if($_SESSION['type']==2)
header("Location: security.php");
?>
<?php require_once('header.php') ?>
<div id="content">

<div id="right" style="font-size:15px; color: green; text-align: center;background-image: url('images/arun1.png')">
    <center><h1 style="color:  maroon"><img src="images/cycle3.png" width="400px" height="100px" /> </h1></center><br/>
    <p>
The software is to register the vehicle and will generate a unique vehicle id and also a card which will have a unique number.</br>
At the gates the second software will be used, where the student will be asked the card and the card number when entered will generate the</br>
unique vehicle id which was given to the student and was imprinted on the cycle. This will validate whether the cycle belongs to that person or not
</p>

<p>
The software is a  boon to the NITT students as it helps them save the time, efforts and money, to find the stolen cycle.
</p>

<br/>

<h3>Process :</h3>
<ol  style=" list-style-type: square">
    <li>As, you have logged-in with your webmail id, webmail password, go to the register tab and fill the registration form.</li>
     <li>Once you click the submit button your cycle will be registered to be used in NITT.</li>
     <li>When you register, a CYCLE REGISTRATION KEY and CYCLE UNIQUE KEY will be generated for you and your cycle.</li>
     <li>This CYCLE REGISTRATION KEY will be required whenever you'll cross the gates with your cycle.</li>
     <li>Without the authentication you'll not be allowed to cross the gates.</li>
</ol>
<br/>
<center>Click <a href="register.php" style="color: blue">Here</a> to Register your CYCLE. <br/> </center>
</div>

<!--   <div id="left">
	<div>
			<marquee><img src="images/1.gif" /><br/></marquee>
                        <img src="images/nitt.jpg" />
                        <img src="images/poster.jpg" width="250px" height="200px" />
	</div>

</div>-->
</div>
<?php
require_once('footer.php');
?>
