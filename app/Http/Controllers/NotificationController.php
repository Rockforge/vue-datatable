<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use App\Events\SendNotification;

class NotificationController extends Controller
{


    public function index()
    {
        return view('notification');
    }

    public function test()
    {
        return view('notification-test');
    }

    public function getNotifs()
    {
        $notifications = Notification::orderBy('created_at', 'DESC')->get();
        $count = Notification::count();

        return response()->json([
            'notifications' => $notifications,
            'count' => $count,
        ]);
    }


    public function trigger(Request $request)
    {
        $notif = Notification::create([
            'name' => $request->name,
            'link' => $request->link,
            'remarks' => $request->remarks,
        ]);

        if($notif)
        {
            // Event
            event( new SendNotification( $notif ) );

            return response()->json([
                'status' => 200,
                'message' => 'Successful transaction'
            ]);

        }

        return response()->json([
            'status' => 400,
            'message' => 'Unsuccessful transaction'
        ]);
    }
}
