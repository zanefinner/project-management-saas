<?php
session_start();
$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);


require_once "lib/Database.php";
require_once "controller/Users.php";
require_once "controller/IndividualProject.php";
require_once "controller/Project.php";
require_once "controller/Home.php";
require_once "model/Projects.php";
require_once "model/Users.php";
require_once "model/IndividualProject.php";
$db = new Database();
$Models=[
  'IndividualProjects'=>new Model\IndividualProject($db),
  'Projects'=>new Model\Projects($db),
  'Users'=>new Model\Users($db)
];
$Controllers=[
  'user'=>  new Controller\Users($Models['Users']),
  'home'=>  new Controller\Home($Models['Users']),
  'Project'=>  new Controller\Project($Models['Projects']),
  'IndividualProject'=>  new Controller\IndividualProject($Models['Projects'])
];

switch ($uri[0]){
  case '';
    $Controllers['home']->index();
  break;
  default:
    $Controllers['home']->error("Location no longer exists");
}
?></body></html>