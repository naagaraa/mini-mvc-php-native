<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class RollbackMigrationCommnand extends Command
{

    /**
     * method for config console migrate:rollback
     * @author nagara
     * @return help
     */
    protected function configure()
    {
        $this->setName('migrate:rollback')
            ->setDescription("untuk migration rollback")
            ->setHelp("author ekajayanagara as miyuki nagara\nstudent infomatic at darma persada\n\nMenjalankan build in server PHP pada project\ndengan menulis command php nagara serve aktif\n\nyang berjalan di port 9000 \n\nphp nagara server aktif\n\n");
    }

     /**
     * method for execute console migrate:rollback
     * @author nagara
     * @return help
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $cmd = dirname(__DIR__, 3) . "/vendor/bin/phinx";
        $basepath = "apps/config/migrations.php";
        $output->writeln("rollback migration data table");
        $output->writeln(exec($cmd . " rollback --configuration=". $basepath));
        return Command::SUCCESS;
    }
}
