<?php

namespace App\Repositories;

use App\Models\Department;
use InfyOm\Generator\Common\BaseRepository;

class DepartmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'office_number',
        'manager'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Department::class;
    }
}
