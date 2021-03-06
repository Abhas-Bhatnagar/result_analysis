<html>
<head><title>KIET Semester result</title>
<link rel="icon" type="image/jpg" href="logo.jpg"/>
</head>
<body background="my.gif" text="white">

<?php
session_start(); //session start

require_once ('libraries/Google/autoload.php');

//Insert your cient ID and secret 
//You can get it from : https://console.developers.google.com/
$client_id = '50943703972-mj9nrls8h3hmknnv4348vjmdud100iem.apps.googleusercontent.com'; 
$client_secret = 'KvXz22M27O2IsCsevCqEBTeY';
//$redirect_uri = 'http://localhost/glogin/';
$redirect_uri = 'http://vibgyor7.xyz/result/';
//database
$db_username = "root"; //Database Username
$db_password = "abhas123"; //Database Password
$host_name = "localhost"; //Mysql Hostname
$db_name = 'glogindb'; //Database Name

//incase of logout request, just unset the session var
if (isset($_GET['logout'])) {
  unset($_SESSION['access_token']);
}

/************************************************
  Make an API request on behalf of a user. In
  this case we need to have a valid OAuth 2.0
  token for the user, so we need to send them
  through a login flow. To do this we need some
  information from our API console project.
 ************************************************/
$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("email");
$client->addScope("profile");

/************************************************
  When we create the service here, we pass the
  client to it. The client then queries the service
  for the required scopes, and uses that when
  generating the authentication URL later.
 ************************************************/
$service = new Google_Service_Oauth2($client);

/************************************************
  If we have a code back from the OAuth 2.0 flow,
  we need to exchange that with the authenticate()
  function. We store the resultant access token
  bundle in the session, and redirect to ourself.
*/
  
if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
  exit;
}

/************************************************
  If we have an access token, we can make
  requests, else we generate an authentication URL.
 ************************************************/
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
} else {
  $authUrl = $client->createAuthUrl();
}


//Display user info or display login url as per the info we have.
echo '<div style="margin:20px">';
if (isset($authUrl)){ 
	//show login url
	echo '<div align="center">';
	echo '<h1>KIET Semester Result Download</h1>';
	echo '<div>Please Sign in to continue </div>';
                  
	echo '<a class="login" href="' . $authUrl . '"><img src="images/google-button.png" /></a>';
	 echo '</div>';

	
} else {
	
	$user = $service->userinfo->get(); //get user info 
	
	// connect to database
	$mysqli = new mysqli($host_name, $db_username, $db_password, $db_name);
		    if ($mysqli->connect_error) {
			die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
		    }
	
	//check if user exist in database using COUNT
	$result = $mysqli->query("SELECT COUNT(google_id) as usercount FROM google_users WHERE google_id=$user->id");
	$user_count = $result->fetch_object()->usercount; //will return 0 if user doesn't exist
	
	//show user picture
	echo '<img src="'.$user->picture.'" style="float: right;margin-top: 33px;" />';
	
/*			if($user_count) //if user already exist change greeting text to "Welcome Back"
		    {
			echo 'Welcome back '.$user->name.'! [<a href="'.$redirect_uri.'?logout=1">Log Out</a>]';
		    }
			else //else greeting text "Thanks for registering"
*///			{ 
			echo 'Hi '.$user->name.', Thanks for Registering! [<a href="'.$redirect_uri.'?logout=1">Log Out</a>]';
				$statement = $mysqli->prepare("INSERT INTO google_users (google_id, google_name, google_email, google_link, google_picture_link) VALUES (?,?,?,?,?)");
				$statement->bind_param('issss', $user->id,  $user->name, $user->email, $user->link, $user->picture);
				$statement->execute();
				echo $mysqli->error;
				$_SESSION['name'] = $user->name;
				echo "<script> window.location = 'http://vibgyor7.xyz/result/formvalue.php' </script>";
//		    }
	
	//print user details
	echo '<pre>';
	print_r($user);
	echo '</pre>';
	}
echo '</div>';
?>
<iframe
    width="300"
    height="400"
    src="https://console.api.ai/api-client/demo/embedded/bd0f05f7-4a85-455e-bd26-dd3f5872b580">
</iframe>
      
</body>
</html>
