#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

use Christmas\Renderer\Console;
use Christmas\Shape\ShapeFactory;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

$application = new Application('echo', '1.0.0');
$application->register('echo')
    ->addArgument('type', InputArgument::OPTIONAL, 'Shape\'s type')
    ->addArgument('size', InputArgument::OPTIONAL, 'Shape\'s size')
    ->setCode(function (InputInterface $input, OutputInterface $output) {

        $size = $input->getArgument('size');
        $type = $input->getArgument('type');

        $shape = ShapeFactory::make($type, $size);
        $renderer = new Console($shape);

        echo $renderer->render();
    });

$application->run();
