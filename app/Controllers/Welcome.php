<?php 

/*
 * @author      Original Author <patilvivek261@gmail.com>
 * @version     1.0
 * @copyright   2021-2030
 * 
 */

namespace app\Controllers;
use CodeIgniter\Controller;
                                    
/**
 * This is controller class invoked to welcome user
 * 
 *  @method void hello()
 *  @method void @selectColor(string $enterColor)
 *  @method void __remap($method, $param1, $param2)
 */
class Welcome extends Controller{
        
    /**
     * 
     */
     public function hello()
     {            
          echo " Hi ";
     }
        
        /**
         * 
         * @param string $enteredColor use to hold color value entered by user
         *
         */
        public function selectColor($enteredColor=Null)
        {
            
            /**
             * Check if user have entered his color or not
             */
            if($enteredColor!=Null) 
            {
                
                echo "You have enterered ".$enteredColor." color";
                
            }
            else
            {
            
                echo "You have enterered No color";
            
            }
            
        }
        
        /**
         * This is default method __remap() used to rout call if 
         * user call to undefined method
         * @param $method String accepts called method Name
         * @param $param1 String accepts 1st parameter
         * @param $param2 String accepts 2nd parameter 
         */
        public function _remap($method, $param1 = Null, $param2 = Null){            
            
            /**
             * This is individual method based approched to check and route 
             * depending upon method availibity  
             *  
                if($method == "hello")
                {
                   return $this->$method($param1,$param2);
                }
                elseif($method == "selectColor")
                {
                    return $this->$method($param1,$param2);    
                }
                else
                {
                    echo "Please Restart the Program";
                    return $this->hello();
                }
            
            */
            
            /**
             * This is using function method exist to check and route 
             * call to existing or default method
             */
            
            if(method_exists($this,$method))
            {
                return $this->$method($param1,$param2);
            }
            else
            {
                return $this->hello();    
            }
 
        }
    
    }//class end



?>