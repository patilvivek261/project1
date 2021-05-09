<?php 
/**
 * This is to test parser in CodeIgniter4
 */

namespace app\Controllers;
use CodeIgniter\Controller;
//use Config\Services;

/**
 * 
 */
class ParserControllerView1 extends Controller{
    
    public $parserObj;
    
    public function __construct(){
        
        $this->parserObj = \Config\Services::parser();
    }
    
    public function loadParserView1()
    {
                
        $data1 = [
            "page_title"    =>  "This is a page1",
            "page_heading"  =>  "Welcome to Page1 Parser",
            "subjects"      =>  [                
                                ["sub" => "HTML5"],
                                ["sub" => "PHP"],
                                ["sub" => "Java Script"],
                                ["sub" => "CodeIgniter4"],
              ],
            
            "price"        => "300",
            "dateStart"     => date("Y-M-d")
            
        ];  
        
        $this->parserObj->setData($data1);
        return $this->parserObj->render("parserView1.php");
    
            
    }
    
    public function _remap($method,$param1=Null,$param2=Null) {
        
        if(method_exists($this, $method))
        {
            return $this->$method($param1,$param2);    
        }
        else 
        {
            echo "Please Restart";
        }
            
        
    }
    
}

?>