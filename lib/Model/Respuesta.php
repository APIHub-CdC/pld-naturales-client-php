<?php

namespace PLDNaturales\Client\Model;

use \ArrayAccess;
use \PLDNaturales\Client\ObjectSerializer;

class Respuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $PLDNaturalesModelName = 'Respuesta';
    
    protected static $PLDNaturalesTypes = [
        'folio_consulta_otorgante' => 'string',
        'num_consulta' => 'float',
        'personas' => '\PLDNaturales\Client\Model\Persona[]'
    ];
    
    protected static $PLDNaturalesFormats = [
        'folio_consulta_otorgante' => null,
        'num_consulta' => null,
        'personas' => null
    ];
    
    public static function PLDNaturalesTypes()
    {
        return self::$PLDNaturalesTypes;
    }
    
    public static function PLDNaturalesFormats()
    {
        return self::$PLDNaturalesFormats;
    }
    
    protected static $attributeMap = [
        'folio_consulta_otorgante' => 'folioConsultaOtorgante',
        'num_consulta' => 'numConsulta',
        'personas' => 'personas'
    ];
    
    protected static $setters = [
        'folio_consulta_otorgante' => 'setFolioConsultaOtorgante',
        'num_consulta' => 'setNumConsulta',
        'personas' => 'setPersonas'
    ];
    
    protected static $getters = [
        'folio_consulta_otorgante' => 'getFolioConsultaOtorgante',
        'num_consulta' => 'getNumConsulta',
        'personas' => 'getPersonas'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$PLDNaturalesModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['folio_consulta_otorgante'] = isset($data['folio_consulta_otorgante']) ? $data['folio_consulta_otorgante'] : null;
        $this->container['num_consulta'] = isset($data['num_consulta']) ? $data['num_consulta'] : null;
        $this->container['personas'] = isset($data['personas']) ? $data['personas'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFolioConsultaOtorgante()
    {
        return $this->container['folio_consulta_otorgante'];
    }
    
    public function setFolioConsultaOtorgante($folio_consulta_otorgante)
    {
        $this->container['folio_consulta_otorgante'] = $folio_consulta_otorgante;
        return $this;
    }
    
    public function getNumConsulta()
    {
        return $this->container['num_consulta'];
    }
    
    public function setNumConsulta($num_consulta)
    {
        $this->container['num_consulta'] = $num_consulta;
        return $this;
    }
    
    public function getPersonas()
    {
        return $this->container['personas'];
    }
    
    public function setPersonas($personas)
    {
        $this->container['personas'] = $personas;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
