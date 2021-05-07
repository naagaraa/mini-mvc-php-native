<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use MiniMvc\System\Console\FileSystem;

class MakeControllerCommand extends Command
{

    protected function configure()
    {
        $this->setName('buat:controller')
            ->setDescription('buat new controller di folder controller')
            ->setHelp("author ekajayanagara as miyuki nagara\nstudent infomatic at darma persada\n\nUntuk membuat file controller\njika kamu ingin membuat file controller dengan cepat\n\nphp nagara buat:controller\n\n")
            ->addArgument('ControllerName', InputArgument::REQUIRED, 'tuliskan nama controllernya bruh.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $controller = MakeControllerCommand::handle_generate($input->getArgument('ControllerName'));
        $output->write($controller);
        return Command::SUCCESS;
    }

    static public function handle_generate($input)
    {
        return FileSystem::create_controller($input);
    }
}
