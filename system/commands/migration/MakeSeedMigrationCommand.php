<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use MiniMvc\System\Console\FileSystem;

class MakeSeedMigrationCommand extends Command
{

    /**
     * method for config console buat:seed
     * @author nagara
     * @return file
     */
    protected function configure()
    {
        $this->setName('migrate:seed')
            ->setDescription('buat new seed migration di folder database/seed')
            ->setHelp("author ekajayanagara as miyuki nagara\nstudent infomatic at darma persada\n\nUntuk membuat file controller\njika kamu ingin membuat file controller dengan cepat\n\nphp nagara buat:migration\n\n")
            ->addArgument('seeder_name', InputArgument::REQUIRED, 'tuliskan nama seedernya bruh.');
    }

    /**
     * method for execute console buat:seed
     * @author nagara
     * @return file
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $cmd = dirname(__DIR__, 3) . "/vendor/bin/phinx";
        $basepath = "apps/config/migrations.php";
        $output->writeln("buat seed migration data table");
        $output->writeln(exec($cmd . " seed:create " . $input->getArgument('seeder_name') . " --configuration=". $basepath));
        return Command::SUCCESS;
    }
}
