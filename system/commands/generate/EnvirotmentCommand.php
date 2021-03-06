<?php
namespace Console\App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use MiniMvc\System\Console\FileSystem;


class EnvirotmentCommand extends Command
{
    /**
     * method for config console generate:env
     * @author nagara
     * @return file
     */
    protected function configure()
    {
        $this->setName('generate:env')
            ->setDescription('untuk generate env sesuai project name directory secara cepat')
            ->setHelp("author ekajayanagara as miyuki nagara\nstudent infomatic at darma persada\n\nUntuk mengenerate env kamu cukup melakukan command php nagara generate:copyenv\njika kamu ingin melakukan copy seluruh isi file env dengan cepat\n\nphp nagara generate:copyenv\n\n");
    }

    /**
     * method for execute console generate:copyenv
     * @author nagara
     * @return file
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $generate = EnvirotmentCommand::handle_generate();
        $output->write($generate);
        $output->writeln(sprintf("sukses! env berhasil di generate."));
        return Command::SUCCESS;
    }

    /**
     * method for handle filesystem
     * @author nagara
     * @return file
     */
    static public function handle_generate()
    {
        return FileSystem::create_env();
    }
}
