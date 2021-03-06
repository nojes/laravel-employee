<?php

namespace nojes\employees\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Employee Position model.
 *
 * @property integer id
 * @property string title
 * @property int created_at
 * @property int updated_at
 */
class Position extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employee_position';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];


}
