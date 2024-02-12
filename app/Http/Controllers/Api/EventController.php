<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $results = Event::with(['user', 'tags:name'])->get();
        $data = [
            "success" => true,
            "content" => $results
        ];
        return response()->json($data);
    }
    public function show($id)
    {
        $event = Event::with(['user:name', 'tags:name'])->find($id);
        return response()->json([
            "success" => $event ? true : false,
            "payload" => $event ? $event : "Nessun evento corrispondente all'id"
        ]);
    }
}
