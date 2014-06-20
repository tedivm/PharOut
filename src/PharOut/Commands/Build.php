<?php

namespace PharOut\Commands;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

class Build extends base {

    protected $name = 'build';
    protected $description = 'Description';
    protected $help = <<<EOT
EOT;


    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }
}