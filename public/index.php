<?php
declare(strict_types=1);


require __DIR__.'/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\FromStringInterface;
use App\Format\BaseFormat;
use App\Format\NamedFormatInterface;

use App\Service\Serializer;
use App\Controller\IndexController;
use App\Container;

print_r("Simple service controller\n\n");

$data = [
    "name" => "John",
    "surname" => "Doe"
];

$serializer = new Serializer(new XML());
$controller =new IndexController($serializer);

$container =new Container();
$container->addService('format.json',function () use($container){
    return new JSON();
},'JSON');
$container->addService('format.xml',function () use($container){
    return new XML();
},'XML');
$container->addService('controller.index',function () use($container){
    return new IndexController($container->getService('serializer'));
},'INDEX');



var_dump($container->loadServices('App\\Service'));
// $formats = [
//     new JSON(),
//     new XML(),
//     new YAML()
// ];
