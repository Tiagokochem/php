<?php

namespace Hcode;

use Rain\Tpl;


class Page{

    private $tpl;

    public function __construct(){

        $config = array(
            "tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]. "/views/",
            "cache_dir"     => $_SERVER["DOCUMENT_ROOT"]. "/views-cache/",
        );

    Tpl::configure( $config );

    $this->$tpl = new Tpl;

    $this->setData($this->options["data"]);

    foreach ($this->options["data"] as $key => $value) {
        $this->tpl->assign($key, $value);
    }

    $this->tpl->draw("header");
    }

    private setData($data = array()){
        foreach ($data as $key => $value) {
            $this->tpl->assign($key, $value);
    }

    public function setTpl($name, $data = array(), $returnHTML = false){
        $this->setData($data);
        return $this->tpl->draw($name, $returnHTML);
        
    }

    public function __destruct(){
        $this->tpl->draw("footer");
    }

    
        
    }



?>