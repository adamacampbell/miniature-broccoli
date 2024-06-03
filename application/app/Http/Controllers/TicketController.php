<?php

namespace App\Http\Controllers;

use App\Http\Requests\Ticket\CreateRequest;
use App\Http\Requests\Ticket\UpdateRequest;
use App\Models\Ticket;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(
        //
    ) {
        return response([
            'data' => Ticket::all()
        ], 200);
    }

    /**
     * Create a new resource.
     */
    public function create(
        CreateRequest $request
    ) {
        $values = $request->validated();

        $ticket = new Ticket($values);
        $ticket->save();

        return response([
            'data' => $ticket
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(
        Ticket $ticket
    ) {
        return response([
            'data' => $ticket
        ], 200);
    }

    /**
     * Update the specified resource.
     */
    public function update(
        UpdateRequest $request,
        Ticket $ticket
    ) {
        $values = $request->validated();

        $ticket->update($values);

        return response([
            'data' => $ticket
        ], 200);
    }

    /**
     * Delete the specified resource.
     */
    public function delete(
        Ticket $ticket
    ) {
        $ticket->delete();

        return response([
            'message' => 'Ticket deleted',
            'data' => $ticket,
        ], 200);
    }
}
