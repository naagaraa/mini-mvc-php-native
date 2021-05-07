<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class ServerCommand extends Command
{

    protected function configure()
    {
        $this->setName('server:aktif')
            ->setDescription("build in server di 127.0.0.1 port 9000")
            ->setHelp("author ekajayanagara as miyuki nagara\nstudent infomatic at darma persada\n\nMenjalankan build in server PHP pada project\ndengan menulis command php nagara serve aktif\n\nyang berjalan di port 9000 \n\nphp nagara server aktif\n\n");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(exec("php -S 127.0.0.1:9000"));
        return Command::SUCCESS;
    }
}
