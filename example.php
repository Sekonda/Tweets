<?php

	// Include getTweets
	require_once("getTweets.php");

	// Setup getTweets with your App API Information
	$getTweets = new getTweets('CONSUMER_KEY', 'CONSUMER_SECRET', 'ACCESS_TOKEN', 'ACCESS_TOKEN_SECRET');
	
	// Get Tweets (default)
	// Count: 5
	// RTs: Enabled (1)
	$tweets = $getTweets->get('Sekonda_');

	// Gets a certain amount of Tweets (10)
	$tweets_count = $getTweets->get('Sekonda_',10);

	// Gets Tweets and includes RTs (1 for enabled, 0 for disabled)
	$tweets_rts = $getTweets->get('Sekonda_',5,1);

?>