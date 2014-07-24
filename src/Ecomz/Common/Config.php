<?php
namespace Ecomz\Common;

class Config
{
    private $configuration;
    public function __construct($path, $name)
    {
        $path = $path.$name;
        if (!file_exists($path))    
            throw new \Exception("No [{$name}] configuration  ");

        $this->configuration = parse_ini_file($path,true);
        if (!$this->configuration)
            throw new \Exception("[{$name}] configuration has problems");
    }

    public function get($propertyName)
    {
        return (array_key_exists($propertyName, $this->configuration))
            ?$this->configuration[$propertyName]
            :null;
    }
}
