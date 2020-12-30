<?php 
 class post{
 	public $title;
 	public $isPublish;
 	public function __construct($title, $isPublish)
 	{
 		$this->title = $title;
 		$this->isPublish = $isPublish;
 	}
 }
 $posts=[
 	new Post("first post",true),
 	new Post("second post",false),
 	new Post("third post",true),
 	new Post("fourth post",false),
 ];

 echo "<pre>";

 $unPublishPosts = array_filter($posts, function($post){
 	return !$post->isPublish;
 });

 $modifiedArray = array_map(function($post){
 	return $post->title;
 }, $posts);
 var_dump($modifiedArray);

 //array filter and array map returns array