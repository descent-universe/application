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


use Descent\Contracts\ConfigurationInterface;

abstract class Main extends Infrastructure
{
    public function __construct(array $settings = [])
    {
        parent::__construct($settings);

        $this->main($this->services->make(ConfigurationInterface::class));
        $this->run();
    }

    abstract public function main(ConfigurationInterface $configuration);
}