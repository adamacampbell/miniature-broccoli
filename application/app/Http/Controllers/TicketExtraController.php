<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketExtra\CreateRequest;
use App\Http\Requests\TicketExtra\UpdateRequest;
use App\Models\TicketExtra;

class TicketExtraController extends BaseCrudController
{
    public function __construct()
    {
        $this->model = new TicketExtra();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(
        CreateRequest $request
    ) {
        $values = $request->validated();

        $ticketExtra = new TicketExtra($values);
        $ticketExtra->save();

        return response([
            'data' => $ticketExtra
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(
        TicketExtra $ticketExtra
    ) {
        return response([
            'data' => $ticketExtra
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        UpdateRequest $request,
        TicketExtra $ticketExtra
    ) {
        $values = $request->validated();

        $ticketExtra->update($values);

        return response([
            'data' => $ticketExtra,
        ], 200);
    }

    /**
     * Delete the specified resource.
     */
    public function delete(
        TicketExtra $ticketExtra
    ) {
        $ticketExtra->delete();

        return response([
            'message' => 'TicketExtra deleted',
            'data' => $ticketExtra,
        ], 200);
    }
}
