<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketType\CreateRequest;
use App\Http\Requests\TicketType\UpdateRequest;
use App\Models\TicketType;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(
        //
    ) {
        return response([
            'data' => TicketType::all()
        ], 200);
    }

    /**
     * Create a new resource.
     */
    public function create(
        CreateRequest $request
    ) {
        $values = $request->validated();

        $ticketType = new TicketType($values);
        $ticketType->save();

        return response([
            'data' => $ticketType
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(
        TicketType $ticketType
    ) {
        return response([
            'data' => $ticketType
        ], 200);
    }

    /**
     * Update the specified resource.
     */
    public function update(
        UpdateRequest $request,
        TicketType $ticketType
    ) {
        $values = $request->validated();

        $ticketType->update($values);

        return response([
            'data' => $ticketType
        ], 200);
    }

    /**
     * Delete the specified resource.
     */
    public function delete(
        TicketType $ticketType
    ) {
        $ticketType->delete();

        return response([
            'message' => 'TicketType deleted',
            'data' => $ticketType,
        ], 200);
    }
}
