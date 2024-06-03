<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketExtraType\CreateRequest;
use App\Http\Requests\TicketExtraType\UpdateRequest;
use App\Models\TicketExtraType;
use App\Models\TicketType;

class TicketExtraTypeController extends BaseCrudController
{
    public function __construct()
    {
        $this->model = new TicketExtraType();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(
        CreateRequest $request
    ) {
        $values = $request->validated();

        $ticketExtraType = new TicketExtraType($values);
        $ticketExtraType->save();

        return response([
            'data' => $ticketExtraType
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(
        TicketExtraType $ticketExtraType
    ) {
        return response([
            'data' => $ticketExtraType
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        UpdateRequest $request,
        TicketExtraType $ticketExtraType
    ) {
        $values = $request->validated();

        $ticketExtraType->update($values);

        return response([
            'data' => $ticketExtraType,
        ], 200);
    }

    /**
     * Delete the specified resource.
     */
    public function delete(
        TicketExtraType $ticketExtraType
    ) {
        $ticketExtraType->delete();

        return response([
            'message' => 'TicketType deleted',
            'data' => $ticketExtraType,
        ], 200);
    }
}
