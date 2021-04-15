use MiniMvc\System\Console\Filesystem;
            ->setHelp("author ekajayanagara as miyuki nagara\nstudent infomatic at darma persada\n\nUntuk membuat file models\njika kamu ingin membuat file models dengan cepat\n\nphp nagara buat:models\n\n")
            ->addArgument('modelsname', InputArgument::REQUIRED, 'tuliskan nama modelnya bruh.');
        $models = MakeModelsCommand::handle_generate($input->getArgument('modelsname'));
        $output->write($models);

    static public function handle_generate($input)
    {
        return Filesystem::create_models($input);
    }