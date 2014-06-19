<?php

namespace PharOut\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

class Build extends base {

    protected $name = 'build';
    protected $description = 'Description';
    protected $help = <<<EOT

EOT;

    protected function getOptions()
    {
        // array of InputOption class
        return array(
        );
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }
}