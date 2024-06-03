<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

abstract class BaseCrudController extends Controller
{
    public Model $model;

    /**
     * Index the given model.
     */
    public function index()
    {
        return response([
            'data' => $this->model::all()
        ], 200);
    }
}
