            ->addArgument('ModelName', InputArgument::REQUIRED, 'tuliskan nama modelnya bruh.');
        $models = MakeModelsCommand::handle_generate($input->getArgument('ModelName'));