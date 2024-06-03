<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

interface CRUDControllerInterface
{
    public function index(FormRequest $request);
    public function show(FormRequest $request);
    public function create(FormRequest $request);
    public function update(FormRequest $request, Model $model);
    public function delete(FormRequest $request, Model $model);
}
