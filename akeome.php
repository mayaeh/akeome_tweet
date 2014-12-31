<?php

if (is_readable ( __DIR__ . '/config.php') ) {
	require_once ( __DIR__ . '/config.php') ;
}
else {
	exit ("config.php を読み込めませんでした。\n") ;
}


$tweet_text = 
$obj = 
$obj_txt = null ;


$tweet_text = "あけましておめでとうございます ヾ(*'-'*)" ; 

$obj = postTweet ($tweet_text) ;

//var_dump ($obj) ;

$obj_txt = $obj -> text ;

// エラーの時等はその内容を出力する
if ( $obj_txt != $tweet_text ) {
	var_dump ($obj) ;
}


exit ;


function postTweet ($tweet_text) {

	$connection = new TwitterOAuth ( 
		CONSUMER_KEY , CONSUMER_SECRET , 
		OAUTH_ACCESS_TOKEN , OAUTH_ACCESS_TOKEN_SECRET 
	) ;

	$content = $connection -> post ( 
		'statuses/update' , 
		array ( 'status' => $tweet_text ) 
	) ;

	return $content ;
}	

?>
