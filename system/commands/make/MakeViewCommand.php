<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use MiniMvc\System\Console\Filesystem;

class MakeViewCommand extends Command
{

    protected function configure()
    {
        $this->setName('buat:view')
            ->setDescription('buat new view di folder view')
            ->setHelp("author ekajayanagara as miyuki nagara\nstudent infomatic at darma persada\n\nUntuk membuat file view\njika kamu ingin membuat file view dengan cepat\n\nphp nagara buat:view\n\n")
            ->addArgument('viewname', InputArgument::REQUIRED, 'tuliskan nama viewnya bruh.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $view = MakeviewCommand::handle_generate($input->getArgument('viewname'));
        $output->write($view);
        return Command::SUCCESS;
    }

    static public function handle_generate($input)
    {
        return Filesystem::create_view($input);
    }
}
