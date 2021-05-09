<?php
/**
* @author
* @version
* @copyright
*/

namespace app\Controllers;
use CodeIgniter\Controller;

/**
 * Controller class to load view2
 * 
 */
class LoadView2 extends Controller{
    
    /**
     * 
     */
    public function view2($param1 = null, $param2 = null)
    {
        $view2Data = [
            
            "pageTitle"     =>  "Super Duper Title",
            "pageHeading"   =>  "This is Heading from Controller",
            "subjects"      =>  ["HTML","CSS","PHP","MYSQL","MONEY"]  
        ];
        
        echo view("view2.php",$view2Data);
        echo view("view2header.php");
        echo view("view2body.php");
        echo view("view2footer.php");
    }
    
    /**
     * _remap() function is called bydefault when controller is called
     * @param $method string
     * @param $param1 string
     * @param $param2 string
     * 
     */
    public function _remap($method, $param1 = null, $param2 = null)
    {
        if(method_exists($this,$method))
        {
            return $this->$method($param1,$param2);
        }
        else
        {
            return print("Please Restart");
        }
                    
    }

}//end class LoadView2

?>