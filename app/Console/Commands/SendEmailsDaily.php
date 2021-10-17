<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\SendMail;

class SendEmailsDaily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:mails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send mails to users daily';

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
     * @return int
     */
    public function handle()
    {
        // logger("hello");
        // https://laravel.com/docs/8.x/scheduling#schedule-frequency-options
        // SendMail::dispatch(\App\Models\Ordere::latest()->first())->delay(now()->addSeconds(60));
        // dump("write send mail logic here");
        return 0;
    }
}
