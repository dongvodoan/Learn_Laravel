<?php

use Faker\Factory as Faker;
use App\Models\Department;
use App\Repositories\DepartmentRepository;

trait MakeDepartmentTrait
{
    /**
     * Create fake instance of Department and save it in database
     *
     * @param array $departmentFields
     * @return Department
     */
    public function makeDepartment($departmentFields = [])
    {
        /** @var DepartmentRepository $departmentRepo */
        $departmentRepo = App::make(DepartmentRepository::class);
        $theme = $this->fakeDepartmentData($departmentFields);
        return $departmentRepo->create($theme);
    }

    /**
     * Get fake instance of Department
     *
     * @param array $departmentFields
     * @return Department
     */
    public function fakeDepartment($departmentFields = [])
    {
        return new Department($this->fakeDepartmentData($departmentFields));
    }

    /**
     * Get fake data of Department
     *
     * @param array $postFields
     * @return array
     */
    public function fakeDepartmentData($departmentFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'office_number' => $fake->word,
            'manager' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $departmentFields);
    }
}
