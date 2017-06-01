<?php namespace MaddHatter\ViewGenerator;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\View\Factory;

class MakeLayoutCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:layout
        {--e|extend= : (optional) The view this view extends}
        {--r|resource : Create resourceful views at this location}
        {--force : Overwrite existing views}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a basic blade view layout.';

    /**
     * @var File
     */
    private $file;

    /**
     * @var Factory
     */
    private $view;

    /**
     * Create a new command instance.
     *
     * @param Filesystem $file
     * @param Factory    $viewFactory
     */
    public function __construct(Filesystem $file, Factory $viewFactory)
    {
        $this->file = $file;
        $this->view = $viewFactory;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $stubsFolder = __DIR__.'/stubs/';
        $viewFolder = resource_path('views');
        $this->info("Coping layouts from {$stubsFolder} to {$viewFolder}");
        $this->file->copyDirectory($stubsFolder, $viewFolder);

        //foreach ($views as $name => $path) {
            //$directory = dirname($path);

            //if ($this->file->exists($path) && ! $this->option('force')) {
                //$this->error("A view already exists at {$path}!");
                //continue;
            //}

            //if ( ! $this->file->exists($directory)) {
                //$this->file->makeDirectory($directory, 0777, true);
            //}

            //$this->file->put($path, $this->view($name));
            //$this->info("Created a new view at {$path}");
        //}
    }
}
