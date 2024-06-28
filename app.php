#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use App\CsvToJsonCommand;
//use Acme\Console\Command\CsvToJsonCommand; // pore add hoice keno ?


use Symfony\Component\Console\Application;

$application = new Application();

// ... register commands
// ...
$application->add(new CsvToJsonCommand());
$application->run();