<?php

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\SponsershipOrganizationRepository;

class SponsershipOrganizationService
{
    protected $sponsershipOrganizationRepository;
    // __construct
    public function __construct(SponsershipOrganizationRepository $sponsershipOrganizationRepository)
    {
        $this->sponsershipOrganizationRepository = $sponsershipOrganizationRepository;
    }

    // get one
    public function getOne($id)
    {
        $organization = $this->sponsershipOrganizationRepository->getOne($id);
        if (!$organization) {
            return false;
        }

        return $organization;
    }

    // get all
    public function getAll()
    {
        return $this->sponsershipOrganizationRepository->getAll();
    }

    // create
    public function create($data)
    {
        $organization = $this->sponsershipOrganizationRepository->create($data);
        if (!$organization) {
            return false;
        }
        return $organization;
    }

    // update
    public function update($data)
    {
        $organization = self::getOne($data['id']);
        if (!$organization) {
            return false;
        }
        $organization = $this->sponsershipOrganizationRepository->update($organization, $data);
        if (!$organization) {
            return false;
        }

        return $organization;
    }

    // destroy
    public function destroy($id)
    {
        $organization = self::getOne($id);
        if (!$organization) {
            return false;
        }
        $organization = $this->sponsershipOrganizationRepository->destroy($organization);
        if (!$organization) {
            return false;
        }
        return $organization;
    }

    // chane status
    public function changeStatus($id, $status)
    {
        $organization = self::getOne($id);
        if (!$organization) {
            return false;
        }
        $organization = $this->sponsershipOrganizationRepository->changeStatus($organization , $status);
        if (!$organization) {
            return false;
        }
        return $organization;
    }
}
