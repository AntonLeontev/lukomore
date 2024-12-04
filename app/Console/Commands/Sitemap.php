<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Psr\Http\Message\UriInterface;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class Sitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        SitemapGenerator::create('https://lukomoredeti.ru')
            ->shouldCrawl(function (UriInterface $url) {
                if (strpos($url->getPath(), '/storage') !== false) {
                    return false;
                }

                if (strpos($url->getPath(), '.pdf') !== false) {
                    return false;
                }

                return true;
            })
            ->hasCrawled(function (Url $url) {
                $url->setLastModificationDate(Carbon::now());

                if ($url->segment(1) === null) {
                    $url->setPriority(1.0);
                }

                if ($url->segment(1) === 'o-nas') {
                    $url->setPriority(0.9);
                }
                if ($url->segment(1) === 'programmy-raspisanie') {
                    $url->setPriority(0.9);
                }
                if ($url->segment(1) === 'stoimost') {
                    $url->setPriority(1.0);
                }
                if ($url->segment(1) === 'usloviya-priyema') {
                    $url->setPriority(0.9);
                }
                if ($url->segment(1) === 'faq') {
                    $url->setPriority(0.9);
                }
                if ($url->segment(1) === 'sale') {
                    $url->setPriority(0.9);
                }
                if ($url->segment(1) === 'menu') {
                    $url->setPriority(0.9);
                }

                if ($url->path() === '/') {
                    return;
                }

                return $url;
            })
            ->writeToFile(public_path('sitemap.xml'));
    }
}
