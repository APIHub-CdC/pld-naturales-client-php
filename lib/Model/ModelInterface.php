<?php

namespace PLDNaturales\Client\Model;

interface ModelInterface
{
    
    public function getModelName();
    
    public static function PLDNaturalesTypes();
    
    public static function PLDNaturalesFormats();
    
    public static function attributeMap();
    
    public static function setters();
    
    public static function getters();
 
}
