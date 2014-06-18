<?php

namespace Metalmini\FastBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ConnectCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('fast:connect')
            ->setDescription('Connect to a server')
            ->addArgument('hostname', InputArgument::OPTIONAL, '(Or shortname) What server do you want to connect to?');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('hostname');
        if ($name) {
            $text = 'Hello ' . $name;
        } else {
            $text = 'Hello';
        }

        $output->writeln($text);
    }
}