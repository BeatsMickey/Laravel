<?php

namespace App\Jobs;

use App\Services\XMLParseService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NewsParsing implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $link;
    private $category;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($link, $category)
    {
        $this->link = $link;
        $this->category = $category;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(XMLParseService $parser)
    {
        $parser->saveNews($this->link, $this->category);
    }
}
