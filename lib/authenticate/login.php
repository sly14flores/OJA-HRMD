<?php
if (session_status() == PHP_SESSION_NONE) 
{
	session_start();
}

if (!isset($_POST['module']))
{
	echo 'Dont link on this url directly.';
	die();
}


// initialize DB connection
include("../../essential/connection.php");
require_once('../../essential/errorDescription.php');

switch ($_POST['module']) 
{


case 'renderLogin':
	renderLogin();
	break;

case 'logMeIn':
	logMeIn();
	break;

case 'logMeOut':
	logMeOut();
	break;

case 'renderRegister':
	renderRegister();
	break;

case 'registerMe':
	registerMe();
	break;

default:
	echo "Module is Null.";
	die();
	break;

}

// what:    Check if username and password exist
// 			Called by loginScript.js(logIn)
// return:  Redirect to home.php if valid usename and password
// 			growl if not valid user
function logMeIn()
{
	global $DB_HOST, $DB_USER,$DB_PASS, $DB_SCHEMA;
	$con=mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_SCHEMA);

	$username = stripslashes($_POST['userName']);
	$password = stripslashes($_POST['userPassword']);
	$username = mysqli_real_escape_string($con,$username);
	$password = mysqli_real_escape_string($con,$password);


	$sql="SELECT username, fname, lname, email, activate FROM security_user WHERE email='".$username."'  AND password= '".sha1($password . getSalt($username))."'  ";
	$query = mysqli_query($con,$sql);
	//$rows = mysqli_num_rows($query);
	if (mysqli_num_rows($query)>0)
	{
		$result=mysqli_fetch_array($query);
		if ($result['activate']==0)
		{
			echo "Account need to be activated first before logging in. Login Failed.";
			die();
		}
		$_SESSION['username']=$username;
		$_SESSION['name']=$result['fname'] ." ".$result['lname'];
		// $_SESSION['email']=$result['email'];
		// mysqli_close($con);
		echo true;
	}
	elseif(mysqli_num_rows($query)==0)
	{
		echo "Invalid username or password.";
	}
	else
	{
		echo mysqli_connect_error($con);
	}

	mysqli_close($con);

	}

function getSalt($username)
{
	global $DB_HOST, $DB_USER,$DB_PASS, $DB_SCHEMA;
	$con=mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_SCHEMA);

	$sql="SELECT salt_key FROM security_user WHERE email='".$username."'  ";
	$query = mysqli_query($con,$sql);
	if (mysqli_num_rows($query)>0)
	{
		$result=mysqli_fetch_array($query);
		$return= $result['salt_key'];
	}
	else
	{
		$return= "error";
	}
	mysqli_close($con);
	return $return;
}




// what:    Logout current logged user
// 			Called by loginScript.js(logOut)
// return:
function logMeOut()
{
	session_destroy();
}

function renderLogin()
{
	echo '
		<!--<div class="panel-body">-->
			<form role="form" id="formLogin">
				<div class="form-group">
					<div class="icon-addon addon-md">
			            <input type="text" placeholder="email address" class="form-control" id="loginTxtUsername" required>
			            <label for="email" class="fa fa-envelope" rel="tooltip" title="email"></label>
			        </div>
				</div>
				
				<div class="form-group">
					<div class="icon-addon addon-md">
						<input id="loginTxtPassword" type="password" name="pass" class="form-control input-md" placeholder="Password" required>
						<label for="email" class="fa fa-lock" rel="tooltip" title="email"></label>
						<button id="btnLogin" class="btn btn-primary btn-md btn-block pull-right" name="login" style="width:90px;" >Sign In</button>
					</div>
				</div>
			</form>
		<!--</div>-->

		


		';




}

function renderRegister()
{
		echo '
					<div class="panel-body">
				    	<form id="modalRegister" role="form">
					    	<div class="row">
					    	 	<div class="col-md-12">
						    	 	<div class="form-group">
							    		<div class="icon-addon addon-md">
											<input id="email" type="email" name="email" class="form-control input-md" placeholder="Email Address" required>
											<label for="email" class="fa fa-envelope" rel="tooltip" title="email"></label>
										</div>
						    		</div>
					    		</div>
				    		</div>
				    		<div class="row">
					    		<div class="col-md-6">
					    	 		<div class="form-group">
					    	 			<div class="icon-addon addon-md">
											<input id="first_name" type="text" name="first_name" class="form-control input-md" placeholder="First Name" required>
											<label for="first_name" class="glyphicon glyphicon-user" rel="tooltip" title="first_name"></label>
										</div>
	    	 						</div>
	    	 					</div>
	    	 					<div class="col-md-6">
							    	<div class="form-group">
							    		<div class="icon-addon addon-md">
											<input id="last_name" type="text" name="last_name" class="form-control input-md" placeholder="Last Name" required>
											<label for="last_name" class="glyphicon glyphicon-user" rel="tooltip" title="last_name"></label>
										</div>
							    	</div>
						    	</div>
	    	 				</div>

	    	 				<div class="form-group">
	    	 					<div class="icon-addon addon-md">
									<input id="mobile" type="text" name="mobile" class="form-control input-md" placeholder="Mobile No." required>
									<label for="mobile" class="glyphicon glyphicon-phone" rel="tooltip" title="mobile"></label>
								</div>
					    	</div>

					    	

				    	 	<div class="row">
						    	<div class="col-md-6">
							    	<div class="form-group">
							    		<div class="icon-addon addon-md">
											<input id="password" type="password" name="password" class="form-control input-md" placeholder="Password" required>
											<label for="password" class="fa fa-lock" rel="tooltip" title="password"></label>
										</div>
							    	</div>
							    </div>
							    <div class="col-md-6">
							    	<div class="form-group">
							    		<div class="icon-addon addon-md">
											<input id="password_confirmation" type="password" name="password_confirmation" class="form-control input-md" placeholder="Confirm Password" required>
											<label for="password_confirmation" class="fa fa-lock" rel="tooltip" title="password_confirmation"></label>
										</div>
							    	</div>
						    	</div>
				    	 	</div>
				    	 	<input id="btnRegister" type="submit" value="Register" class="btn btn-success btn-block pull-right" style="width:90px;">
				    	</form>
					</div>';
}


function registerMe()
{
	global $DB_HOST, $DB_USER,$DB_PASS, $DB_SCHEMA;
	$con = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_SCHEMA);

	/* check connection */
	if (mysqli_connect_errno()) 
	{
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
	$sql="INSERT INTO security_user (email,fname,lname,password,mobileno,security_group_fk,salt_key,activation_url) VALUES (?,?,?,?,?,'SG0003',?,?)";

	if ($stmt = $con->prepare($sql))
	{
		$pass = $_POST['password'];
		$salt = uniqid('', true);
		$hash = sha1($pass . $salt);
		$activateurl=md5(uniqid('', true));
		$stmt->bind_param("sssssss", $_POST['emailAdd'], $_POST['fname'], $_POST['lname'], $hash, $_POST['mobileNo'], $salt,$activateurl);
		if($stmt->execute())
		{
			echo true;
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: PGLU Human Resource Management Division' . "\r\n";
			if (!mail($_POST['emailAdd'],"PGLU Online Application",emailTable(strtoupper($_POST['fname'])." ".strtoupper($_POST['lname']),$activateurl),$headers))
			{
				echo "Activation email not send. Please notify administrator.";
			}
		}
		else
		{
			echo errorDescription($con->error);
		}

		// if ($errorDesc!='')
		// {
		// 	echo errorDescription($errorDesc);
			// die();

		// }
		$stmt->close();

	}
	else
	{
		echo "Registration fail. Contact system admin.<br>";
		echo $sql;
	}
	$con->close();

}

function emailTable($accountName,$activateLink)
{

	return '<table border="0" style="margin:auto;
		width:500px; font-family:arial;">
		<tr>
			<th style="background-color:#054a75; margin:0;
		color:#fff;
		padding:16px 14px;
		letter-spacing:1.2px;"><h1 style="font-size:16px;
		font-family:arial;">PGLU Online Job Application</h1></th>
		</tr>
		<tr>
			<td style="font-family:arial; border-left: 1px solid #e6e5e3;
		border-right: 1px solid #e6e5e3;
		border-top: none;
		padding: 10px 30px 5px;
		color: #333;"><p>Dear '.$accountName.',</p></td>
		</tr>
		<tr>
			<td style="font-family:arial; border-left: 1px solid #e6e5e3;
		border-right: 1px solid #e6e5e3;
		border-top: none;
		padding: 10px 30px 5px;
		color: #333;"><p>To complete your Online Registration, please click on the link below:</p></td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #e6e5e3;
    border-right: 1px solid #e6e5e3;
    border-top: none;
    padding: 10px 30px 5px;
    color: #333;"><p><a href="http://10.10.4.52/oja-hrmd/activate.php?activateUrl='.$activateLink.'" style="font-size: 16px;
    display: inline-block;
    text-decoration: none;
    font-weight: bold;
	font-family:arial;
    padding: 12px 22px 13px;
	border-radius:4px;
    color: #fff;
    min-height: 19px;
    background-color: #248806;">Activate your account</a></td>
		</tr>
		<tr>
			<td style="font-family:arial; border-left: 1px solid #e6e5e3;
		border-right: 1px solid #e6e5e3;
		border-top: none;
		padding: 10px 30px 5px;
		color: #333;"><p>If you are unable to validate your account through the link above, you may contact MIS @ 072-6090146.</p></td>
		</tr>
		<tr>
			<td style="font-family:arial; border-left: 1px solid #e6e5e3;
		border-right: 1px solid #e6e5e3;
		border-top: none;
		padding: 10px 30px 5px;
		color: #333;"><p>Note: If you do not confirm your email address, your account creation request will not be able to login. </p></td>
		</tr>
		<tr>
			<td style="font-family:arial; border-left: 1px solid #e6e5e3;
		border-right: 1px solid #e6e5e3;
		border-top: none;
		padding: 10px 30px 5px;
		color: #333;"><p>If you did not sign-up, or believe that you received this in error, please ignore this email.</p></td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #e6e5e3; font-family:arial; border-left: 1px solid #e6e5e3;
		border-right: 1px solid #e6e5e3;
		border-top: none;
		padding: 10px 30px 5px;
		color: #333;"><p style="padding-bottom:40px;">Thank you.<br>
Human Resource Mangement Division</p></td>
		</tr>
	</table>';
}

 ?>


