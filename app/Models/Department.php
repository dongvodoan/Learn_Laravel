<?php

namespace App\Models;

use Eloquent as Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Department
 * @package App\Models
 * @version December 24, 2016, 4:26 pm UTC
 */
class Department extends Model
{
    // use SoftDeletes;

    public $table = 'departments';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'office_number',
        'manager'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'office_number' => 'string',
        'manager' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:3|max:256',
        'office_number' => 'required|regex:/^[0-9\+\-\()\ ]*$/i|max: 15|min:9',
        'manager' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function employees()
    {
        return $this->hasMany(\App\Models\Employee::class);
    }
    
}
