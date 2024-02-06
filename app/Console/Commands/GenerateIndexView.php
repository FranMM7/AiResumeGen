<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateIndexView extends Command
{
    protected $signature = 'generate:index-views';

    protected $description = 'Generate index Blade views for controllers';

    public function handle()
    {
        $controllers = [
            'PersonalDataController',
            'TitlesCertificatesController',
            'ProfessionalHistoryController',
            'ToolsSkillsController',
            // Add other controllers as needed
        ];

        foreach ($controllers as $controller) {
            $this->generateIndexView($controller);
        }

        $this->info('Index views generated successfully!');
    }

    private function generateIndexView($controller)
    {
        $controllerName = lcfirst(str_replace('Controller', '', $controller));
        $viewPath = resource_path('views/' . strtolower($controllerName) . '/index.blade.php');

        // Ensure the directory exists
        File::ensureDirectoryExists(dirname($viewPath));

        if (!File::exists($viewPath)) {
            File::put($viewPath, '<!-- Blade template for ' . $controllerName . ' index -->');
            $this->info("Index view for {$controllerName} created successfully!");
        } else {
            $this->info("Index view for {$controllerName} already exists. Skipping.");
        }
    }
}
