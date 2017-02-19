<?php
/**
 * This file is part of the Descent Framework.
 *
 * (c)2017 Matthias Kaschubowski
 *
 * This code is licensed under the MIT license,
 * a copy of the license is stored at the project root.
 */

namespace Descent\Application;


use Descent\Services\DependencyInjectionContainer;

abstract class Infrastructure
{
    private $services;

    public function __construct(array $settings = [])
    {
        $this->services = new DependencyInjectionContainer();
        $this->bootstrap();
    }

    private function bootstrap()
    {
        
    }

    public function run()
    {

    }
}