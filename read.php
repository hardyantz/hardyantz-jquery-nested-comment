<?php
$array[0] = array(
	"comment_id" => 1,
	"comment_content" => "hello world, this is the content",
	"comment_author" =>	"admin",
		"comment_date" => "2014-06-1 08:10:15",
		"imgurl" => "https://pbs.twimg.com/profile_images/378800000598581977/cfd9ce0fe26ef6cd066799008c6c4b42_bigger.jpeg"
);

header('Content-Type: application/json');
echo json_encode($array);