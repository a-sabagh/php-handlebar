<?php

require_once "./vendor/autoload.php";

use Handlebars\Handlebars;
use Handlebars\Loader\FilesystemLoader;

$template_path = __DIR__."/templates/";

$loader = new FilesystemLoader($template_path,["extension" => "tpl"]);
$partial_loader = new FilesystemLoader("{$template_path}/components",["extension"=>"tpl"]);

$handlebars = new Handlebars([
	"loader" => $loader,
	"partials_loader" => $partial_loader,
]);

$collection = [
	"title"=>"Archive",
	"description"=>"this page load all posts in archive Adipisicing culpa pariatur quasi nihil dolores Quo rerum nobis repellat hic accusamus. Repellendus doloribus error",
	"posts" => [
		[
			"id" => 1,
			"title" => "hello world",
			"content" => "this is the first post container",
			"sticky" => true,
		],
		[
			"id" => 2,
			"title" => "array",
			"content" => "array is primitive data structure",
			"sticky" => false,
		]
	]
];

echo $handlebars->render("main",$collection);
