<?php  
class UserController

{
	public function index()
	{
		return view("index",[
				"users" => App::get("query")->selectAll("users")
		]);
	}
}

 ?>