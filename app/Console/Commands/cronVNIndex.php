<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Modules\News\Models\News;

use App\Helpers\ChangeText;

use App\Helpers\SimpleHtmlDom;
use DB;
use App\Seo;

class cronVNIndex extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'getNews:NewsTyGia';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $dom = new SimpleHtmlDom();
        $url = "";
        $html = $dom->file_get_html($url);
    }
}
