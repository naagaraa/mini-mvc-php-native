<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use MiniMvc\System\Console\FileSystem;

class MakeModelsCommand extends Command
{

    protected function configure()
    {
        $this->setName('buat:models')
            ->setDescription('buat new file models di folder models')
            ->setHelp("author ekajayanagara as miyuki nagara\nstudent infomatic at darma persada\n\nUntuk membuat file models\njika kamu ingin membuat file models dengan cepat\n\nphp nagara buat:models\n\n")
            ->addArgument('ModelName', InputArgument::REQUIRED, 'tuliskan nama modelnya bruh.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $models = MakeModelsCommand::handle_generate($input->getArgument('ModelName'));
        $output->write($models);
        return Command::SUCCESS;
    }

    static public function handle_generate($input)
    {
        return FileSystem::create_models($input);
    }
}
