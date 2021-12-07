<?php

namespace Hcode;

use Rain\Tpl;


class Page{

    public function __construct(){

        $config = array(
            "tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]. "/views/",
            "cache_dir"     => $_SERVER["DOCUMENT_ROOT"]. "/views-cache/"
            "debug"         => true, // set to false to improve the speed
        );

    Tpl::configure( $config );

    }

    public function __destruct(){
        
    }

    
        
    }



?>