<?php
session_start();
require_once("twitteroauth/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "ydhaoq@gmail.com";
$notweets = 30;
$consumerkey = "gak4XDTmSROJ0Maa8DGDt8CJT";
$consumersecret = "f4UVy2riwK3iu1Nzl7Jgfm3WfFe3GC1DkFF5Oxe5A0o0g57GL4";
$accesstoken = "725519940-CHo44i7SuseSHiUkUGd8lLNbGs6o4VcmAwQo1cS5";
$accesstokensecret = "uVwmTpMTbD3IRILhfsznXMoYdrjWLH0PpFKznLmVbUKWR";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>