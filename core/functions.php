<?php
function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
}

function fetchTasks($pdo)
{
    $statement=$pdo->prepare("SELECT * FROM task");
    $statement->execute();
    return $statement->fetchAll(PDO :: FETCH_OBJ);
}
function view($name ,$data = [])//if user don't input the array automatically null
{
	extract($data);//receive an array and declare as variable
	return require "view/$name.view.php";
}