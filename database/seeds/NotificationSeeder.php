<?php

use Illuminate\Database\Seeder;
use App\Notification;

class NotificationSeeder extends Seeder
{
    public function run()
    {
        factory(Notification::class, 20)->create();
    }
}
