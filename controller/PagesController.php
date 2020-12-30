<?php  
class PagesController{

	public function home()
	{
		$users= App::get("query")->selectAll('user');
 		view('index',
 	       ["users"=>$users]
);
	}

	public function about()
	{
		view("about");
	}
	public function contact()
	{
		view("contact");

	}
	public function createUser()
	{
		App::get("query")-> insert([
		 "name" => $_POST['name']
		 ],"user");
		 header("Location: /");
	}
}

 ?>