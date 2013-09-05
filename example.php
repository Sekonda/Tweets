<?php

	// Include getTweets
	require_once("Tweets.php");

	
	// Get Tweets (default)
	// Count: 5
	// RTs: Enabled (1)
	$tweets = Tweets::get('Sekonda_');

	// Gets a certain amount of Tweets (10)
	$tweets_count = Tweets::get('Sekonda_',10);

	// Gets Tweets and includes RTs (1 for enabled, 0 for disabled)
	$tweets_rts = Tweets::get('Sekonda_',5,1);

?>