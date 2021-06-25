<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class TestCommand extends Command
{

    /**
     * method for config console test:myname
     * @author nagara
     * @return string
     * @param string
     */
    protected function configure()
    {
        $this->setName('test:myname')
            ->setDescription('Menampilkan pesan Hi Developer, { nama lo } ')
            ->setHelp('custom message untuk test:myname -h')
            ->addArgument('yourname', InputArgument::REQUIRED, 'Pass the username.');
    }

    /**
     * method for execute console test:myname
     * @author nagara
     * @return string
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf('Hi Developer!, %s', $input->getArgument('yourname')));
        return Command::SUCCESS;
    }
}
