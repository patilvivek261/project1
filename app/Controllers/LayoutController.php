<?php 

namespace app\Controllers;
use CodeIgniter\Controller;

/**
 * 
 * @author admin
 *
 */
Class LayoutController extends controller
{
    
    /**
     * 
     */
    public function LayoutControllerHome()
    {
        $data1  =   [
                        "pageTitle"     =>"HomePage Title",
                        "pageHeading"   =>"HomePage Heading",
                        "Subjects"      => [                                
                                            ["sub"=>"NodeJS"],
                                            ["sub"=>"MYSQL"],
                                            ["sub"=>"CodeIgniter4"],
                                            ["sub"=>"Laravel"],
                                            ["sub"=>"PHP"],
                                            ["sub"=>"HTML5"],
                                            ["sub"=>"Jquery"],
                                            ["sub"=>"Ajax"],
                        ],
                        "amount"        =>"500",
                        "date"          =>"2021-05-07",
                        
        ];
        
        return view("layoutHome.php",$data1);  
        
    }
    
    public function LayoutControllerAbout(){
        
        $data1  = [
                    "pageTitle"     => "About Page",
                    "pageHeading"   => "About Head",
                    "subjects"      => [                        
                                        ["sub"=>"NodeJS"],
                                        ["sub"=>"MYSQL"],
                                        ["sub"=>"CodeIgniter4"],
                                        ["sub"=>"Laravel"],
                                        ["sub"=>"PHP"],
                                        ["sub"=>"HTML5"],
                                        ["sub"=>"Jquery"],
                                        ["sub"=>"Ajax"],
                    ],
                    "amount"        => "9000",
                    "date"          => "2021-05-07",
                    
        ];
        
        return view("layoutAbout.php",$data1);
    }
    
}


?>