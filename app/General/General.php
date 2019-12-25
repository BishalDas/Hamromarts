<?php
namespace App\General;
trait General
{
    public $data=[];

     public function data($key,$value=null)
     {
         return $this->data[$key]=$value;
     }
     public function setTitle($backend, $seperator= ': : ',$frontend=null){
         $backend =ucfirst($backend);
         if(!isset($frontend)){
             $frontend.='Business Directory';
         }
         return $frontend . $seperator . $backend;
     }
 }