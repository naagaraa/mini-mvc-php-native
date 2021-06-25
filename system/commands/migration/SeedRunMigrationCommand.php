<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use MiniMvc\System\Console\FileSystem;

class SeedRunMigrationCommand extends Command
{

     /**
     * method for config console migrate:seedrun
     * @author nagara
     * @return help
     */
    protected function configure()
    {
        $this->setName('migrate:seedrun')
            ->setDescription('run seeder')
            ->setHelp("author ekajayanagara as miyuki nagara\nstudent infomatic at darma persada\n\nUntuk membuat file controller\njika kamu ingin membuat file controller dengan cepat\n\nphp nagara buat:migration\n\n");
            // ->addArgument('seeder_name', InputArgument::REQUIRED, 'tuliskan nama seedernya bruh.');
    }

     /**
     * method for execute console migrate:seedrun
     * @author nagara
     * @return help
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $cmd = dirname(__DIR__, 3) . "/vendor/bin/phinx";
        $basepath = "apps/config/migrations.php";
        $output->writeln("run seed migration data table");
        $output->writeln(exec($cmd . " seed:run --configuration=". $basepath));
        return Command::SUCCESS;
    }
}
