<?php

namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use MiniMvc\System\Console\FileSystem;

class MakeLibrariesCommand extends Command
{

    /**
     * method for config console buat:libraries
     * @author nagara
     * @return file
     */
    protected function configure()
    {
        $this->setName('buat:libraries')
            ->setDescription('buat new libraries di folder libraries')
            ->setHelp("author ekajayanagara as miyuki nagara\nstudent infomatic at darma persada\n\nUntuk membuat file controller\njika kamu ingin membuat file libraries dengan cepat\n\nphp nagara buat:libraries\n\n")
            ->addArgument('LibrariesName', InputArgument::REQUIRED, 'tuliskan nama librariesnya bruh.');
    }

    /**
     * method for execute console buat:libraries
     * @author nagara
     * @return file
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $controller = MakeLibrariesCommand::handle_generate($input->getArgument('LibrariesName'));
        $output->write($controller);
        return Command::SUCCESS;
    }

    /**
     * method for handle files system
     * @author nagara
     * @return file
     */
    static public function handle_generate($input)
    {
        return FileSystem::create_libraries($input);
    }
}
