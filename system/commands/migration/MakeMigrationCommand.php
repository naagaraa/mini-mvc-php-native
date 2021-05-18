<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use MiniMvc\System\Console\FileSystem;

class MakeMigrationCommand extends Command
{

    protected function configure()
    {
        $this->setName('buat:migration')
            ->setDescription('buat new migration di folder database/migration')
            ->setHelp("author ekajayanagara as miyuki nagara\nstudent infomatic at darma persada\n\nUntuk membuat file controller\njika kamu ingin membuat file controller dengan cepat\n\nphp nagara buat:migration\n\n")
            ->addArgument('migration_name', InputArgument::REQUIRED, 'tuliskan nama migrationnyanya bruh.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $migration = MakeMigrationCommand::handle_generate($input->getArgument('migration_name'));
        $output->write($migration);
        return Command::SUCCESS;
    }

    static public function handle_generate($input)
    {
        return FileSystem::create_migration($input);
    }
}
