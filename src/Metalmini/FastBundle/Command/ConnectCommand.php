<?php

namespace Metalmini\FastBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;

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
        $formatter = $this->getHelperSet()->get('formatter');
        $helper = $this->getHelperSet()->get('question');

        $host = $input->getArgument('hostname');
        $em = $this->getContainer()->get('doctrine')->getManager('default');
        $servers = $em->getRepository('MetalminiFastBundle:Server')->findByName($host);

        if (!empty($servers)) {
            $question = new ChoiceQuestion(
                'Which server do you want to connect to (defaults to 0)',
                $servers,
                '0'
            );
            $question->setErrorMessage('Server %s is invalid.');

            $choice = $helper->ask($input, $output, $question);
            $output->writeln('Connecting to: ' . $choice);

            $server = $em->getRepository('MetalminiFastBundle:Server')->findOneBy(array('id' => $choice));

            passthru($server->getConnectstring());
        } else {
            $errorMessages = array('Error!', 'No server was found with that name');
            $formattedBlock = $formatter->formatBlock($errorMessages, 'error');
            $output->writeln($formattedBlock);
        }
    }
}