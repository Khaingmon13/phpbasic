<?php

$users= App::get("query")->selectAll('user');
 view('index',
 	["users"=>$users]
);