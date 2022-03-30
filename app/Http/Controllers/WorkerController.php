<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {

        $workers = Worker::all();

        return view("/list_workers", [
            "workers" => $workers
        ]);
    }

    public function create()
    {
        return view("new_worker");
    }

    public function store(Request $request)
    {
        Worker::create($request->all());

        return redirect("/");
    }

    public function edit($id)
    {
        $worker = Worker::find($id);

        return view("edit_worker", [
            "worker" => $worker
        ]);
    }

    public function update(Request $request)
    {
        $worker = Worker::find($request->id);

        $worker->update($request->all());

        return redirect("/");
    }

    public function search(Request $request)
    {
        $workers = Worker::where("departure", $request->departure)->get();

        return view("show_worker", [
            "workers" => $workers
        ]);

        // echo "<pre>";
        // print_r($workers);
    }

    public function destroy($id)
    {
        Worker::destroy($id);

        return redirect("/");
    }
}
