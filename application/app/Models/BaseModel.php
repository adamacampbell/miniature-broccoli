<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
abstract class BaseModel extends Model
{
    //
}
