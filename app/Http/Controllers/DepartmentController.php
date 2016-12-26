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

class DepartmentController extends AppBaseController
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
    public function index(Request $request)
    {
        $this->departmentRepository->pushCriteria(new RequestCriteria($request));
        $departments = $this->departmentRepository->all();

        return view('departments.index')
            ->with('departments', $departments);
    }

    /**
     * Show the form for creating a new Department.
     *
     * @return Response
     */
    public function create()
    {

        $managers = $this->employeeRepository->all();

        return view('departments.create')->with('managers', $managers);;
    }

    /**
     * Store a newly created Department in storage.
     *
     * @param CreateDepartmentRequest $request
     *
     * @return Response
     */
    public function store(CreateDepartmentRequest $request)
    {
        $input = $request->all();

        $name = htmlspecialchars($input['name']);
        $office_number = htmlspecialchars($input['office_number']);
        $manager = htmlspecialchars($input['manager']);

        $input['name'] = $name;
        $input['office_number'] = $office_number;
        $input['manager'] = $manager;

        $department = $this->departmentRepository->create($input);

        if (empty($department)) {
            Flash::error('Unable to save department.');
            return redirect(route('departments.create'));           
        } else {
            Flash::success('Department has been saved.');
            return redirect(route('departments.index'));
        }
    }

    /**
     * Display the specified Department.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $department = $this->departmentRepository->findWithoutFail($id);

        if (empty($department)) {
            Flash::error('Department not found');

            return redirect(route('departments.index'));
        }

        return view('departments.show')->with('department', $department);
    }

    /**
     * Show the form for editing the specified Department.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $department = $this->departmentRepository->findWithoutFail($id);

        $managers = $this->employeeRepository->all('name');

        if (empty($department)) {
            Flash::error('Department not found');

            return redirect(route('departments.index'));
        }

        return view('departments.edit', compact('department', 'managers'));
    }

    /**
     * Update the specified Department in storage.
     *
     * @param  int              $id
     * @param UpdateDepartmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDepartmentRequest $request)
    {
        $department = $this->departmentRepository->findWithoutFail($id);

        if (empty($department)) {
            Flash::error('Department not found');

            return redirect(route('departments.index'));
        }

        $input = $request->all();

        $name = htmlspecialchars($input['name']);
        $office_number = htmlspecialchars($input['office_number']);
        $manager = htmlspecialchars($input['manager']);

        $input['name'] = $name;
        $input['office_number'] = $office_number;
        $input['manager'] = $manager;

        $department = $this->departmentRepository->update($input, $id);

        Flash::success('Department updated successfully.');

        return redirect(route('departments.index'));
    }

    /**
     * Remove the specified Department from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $department = $this->departmentRepository->findWithoutFail($id);

        if (empty($department)) {
            Flash::error('Department not found');

            return redirect(route('departments.index'));
        }

        $this->departmentRepository->delete($id);

        Flash::success('Department deleted successfully.');

        return redirect(route('departments.index'));
    }
}
