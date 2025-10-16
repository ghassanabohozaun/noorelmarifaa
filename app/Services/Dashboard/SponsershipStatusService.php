<?php

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\SponsershipStatusRepository;

class SponsershipStatusService
{
    protected $sponsershipStatusRepository;
    // __construct
    public function __construct(SponsershipStatusRepository $sponsershipStatusRepository)
    {
        $this->sponsershipStatusRepository = $sponsershipStatusRepository;
    }

    // get one
    public function getOne($id)
    {
        $sponsershipStatus = $this->sponsershipStatusRepository->getOne($id);
        if (!$sponsershipStatus) {
            return false;
        }

        return $sponsershipStatus;
    }

    // get all
    public function getAll()
    {
        return $this->sponsershipStatusRepository->getAll();
    }

    // create
    public function create($data)
    {
        $sponsershipStatus = $this->sponsershipStatusRepository->create($data);
        if (!$sponsershipStatus) {
            return false;
        }

        return $sponsershipStatus;
    }

    // update
    public function update($data)
    {
        $sponsershipStatus = self::getOne($data['id']);
        if (!$sponsershipStatus) {
            return false;
        }
        $sponsershipStatus = $this->sponsershipStatusRepository->update($sponsershipStatus, $data);
        if (!$sponsershipStatus) {
            return false;
        }

        return $sponsershipStatus;
    }

    // destroy
    public function destroy($id)
    {
        $sponsershipStatus = self::getOne($id);
        if (!$sponsershipStatus) {
            return false;
        }
        $sponsershipStatus = $this->sponsershipStatusRepository->destroy($sponsershipStatus);
        if (!$sponsershipStatus) {
            return false;
        }
        return $sponsershipStatus;
    }

    // chane status
    public function changeStatus($id, $status)
    {
        $sponsershipStatus = self::getOne($id);
        if (!$sponsershipStatus) {
            return false;
        }
        $sponsershipStatus = $this->sponsershipStatusRepository->changeStatus($sponsershipStatus , $status);
        if (!$sponsershipStatus) {
            return false;
        }
        return $sponsershipStatus;
    }
}
