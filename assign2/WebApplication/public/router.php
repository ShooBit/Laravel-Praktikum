<?php 
include "../config/global_env.php";
//include "../controller/controller.php";
include "../model/project.php";
include "../model/researcher.php";

session_start();

if(isset($_SESSION["root"]) && ($_SESSION["root"]==true)){
switch($_SERVER['REQUEST_URI']){
  case "/projects":
    require_once "../view/projects.html";
    break;
  case "/new_project":
    require_once "../view/new_project.html";
    break;
  case (substr($_SERVER['REQUEST_URI'],0,15)==="/update_project"):
    require_once "../view/update_project.html";
    break;
  case "/model/insert_project.php":
    insertProject();
    header('Location: '.$GLOBALS["webAddress"]."/projects");
    break;
  case "/model/update_project.php":
    updateProject();
    header('Location: '.$GLOBALS["webAddress"]."/projects");
    break;
  case (substr($_SERVER['REQUEST_URI'],0,15)==="/delete_project"):
    deleteProject();
    header('Location: '.$GLOBALS["webAddress"]."/projects");
    break;
  case "/researchers":
    require_once "../view/researchers.html";
    break;
  case "/new_researcher":
    require_once "../view/new_researcher.html";
    break;
  case (substr($_SERVER['REQUEST_URI'],0,18)==="/update_researcher"):
    require_once "../view/update_researcher.html";
    break;
  case "/model/insert_researcher.php":
    insertResearcher();
    header('Location: '.$GLOBALS["webAddress"]."/researchers");
    break;
  case "/model/update_researcher.php":
    updateResearcher();
    header('Location: '.$GLOBALS["webAddress"]."/researchers");
    break;
  case (substr($_SERVER['REQUEST_URI'],0,18)==="/delete_researcher"):
    deleteResearcher();
    header('Location: '.$GLOBALS["webAddress"]."/researchers");
    break;
  case "/overview":
   require_once "../view/overview_root.html";
    break;
  case "/logout":
    session_destroy();
    header('Location: '.$GLOBALS["webAddress"]."/login");
    break;
  default:
    echo "404";
  }
}elseif(isset($_SESSION["researcher"]) && ($_SESSION["researcher"]==true)){
  switch($_SERVER['REQUEST_URI']){
    case "/projects":
      require_once "../view/projects.html";
      break;
    case "/overview":
      require_once "../view/overview_researcher.html";
      break;
    case "/logout":
      session_destroy();
      header('Location: '.$GLOBALS["webAddress"]."/login");
      break;
    case "/update_password":
      require_once("../view/update_password.html");
      break;
    case "/model/update_password.php":
      updatePassword($_POST["password"]);
      header('Location: '.$GLOBALS["webAddress"]."/overview");
      break;
    default:
      echo "404"; 
  }
}

else{
  require_once "../view/login.html";
  if(isset($_POST["loginid"]) && isset($_POST["password"])){
    if($_POST["loginid"]=="root"&&$_POST["password"]="root"){
      $_SESSION['root'] = true;
      header('Location: '.$GLOBALS["webAddress"]."/overview");
    }
    if(checkResearcher($_POST["loginid"],$_POST["password"])){
      $_SESSION['researcher'] = true;
      header('Location: '.$GLOBALS["webAddress"]."/overview");
    }
  } 
}



?>