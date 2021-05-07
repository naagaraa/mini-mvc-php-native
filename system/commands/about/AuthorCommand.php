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
            ->setHelp("\n\nauthor ekajayanagara as miyuki nagara\nstudent infomatic at darma persada\n\n");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf("miyuki nagara student infomatics at darma persada"));
        return Command::SUCCESS;
    }
}
