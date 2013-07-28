<?php

	// Include Codebird
	require_once('codebird.php');

	class getTweets {

		// Private Variables
		private $consumer_key;
		private $consumer_secret;
		private $access_token;
		private $access_token_secret;

		// Setup the Private Variables
		public function __construct($consumer_key, $consumer_secret, $access_token, $access_token_secret) {
			$this->consumer_key = $consumer_key;
			$this->consumer_secret = $consumer_secret;
			$this->access_token = $access_token;
			$this->access_token_secret = $access_token_secret;
		}
		
		public function get($username, $amount = 5, $rts = 1) {

			// Codebird Setup
			\Codebird\Codebird::setConsumerKey($this->consumer_key, $this->consumer_secret);
			$cb = \Codebird\Codebird::getInstance();
			$cb->setToken($this->access_token, $this->access_token_secret);

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