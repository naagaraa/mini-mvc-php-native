<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use MiniMvc\System\Console\FileSystem;

class MakeViewCommand extends Command
{

    /**
     * method for config console buat:view
     * @author nagara
     * @return file
     */
    protected function configure()
    {
        $this->setName('buat:view')
            ->setDescription('buat new view di folder view')
            ->setHelp("author ekajayanagara as miyuki nagara\nstudent infomatic at darma persada\n\nUntuk membuat file view\njika kamu ingin membuat file view dengan cepat\n\nphp nagara buat:view\n\n")
            ->addArgument('ViewName', InputArgument::REQUIRED, 'tuliskan nama viewnya bruh.');
    }

    /**
     * method for execute console buat:controller
     * @author nagara
     * @return file
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $view = MakeviewCommand::handle_generate($input->getArgument('ViewName'));
        $output->write($view);
        return Command::SUCCESS;
    }

    /**
     * method for handle filesystem
     * @author nagara
     * @return file
     */
    static public function handle_generate($input)
    {
        return FileSystem::create_view($input);
    }
}
