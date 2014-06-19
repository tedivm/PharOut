<?php

namespace PharOut\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

abstract class Base extends Command {

    protected $name;
    protected $description;
    protected $help;

    protected function configure()
    {
        $this->setName($this->name)
            ->setDescription($this->description)
            ->setDefinition($this->getOptions())
            ->setHelp($this->help);
    }

    abstract protected function getOptions();
}