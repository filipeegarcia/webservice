<?php

require "vendor/autoload.php";

$app = new Slim\App();

$app->get("/",function(){
  echo "Hello World";
});

$app->post("/", function(){
  echo "Hello Post";
});

$app->put("/", function(){
  echo "Hello Put";
});

$app->delete("/", function(){
  echo "Hello Delete";
});

$app->run();

?>
