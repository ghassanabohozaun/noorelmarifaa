<?php

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\DepartmentRepository;
use Illuminate\Support\Facades\Auth;

class DepartmentService
{
    protected $departmentRepository;
    // constructor
    public function __construct(DepartmentRepository $departmentRepository)
    {
        $this->departmentRepository = $departmentRepository;
    }

    // get one
    public function getOne($id)
    {
        return $this->departmentRepository->getOne($id);
    }

    // get all
    public function getAll()
    {
        return $this->departmentRepository->getAll();
    }

    // get active all
    public function getActiveAll()
    {
        return $this->departmentRepository->getActiveAll();
    }

    // create
    public function create($data)
    {
        $data['slug'] = [
            'ar' => slug($data['name']['ar']),
            'en' => slug($data['name']['en']),
        ];

        $department = $this->departmentRepository->create($data);
        if (!$department) {
            return false;
        }
        return $department;
    }

    // update
    public function update($data)
    {
        $department = self::getOne($data['id']);

        if (!$department) {
            return false;
        }

        $data['slug'] = [
            'ar' => slug($data['name']['ar']),
            'en' => slug($data['name']['en']),
        ];

        $department = $this->departmentRepository->update($department, $data);
        if (!$department) {
            return false;
        }
        return $department;
    }

    // destroy
    public function destroy($id)
    {
        $department = self::getOne($id);

        if ($department->posts->count() > 0 || !$department) {
            return false;
        }

        $department = $this->departmentRepository->destroy($department);
        if (!$department) {
            return false;
        }
        return $department;
    }

    // change status
    public function changeStatus($id, $status)
    {
        $department = self::getOne($id);
        if (!$department) {
            return false;
        }
        $department = $this->departmentRepository->changeStatus($department, $status);
        if (!$department) {
            return false;
        }
        return $department;
    }
}
