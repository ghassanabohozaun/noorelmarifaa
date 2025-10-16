<?php

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\SponsershipTypeRepository;

class SponsershipTypeService
{
    protected $sponsershipTypeRepository;
    // __construct
    public function __construct(SponsershipTypeRepository $sponsershipTypeRepository)
    {
        $this->sponsershipTypeRepository = $sponsershipTypeRepository;
    }

    // get one
    public function getOne($id)
    {
        $type = $this->sponsershipTypeRepository->getOne($id);
        if (!$type) {
            return false;
        }

        return $type;
    }

    // get all
    public function getAll()
    {
        return $this->sponsershipTypeRepository->getAll();
    }

    // create
    public function create($data)
    {
        $type = $this->sponsershipTypeRepository->create($data);
        if (!$type) {
            return false;
        }

        return $type;
    }

    // update
    public function update($data)
    {
        $type = self::getOne($data['id']);
        if (!$type) {
            return false;
        }
        $type = $this->sponsershipTypeRepository->update($type, $data);
        if (!$type) {
            return false;
        }

        return $type;
    }

    // destroy
    public function destroy($id)
    {
        $type = self::getOne($id);
        if (!$type) {
            return false;
        }
        $type = $this->sponsershipTypeRepository->destroy($type);
        if (!$type) {
            return false;
        }
        return $type;
    }

    // chane status
    public function changeStatus($id, $status)
    {
        $type = self::getOne($id);
        if (!$type) {
            return false;
        }
        $type = $this->sponsershipTypeRepository->changeStatus($type , $status);
        if (!$type) {
            return false;
        }
        return $type;
    }
}
