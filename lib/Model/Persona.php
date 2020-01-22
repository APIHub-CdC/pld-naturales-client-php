<?php

namespace PLDNaturales\Client\Model;

use \ArrayAccess;
use \PLDNaturales\Client\ObjectSerializer;

class Persona implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $PLDNaturalesModelName = 'Persona';
    
    protected static $PLDNaturalesTypes = [
        'nombre_completo' => 'string',
        'lista' => 'string',
        'cargo_puesto' => 'string',
        'entidad' => 'string',
        'tipo_documento' => 'string',
        'numero_documento' => 'string',
        'ubicacion' => 'string',
        'fecha_inicio' => 'string',
        'fecha_fin' => 'string',
        'resolucion_nombramiento' => 'string'
    ];
    
    protected static $PLDNaturalesFormats = [
        'nombre_completo' => null,
        'lista' => null,
        'cargo_puesto' => null,
        'entidad' => null,
        'tipo_documento' => null,
        'numero_documento' => null,
        'ubicacion' => null,
        'fecha_inicio' => null,
        'fecha_fin' => null,
        'resolucion_nombramiento' => null
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
        'nombre_completo' => 'nombreCompleto',
        'lista' => 'lista',
        'cargo_puesto' => 'cargoPuesto',
        'entidad' => 'entidad',
        'tipo_documento' => 'tipoDocumento',
        'numero_documento' => 'numeroDocumento',
        'ubicacion' => 'ubicacion',
        'fecha_inicio' => 'fechaInicio',
        'fecha_fin' => 'fechaFin',
        'resolucion_nombramiento' => 'resolucionNombramiento'
    ];
    
    protected static $setters = [
        'nombre_completo' => 'setNombreCompleto',
        'lista' => 'setLista',
        'cargo_puesto' => 'setCargoPuesto',
        'entidad' => 'setEntidad',
        'tipo_documento' => 'setTipoDocumento',
        'numero_documento' => 'setNumeroDocumento',
        'ubicacion' => 'setUbicacion',
        'fecha_inicio' => 'setFechaInicio',
        'fecha_fin' => 'setFechaFin',
        'resolucion_nombramiento' => 'setResolucionNombramiento'
    ];
    
    protected static $getters = [
        'nombre_completo' => 'getNombreCompleto',
        'lista' => 'getLista',
        'cargo_puesto' => 'getCargoPuesto',
        'entidad' => 'getEntidad',
        'tipo_documento' => 'getTipoDocumento',
        'numero_documento' => 'getNumeroDocumento',
        'ubicacion' => 'getUbicacion',
        'fecha_inicio' => 'getFechaInicio',
        'fecha_fin' => 'getFechaFin',
        'resolucion_nombramiento' => 'getResolucionNombramiento'
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
    const ORDEN__0 = '0';
    const ORDEN__1 = '1';
    
    
    
    public function getOrdenAllowableValues()
    {
        return [
            self::ORDEN__0,
            self::ORDEN__1,
        ];
    }
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['nombre_completo'] = isset($data['nombre_completo']) ? $data['nombre_completo'] : null;
        $this->container['lista'] = isset($data['lista']) ? $data['lista'] : null;
        $this->container['cargo_puesto'] = isset($data['cargo_puesto']) ? $data['cargo_puesto'] : null;
        $this->container['entidad'] = isset($data['entidad']) ? $data['entidad'] : null;
        $this->container['tipo_documento'] = isset($data['tipo_documento']) ? $data['tipo_documento'] : null;
        $this->container['numero_documento'] = isset($data['numero_documento']) ? $data['numero_documento'] : null;
        $this->container['ubicacion'] = isset($data['ubicacion']) ? $data['ubicacion'] : null;
        $this->container['fecha_inicio'] = isset($data['fecha_inicio']) ? $data['fecha_inicio'] : null;
        $this->container['fecha_fin'] = isset($data['fecha_fin']) ? $data['fecha_fin'] : null;
        $this->container['resolucion_nombramiento'] = isset($data['resolucion_nombramiento']) ? $data['resolucion_nombramiento'] : null;
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
    
    public function getNombreCompleto()
    {
        return $this->container['nombre_completo'];
    }
    
    public function setNombreCompleto($nombre_completo)
    {
        $this->container['nombre_completo'] = $nombre_completo;
        return $this;
    }
    
    public function getLista()
    {
        return $this->container['lista'];
    }
    
    public function setLista($lista)
    {
        $this->container['lista'] = $lista;
        return $this;
    }
    
    
    public function getCargoPuesto()
    {
        return $this->container['cargo_puesto'];
    }
    
    public function setCargoPuesto($cargo_puesto)
    {
        $this->container['cargo_puesto'] = $cargo_puesto;
        return $this;
    }
    
    public function getEntidad()
    {
        return $this->container['entidad'];
    }
    
    public function setEntidad($entidad)
    {
        $this->container['entidad'] = $entidad;
        return $this;
    }
    
    
    public function getTipoDocumento()
    {
        return $this->container['tipo_documento'];
    }
    
    public function setTipoDocumento($tipo_documento)
    {
        $this->container['tipo_documento'] = $tipo_documento;
        return $this;
    }
    
    public function getNumeroDocumento()
    {
        return $this->container['numero_documento'];
    }
    
    public function setNumeroDocumento($numero_documento)
    {
        $this->container['numero_documento'] = $numero_documento;
        return $this;
    }
    
    public function getUbicacion()
    {
        return $this->container['ubicacion'];
    }
    
    public function setUbicacion($ubicacion)
    {
        $this->container['ubicacion'] = $ubicacion;
        return $this;
    }
    
    public function getFechaInicio()
    {
        return $this->container['fecha_inicio'];
    }
    
    public function setFechaInicio($fecha_inicio)
    {
        $this->container['fecha_inicio'] = $fecha_inicio;
        return $this;
    }
    
    public function getFechaFin()
    {
        return $this->container['fecha_fin'];
    }
    
    public function setFechaFin($fecha_fin)
    {
        $this->container['fecha_fin'] = $fecha_fin;
        return $this;
    }
    
    public function getResolucionNombramiento()
    {
        return $this->container['resolucion_nombramiento'];
    }

    public function setResolucionNombramiento($resolucion_nombramiento)
    {
        $this->container['resolucion_nombramiento'] = $resolucion_nombramiento;

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
