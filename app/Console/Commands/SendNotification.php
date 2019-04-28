<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\SendNotification as SendNotif;

class SendNotification extends Command
{
    protected $signature = 'send:notification {message}';

    protected $description = 'Send notification';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        event(new SendNotif($this->argument('message')));
    }
}
