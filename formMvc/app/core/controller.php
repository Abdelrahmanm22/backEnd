<?php
namespace MVC\core;
// use Dcblogdev\PdoWrapper\Database as Database;
class controller{
    public function view($path,$param){
        // echo $path;die;
        extract($param);
        
        require_once(VIEW.$path.".php");
    }
    
}
?>