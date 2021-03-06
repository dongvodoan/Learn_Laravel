<?php

namespace App\Models;

use Eloquent as Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employee
 * @package App\Models
 * @version December 24, 2016, 4:31 pm UTC
 */
class Employee extends Model
{
    // use SoftDeletes;

    public $table = 'employees';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'department_id',
        'name',
        'job_title',
        'phone',
        'email',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'department_id' => 'integer',
        'name' => 'string',
        'job_title' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|regex:/^[A-Za-z \t]*\p{L}+/i|min:3|max:100',
        'job_title' => 'required|min:3|max:100',
        'phone' => 'required|regex:/^[0-9\+\-\()\ ]*$/i|max: 15|min:9',
        'email' => 'required|email',
        'image' => 'mimes:jpeg,jpg,png|max:2048',
        'department' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function department()
    {
        return $this->belongsTo(\App\Models\Department::class, 'department_id');
    }
}
