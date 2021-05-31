<?php 
     require_once "./controllers/BaseController.php";
     require_once "./models/BaseModel.php";
    $requestController = 
    ucfirst($_REQUEST['controller'] ?? 'Controller không tồn tại');
    $controllerName = $requestController . 'Controller';
    
    $actionname = strtolower($_REQUEST['action'] ?? 'index');
    
    require_once "./controllers/$controllerName.php";
    $controllerObj = new $controllerName;
    $controllerObj->$actionname();
?>