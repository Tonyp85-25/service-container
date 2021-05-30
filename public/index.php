<?php
declare(strict_types=1);
use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\FromStringInterface;
use App\Format\BaseFormat;
use App\Format\NamedFormatInterface;

use App\Service\Serializer;
use App\Controller\IndexController;

use App\Kernel;

require __DIR__.'/../vendor/autoload.php';



//print_r("Annotations\n\n");

 $kernel =(new Kernel())->boot();
 $kernel->handleRequest();
//$container = $kernel->getContainer();



// $formats = [
//     new JSON(),
//     new XML(),
//     new YAML()
// ];
