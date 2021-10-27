<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class UnitTestScenenarioCommand extends Command
{

    /**
     * method for config console migrate:run
     * @author nagara
     */
    protected function configure(): void
    {
        $this->setName('test:cest')
            ->addArgument('suite', InputArgument::REQUIRED, 'what your . suite . yml filename ?')
            ->addArgument('filename', InputArgument::REQUIRED, 'what your filename at directory test with suite config ?')
            ->setDescription("untuk test cest")
            ->setHelp("author ekajayanagara as miyuki nagara\nstudent infomatic at darma persada\n\nMenjalankan build in server PHP pada project\ndengan menulis command php nagara serve aktif\n\nyang berjalan di port 9000 \n\nphp nagara server aktif\n\n");
    }

    /**
     * method for execute console migrate:run
     * @author nagara
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $cmd = dirname(__DIR__, 3) . "/vendor/bin/codecept";
        // $basepath = "codecept";
        $basepath = "tests";

        // get arument
        $suite = $input->getArgument('suite');
        $filename = $input->getArgument('filename');

        $output->writeln("test build");
        $output->writeln(exec($cmd . " generate:cest " . $suite . " " . $filename));
        return Command::SUCCESS;
    }
}
