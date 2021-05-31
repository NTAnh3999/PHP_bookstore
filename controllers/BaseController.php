<?php 
class BaseController 
{
    protected $viewFolder = 'views';
    protected $modelFolder = 'models';

    public function loadView($path, $data = []) {
        $path = $this->viewFolder . '/'. ucfirst($path);
        require_once $path;
    }

    public function loadModel($path) {
        require_once $this->modelFolder . '/' ."$path.php"; 
    }
    
}

?>