<?php
// $config = require "config.php";
require "core/functions.php";
// require "core/App.php";
// require "core/router.php";
// require "core/Request.php";
// require "core/database/Connection.php";
// require "core/database/QueryBuilder.php";
App:: bind("config", require "config.php");
App:: bind("query",new QueryBuilder(
   Connection :: make(App:: get("config")['database'])
  ));