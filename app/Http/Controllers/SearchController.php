<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Repositories\DepartmentRepository;
use App\Repositories\EmployeeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class SearchController extends AppBaseController
{
    /** @var  DepartmentRepository */
    private $departmentRepository;
    /** @var  EmployeeRepository */
    private $employeeRepository;

    public function __construct(DepartmentRepository $departmentRepo, EmployeeRepository $employeeRepo)
    {
        $this->departmentRepository = $departmentRepo;
        $this->employeeRepository = $employeeRepo;
    }

    /**
     * Display a listing of the Department.
     *
     * @param Request $request
     * @return Response
     */
    public function getsearch(Request $request)
    {
        $input = $request->all();
        $name_employee = htmlspecialchars($input['name']);
        $department_id = htmlspecialchars($input['department_id']);

        // dd($department_id);
        if($name_employee==null) {
        	$this->employeeRepository->pushCriteria(new RequestCriteria($request));
        	$employees = $this->employeeRepository->findWhere([
    			//Default Condition =
    			'department_id'=>$department_id,
			]); 
        } 

        if($department_id==null) {
        	$this->employeeRepository->pushCriteria(new RequestCriteria($request));
        	$employees = $this->employeeRepository->findWhere([
    			//Default Condition =
    			'name'=>$name_employee,
			]);
        }

        if(($name_employee==null) && ($department_id==null)) {
        	$this->employeeRepository->pushCriteria(new RequestCriteria($request));
        	$employees = $this->employeeRepository->all();
        }

        if(($name_employee==!null) && ($department_id==!null)) {
        	$this->employeeRepository->pushCriteria(new RequestCriteria($request));
        	$employees = $this->employeeRepository->findWhere([
    			//Default Condition =
    			'name'=>$name_employee,
    			'department_id'=>$department_id,
			]);
        }

        $this->departmentRepository->pushCriteria(new RequestCriteria($request));
        $departments = $this->departmentRepository->all();

        return view('employees.index', compact('employees', 'departments'));
    }
}
