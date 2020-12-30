<?php 
// $query-> insert([
// 'name'=> $_POST['name']
// ],"user");
// header("Locaton :/");

// $query-> insert([
// 	 "description" => "testing 1",
// 	 "complete" => true
// ],"task");
	$query-> insert([
	 "name" => $_POST['name']
],"user");
	 header("Location: /");

