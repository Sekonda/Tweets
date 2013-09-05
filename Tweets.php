<?php

	// We need codebird to handle the connections
	require_once('codebird.php');

	class Tweets {

		// Private Variables
		private static $consumer_key = "CONSUMER_KEY";
		private static $consumer_secret = "CONSUMER_SECRET";
		private static $access_token = "ACCESS_TOKEN";
		private static $access_token_secret = "ACCESS_TOKEN_SECRET";

		public function get($username, $amount = 5, $rts = 1) {
			
			// Codebird Setup
			\Codebird\Codebird::setConsumerKey(self::$consumer_key, self::$consumer_secret);
			$cb = \Codebird\Codebird::getInstance();
			$cb->setToken(self::$access_token, self::$access_token_secret);
		
			// Define the settings for the call
			 $settings = array('screen_name' => $username, 'count' => $amount, 'rts' => $rts);

			// Make the call to Twitter
			$twitter = (array) $cb->statuses_userTimeline($settings);

			// Build Tweets
			$tweets = array(); 
			for($i = 0; $i < sizeof($twitter)-1; $i++) {
				array_push($tweets,$twitter[$i]->text);
			}

			// Return Tweets
			return $tweets;
		}
	}
?>