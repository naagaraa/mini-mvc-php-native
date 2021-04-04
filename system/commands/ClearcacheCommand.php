<?php
namespace Console\App\Commands;
 
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
 
class ClearcacheCommand extends Command
{
    protected function configure()
    {
        $this->setName('clear-cache')
            ->setDescription('Clears the application cache.')
            ->setHelp('Allows you to delete the application cache. Pass the --groups parameter to clear caches of specific groups.')
            ->addOption(
                    'groups',
                    'g',
                    InputOption::VALUE_OPTIONAL,
                    'Pass the comma separated group names if you don\'t want to clear all caches.',
                    ''
                );
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Cache is about to cleared...');
 
        if ($input->getOption('groups'))
        {
            $groups = explode(",", $input->getOption('groups'));
 
            if (is_array($groups) && count($groups))
            {
                foreach ($groups as $group)
                {
                    $output->writeln(sprintf('%s cache is cleared', $group));
                }
            }
        }
        else
        {
            $output->writeln('All caches are cleared.');
        }
 
        $output->writeln('Complete.');
        return Command::SUCCESS;
    }
}