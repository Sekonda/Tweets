# Tweets

Looking to just get tweets from a person? **This is exactly what you want.**

Tweets (formally getTweets) was inspired because Twitter updated their API and essentially broke quite a few sites that had Twitter-related stuff. Or atleast for people who just wanted to get their own tweets. 

I found the [Codebird Library](https://github.com/mynetx/codebird-php) and ran with it. This will get you exactly what you want if you're just looking to get the tweets of your (or another persons) account for your website or application.

## Example Usuage 

Below is some of the options for *Tweets*. All tweets are returned in an array. 

You only need to include the Tweets.php file (it pulls in corebird for you).

```php
require_once('Tweets.php');
```


### Default Settings

The default settings will return 5 Tweets and include Retweets.

```php
$tweets = Tweets::get('Sekonda_');
```

### Specific Count

This will return 10 Tweets and include Retweets.

```php
$tweets = Tweets::get('Sekonda_',10);
```

### Retweets

This will return 10 Tweets and exclude Retweets. Retweets are included by default.

* 0 - Retweets Excluded
* 1 - Retweets Included

```php
$tweets = Tweets::get('Sekonda_',10,0);
```

## Final Stuff

If you like this, awesome.  I'm [@Sekonda_](http://twitter.com/Sekonda_) on Twitter ;)
