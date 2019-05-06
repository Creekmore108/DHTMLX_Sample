<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\Resource;

class AllSchedulesController extends Controller
{
    public function index(Request $request){
        $events = new Event();
        $users = new User();
        $resources = new Resource();

        $from = $request->from;
        $to = $request->to;


        return response()->json([
            "data" => $events->get(),
            "collections" => [
                "users" => $users->select("id as key", "name as label")->get(),
                "resources" => $resources->select("id as key", "resource_name as label", "color as color")->get()
            ]
        ]);
    }

    public function store(Request $request){
        $event = new Event();

        $event->text = strip_tags($request->text);
        $event->user_id = $request->user_id;
        $event->resource_id = $request->resource_id;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->save();

        return response()->json([
            "action"=> "inserted",
            "tid" => $event->id
        ]);
    }

    public function update($id, Request $request){
        $event = Event::find($id);

        $event->text = strip_tags($request->text);
        $event->user_id = $request->user_id;
        $event->resource_id = $request->resource_id;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->save();

        return response()->json([
            "action"=> "updated"
        ]);
    }

    public function destroy($id){
        $event = Event::find($id);
        $event->delete();

        return response()->json([
            "action"=> "deleted"
        ]);
    }
}