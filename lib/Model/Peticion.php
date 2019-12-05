<?php

namespace PLDNaturales\Client\Model;

use \ArrayAccess;
use \PLDNaturales\Client\ObjectSerializer;

class Peticion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $PLDNaturalesModelName = 'Peticion';
    
    protected static $PLDNaturalesTypes = [
        'folio_otorgante' => 'string',
        'tipo_documento' => 'string',
        'numero_documento' => 'string',
        'nombre' => 'string',
        'segundo_nombre' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string'
    ];
    
    protected static $PLDNaturalesFormats = [
        'folio_otorgante' => null,
        'tipo_documento' => null,
        'numero_documento' => null,
        'nombre' => null,
        'segundo_nombre' => null,
        'apellido_paterno' => null,
        'apellido_materno' => null
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
        'folio_otorgante' => 'folioOtorgante',
        'tipo_documento' => 'tipoDocumento',
        'numero_documento' => 'numeroDocumento',
        'nombre' => 'nombre',
        'segundo_nombre' => 'segundoNombre',
        'apellido_paterno' => 'apellidoPaterno',
        'apellido_materno' => 'apellidoMaterno'
    ];
    
    protected static $setters = [
        'folio_otorgante' => 'setFolioOtorgante',
        'tipo_documento' => 'setTipoDocumento',
        'numero_documento' => 'setNumeroDocumento',
        'nombre' => 'setNombre',
        'segundo_nombre' => 'setSegundoNombre',
        'apellido_paterno' => 'setApellidoPaterno',
        'apellido_materno' => 'setApellidoMaterno'
    ];
    
    protected static $getters = [
        'folio_otorgante' => 'getFolioOtorgante',
        'tipo_documento' => 'getTipoDocumento',
        'numero_documento' => 'getNumeroDocumento',
        'nombre' => 'getNombre',
        'segundo_nombre' => 'getSegundoNombre',
        'apellido_paterno' => 'getApellidoPaterno',
        'apellido_materno' => 'getApellidoMaterno'
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
        $this->container['folio_otorgante'] = isset($data['folio_otorgante']) ? $data['folio_otorgante'] : null;
        $this->container['tipo_documento'] = isset($data['tipo_documento']) ? $data['tipo_documento'] : null;
        $this->container['numero_documento'] = isset($data['numero_documento']) ? $data['numero_documento'] : null;
        $this->container['nombre'] = isset($data['nombre']) ? $data['nombre'] : null;
        $this->container['segundo_nombre'] = isset($data['segundo_nombre']) ? $data['segundo_nombre'] : null;
        $this->container['apellido_paterno'] = isset($data['apellido_paterno']) ? $data['apellido_paterno'] : null;
        $this->container['apellido_materno'] = isset($data['apellido_materno']) ? $data['apellido_materno'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tipo_documento'] === null) {
            $invalidProperties[] = "'tipo_documento' can't be null";
        }
        if ((mb_strlen($this->container['tipo_documento']) > 2)) {
            $invalidProperties[] = "invalid value for 'tipo_documento', the character length must be smaller than or equal to 2.";
        }
        if ($this->container['numero_documento'] === null) {
            $invalidProperties[] = "'numero_documento' can't be null";
        }
        if ((mb_strlen($this->container['numero_documento']) > 12)) {
            $invalidProperties[] = "invalid value for 'numero_documento', the character length must be smaller than or equal to 12.";
        }
        if ($this->container['nombre'] === null) {
            $invalidProperties[] = "'nombre' can't be null";
        }
        if ($this->container['apellido_paterno'] === null) {
            $invalidProperties[] = "'apellido_paterno' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFolioOtorgante()
    {
        return $this->container['folio_otorgante'];
    }
    
    public function setFolioOtorgante($folio_otorgante)
    {
        $this->container['folio_otorgante'] = $folio_otorgante;
        return $this;
    }
    
    public function getTipoDocumento()
    {
        return $this->container['tipo_documento'];
    }
    
    public function setTipoDocumento($tipo_documento)
    {
        if ((mb_strlen($tipo_documento) > 2)) {
            throw new \InvalidArgumentException('invalid length for $tipo_documento when calling Peticion., must be smaller than or equal to 2.');
        }
        $this->container['tipo_documento'] = $tipo_documento;
        return $this;
    }
    
    public function getNumeroDocumento()
    {
        return $this->container['numero_documento'];
    }
    
    public function setNumeroDocumento($numero_documento)
    {
        if ((mb_strlen($numero_documento) > 12)) {
            throw new \InvalidArgumentException('invalid length for $numero_documento when calling Peticion., must be smaller than or equal to 12.');
        }
        $this->container['numero_documento'] = $numero_documento;
        return $this;
    }
    
    public function getNombre()
    {
        return $this->container['nombre'];
    }
    
    public function setNombre($nombre)
    {
        $this->container['nombre'] = $nombre;
        return $this;
    }
    
    public function getSegundoNombre()
    {
        return $this->container['segundo_nombre'];
    }
    
    public function setSegundoNombre($segundo_nombre)
    {
        $this->container['segundo_nombre'] = $segundo_nombre;
        return $this;
    }
    
    public function getApellidoPaterno()
    {
        return $this->container['apellido_paterno'];
    }
    
    public function setApellidoPaterno($apellido_paterno)
    {
        $this->container['apellido_paterno'] = $apellido_paterno;
        return $this;
    }
    
    public function getApellidoMaterno()
    {
        return $this->container['apellido_materno'];
    }
    
    public function setApellidoMaterno($apellido_materno)
    {
        $this->container['apellido_materno'] = $apellido_materno;
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
