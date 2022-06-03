<?php
    namespace App\Console\Commands;

    // External Libraries
    use Illuminate\Console\Command;


    final class GenerateSitemap
        extends Command
    {
        protected $signature = 'generate:sitemap';
        protected $description = 'generates a sitemap for search engines to crawl';


        public function handle()
        {
            return 0;
        }
    }
?>