<?php
require "vendor/autoload.php";
require "core/bootstrap.php";
//www.localhost:8000.com
 Router :: load("route.php")
                 ->direct(Request :: uri(),$_SERVER["REQUEST_METHOD"]);