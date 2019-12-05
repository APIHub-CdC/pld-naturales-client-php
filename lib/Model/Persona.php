<?php

namespace PLDNaturales\Client\Model;

use \ArrayAccess;
use \PLDNaturales\Client\ObjectSerializer;

class Persona implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $PLDNaturalesModelName = 'Persona';
    
    protected static $PLDNaturalesTypes = [
        'porcentaje' => 'string',
        'id_persona' => 'string',
        'nombre_completo' => 'string',
        'lista' => 'string',
        'estatus' => 'string',
        'cargo_puesto' => 'string',
        'entidad' => 'string',
        'dependencia' => 'string',
        'fec_nacimiento' => 'string',
        'rfc' => 'string',
        'sexo' => 'string',
        'curp' => 'string',
        'tipo_documento' => 'string',
        'numero_documento' => 'string',
        'ubicacion' => 'string',
        'fecha_inicio' => 'string',
        'fecha_fin' => 'string',
        'orden' => 'string'
    ];
    
    protected static $PLDNaturalesFormats = [
        'porcentaje' => null,
        'id_persona' => null,
        'nombre_completo' => null,
        'lista' => null,
        'estatus' => null,
        'cargo_puesto' => null,
        'entidad' => null,
        'dependencia' => null,
        'fec_nacimiento' => null,
        'rfc' => null,
        'sexo' => null,
        'curp' => null,
        'tipo_documento' => null,
        'numero_documento' => null,
        'ubicacion' => null,
        'fecha_inicio' => null,
        'fecha_fin' => null,
        'orden' => null
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
        'porcentaje' => 'porcentaje',
        'id_persona' => 'idPersona',
        'nombre_completo' => 'nombreCompleto',
        'lista' => 'lista',
        'estatus' => 'estatus',
        'cargo_puesto' => 'cargoPuesto',
        'entidad' => 'entidad',
        'dependencia' => 'dependencia',
        'fec_nacimiento' => 'fecNacimiento',
        'rfc' => 'rfc',
        'sexo' => 'sexo',
        'curp' => 'curp',
        'tipo_documento' => 'tipoDocumento',
        'numero_documento' => 'numeroDocumento',
        'ubicacion' => 'ubicacion',
        'fecha_inicio' => 'fechaInicio',
        'fecha_fin' => 'fechaFin',
        'orden' => 'orden'
    ];
    
    protected static $setters = [
        'porcentaje' => 'setPorcentaje',
        'id_persona' => 'setIdPersona',
        'nombre_completo' => 'setNombreCompleto',
        'lista' => 'setLista',
        'estatus' => 'setEstatus',
        'cargo_puesto' => 'setCargoPuesto',
        'entidad' => 'setEntidad',
        'dependencia' => 'setDependencia',
        'fec_nacimiento' => 'setFecNacimiento',
        'rfc' => 'setRfc',
        'sexo' => 'setSexo',
        'curp' => 'setCurp',
        'tipo_documento' => 'setTipoDocumento',
        'numero_documento' => 'setNumeroDocumento',
        'ubicacion' => 'setUbicacion',
        'fecha_inicio' => 'setFechaInicio',
        'fecha_fin' => 'setFechaFin',
        'orden' => 'setOrden'
    ];
    
    protected static $getters = [
        'porcentaje' => 'getPorcentaje',
        'id_persona' => 'getIdPersona',
        'nombre_completo' => 'getNombreCompleto',
        'lista' => 'getLista',
        'estatus' => 'getEstatus',
        'cargo_puesto' => 'getCargoPuesto',
        'entidad' => 'getEntidad',
        'dependencia' => 'getDependencia',
        'fec_nacimiento' => 'getFecNacimiento',
        'rfc' => 'getRfc',
        'sexo' => 'getSexo',
        'curp' => 'getCurp',
        'tipo_documento' => 'getTipoDocumento',
        'numero_documento' => 'getNumeroDocumento',
        'ubicacion' => 'getUbicacion',
        'fecha_inicio' => 'getFechaInicio',
        'fecha_fin' => 'getFechaFin',
        'orden' => 'getOrden'
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
        $this->container['porcentaje'] = isset($data['porcentaje']) ? $data['porcentaje'] : null;
        $this->container['id_persona'] = isset($data['id_persona']) ? $data['id_persona'] : null;
        $this->container['nombre_completo'] = isset($data['nombre_completo']) ? $data['nombre_completo'] : null;
        $this->container['lista'] = isset($data['lista']) ? $data['lista'] : null;
        $this->container['estatus'] = isset($data['estatus']) ? $data['estatus'] : null;
        $this->container['cargo_puesto'] = isset($data['cargo_puesto']) ? $data['cargo_puesto'] : null;
        $this->container['entidad'] = isset($data['entidad']) ? $data['entidad'] : null;
        $this->container['dependencia'] = isset($data['dependencia']) ? $data['dependencia'] : null;
        $this->container['fec_nacimiento'] = isset($data['fec_nacimiento']) ? $data['fec_nacimiento'] : null;
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['sexo'] = isset($data['sexo']) ? $data['sexo'] : null;
        $this->container['curp'] = isset($data['curp']) ? $data['curp'] : null;
        $this->container['tipo_documento'] = isset($data['tipo_documento']) ? $data['tipo_documento'] : null;
        $this->container['numero_documento'] = isset($data['numero_documento']) ? $data['numero_documento'] : null;
        $this->container['ubicacion'] = isset($data['ubicacion']) ? $data['ubicacion'] : null;
        $this->container['fecha_inicio'] = isset($data['fecha_inicio']) ? $data['fecha_inicio'] : null;
        $this->container['fecha_fin'] = isset($data['fecha_fin']) ? $data['fecha_fin'] : null;
        $this->container['orden'] = isset($data['orden']) ? $data['orden'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getOrdenAllowableValues();
        if (!is_null($this->container['orden']) && !in_array($this->container['orden'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'orden', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getPorcentaje()
    {
        return $this->container['porcentaje'];
    }
    
    public function setPorcentaje($porcentaje)
    {
        $this->container['porcentaje'] = $porcentaje;
        return $this;
    }
    
    public function getIdPersona()
    {
        return $this->container['id_persona'];
    }
    
    public function setIdPersona($id_persona)
    {
        $this->container['id_persona'] = $id_persona;
        return $this;
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
    
    public function getEstatus()
    {
        return $this->container['estatus'];
    }
    
    public function setEstatus($estatus)
    {
        $this->container['estatus'] = $estatus;
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
    
    public function getDependencia()
    {
        return $this->container['dependencia'];
    }
    
    public function setDependencia($dependencia)
    {
        $this->container['dependencia'] = $dependencia;
        return $this;
    }
    
    public function getFecNacimiento()
    {
        return $this->container['fec_nacimiento'];
    }
    
    public function setFecNacimiento($fec_nacimiento)
    {
        $this->container['fec_nacimiento'] = $fec_nacimiento;
        return $this;
    }
    
    public function getRfc()
    {
        return $this->container['rfc'];
    }
    
    public function setRfc($rfc)
    {
        $this->container['rfc'] = $rfc;
        return $this;
    }
    
    public function getSexo()
    {
        return $this->container['sexo'];
    }
    
    public function setSexo($sexo)
    {
        $this->container['sexo'] = $sexo;
        return $this;
    }
    
    public function getCurp()
    {
        return $this->container['curp'];
    }
    
    public function setCurp($curp)
    {
        $this->container['curp'] = $curp;
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
    
    public function getOrden()
    {
        return $this->container['orden'];
    }
    
    public function setOrden($orden)
    {
        $allowedValues = $this->getOrdenAllowableValues();
        if (!is_null($orden) && !in_array($orden, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'orden', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['orden'] = $orden;
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
