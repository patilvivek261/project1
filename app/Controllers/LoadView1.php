<?php 
/**
 * @author      Original Author <patilvivek261@gmail.com>
 * @version     1.0
 * @copyright   2021-2022
 */

namespace app\Controllers;
use CodeIgniter\Controller;

/**
 * Controller class to load View1
 */
class LoadView1 extends Controller{
       
    /**
     * 
     */    
    public function view1()
    {
        
        echo view("view1.php");
    }
    
    /**
     * 
     */
    public function defaultfun()
    {
        echo "Please restart";    
    }
    
    /**
     * _remap() function is called defaultly when controller is called
     * @param $method string
     * @param $param1 string
     * @param $param2 string
     * 
     */
    public function _remap($method, $param1 = Null, $param2 = Null)
    {
          
        if(method_exists($this,$method))
        {
            return $this->$method($param1,$param2);
        }
        else
        {
            return $this->defaultfun();
        }
    }
    
}//end class LoadView1 


?>