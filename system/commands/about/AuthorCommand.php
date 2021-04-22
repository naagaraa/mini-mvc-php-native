<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class AuthorCommand extends Command
{

    protected function configure()
    {
        $this->setName('about:author')
            ->setDescription('lihat author pengembang mini mvc php native project by nagara')
            ->setHelp('Demonstration of custom commands created by Symfony Console component.')
            ->addArgument('username', InputArgument::REQUIRED, 'Pass the username.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf('Hello World!, %s', $input->getArgument('username')));
        return Command::SUCCESS;
    }
}
