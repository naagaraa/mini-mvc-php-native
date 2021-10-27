<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class UnitTestBootsrapCommnad extends Command
{

    /**
     * method for config console migrate:run
     * @author nagara
     */
    protected function configure()
    {
        $this->setName('test:bootstrap')
            ->setDescription("untuk test bootstrap")
            ->setHelp("author ekajayanagara as miyuki nagara\nstudent infomatic at darma persada\n\nMenjalankan build in server PHP pada project\ndengan menulis command php nagara serve aktif\n\nyang berjalan di port 9000 \n\nphp nagara server aktif\n\n");
    }

    /**
     * method for execute console migrate:run
     * @author nagara
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $cmd = dirname(__DIR__, 3) . "/vendor/bin/codecept";
        // $basepath = "phinx.php";
        $basepath = "tests";
        $output->writeln("test bootstrap");
        $output->writeln(exec($cmd . " bootstrap "));
        return Command::SUCCESS;
    }
}
