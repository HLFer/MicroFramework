<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Controllers\\HomeController' => $baseDir . '/app/controllers/HomeController.php',
    'Core\\Container' => $baseDir . '/core/Container.php',
    'Core\\Route' => $baseDir . '/core/Route.php',
    'PhpGpio\\Gpio' => $vendorDir . '/ronanguilloux/php-gpio/src/PhpGpio/Gpio.php',
    'PhpGpio\\Pi' => $vendorDir . '/ronanguilloux/php-gpio/src/PhpGpio/Pi.php',
    'PhpGpio\\Sensors\\DS18B20' => $vendorDir . '/ronanguilloux/php-gpio/src/PhpGpio/Sensors/DS18B20.php',
    'PhpGpio\\Sensors\\SensorInterface' => $vendorDir . '/ronanguilloux/php-gpio/src/PhpGpio/Sensors/SensorInterface.php',
);
