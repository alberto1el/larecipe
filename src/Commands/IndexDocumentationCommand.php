<?php

namespace BinaryTorch\LaRecipe\Commands;

use Illuminate\Console\Command;

class IndexDocumentationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larecipe:index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Index docmentation for fast search functionality.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->line('Reading published versions..');
        $publishedVersions = config('larecipe.versions.published');

        foreach ($publishedVersions as $published) {
            $this->info('Reading index.md for v'.$published['version']);
            // $this->documentationIndex($version);
        }
    }
}
