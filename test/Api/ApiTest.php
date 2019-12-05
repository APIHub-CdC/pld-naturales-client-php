<?php

namespace PLDNaturales\Client;

use \PLDNaturales\Client\Configuration;
use \PLDNaturales\Client\ApiException;
use \PLDNaturales\Client\ObjectSerializer;

class ApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $password = getenv('KEY_PASSWORD');
        $this->signer = new \PLDNaturales\Client\Interceptor\KeyHandler(null, null, $password);     

        $events = new \PLDNaturales\Client\Interceptor\MiddlewareEvents($this->signer);
        $handler = \GuzzleHttp\HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));
        $handler->push($events->verify_signature_header('x-signature'));

        $client = new \GuzzleHttp\Client(['handler' => $handler, 'verify' => false]);
        $config = new \PLDNaturales\Client\Configuration();
        $config->setHost('the_url');
        
        $this->apiInstance = new \PLDNaturales\Client\Api\PLDNaturalesApi($client,$config);
    }   
    
    public function testPldNaturales()
    {
        $x_api_key = "your_api_key";
        $username = "your_username";
        $password = "your_password";

        $request = new \PLDNaturales\Client\Model\Peticion();
        
        $request->setFolioOtorgante("123456789");
        $request->setTipoDocumento("1");
        $request->setNumeroDocumento("00000088");
        $request->setNombre("NOMBRE");
        $request->setSegundoNombre("SEGUNDONOMBRE");
        $request->setApellidoPaterno("PATERNO");
        $request->setApellidoMaterno("MATERNO");

        try {
            $result = $this->apiInstance->pld($x_api_key, $username, $password, $request);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ApiTest->pld: ', $e->getMessage(), PHP_EOL;
        }
    }
}
