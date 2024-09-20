<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Worker::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $worker = Worker::create([
            'name' => $request->name,
            'email' => $request->email,
            'cpf' => $request->cpf
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Worker::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $worker = Worker::find($id);

        return $worker->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Worker::destroy($id);
    }
}
