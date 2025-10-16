<?php

namespace App\Repositories\Dashboard;

use App\Models\SponsershipOrganization;

class SponsershipOrganizationRepository
{
    // get one
    public function getOne($id)
    {
        return SponsershipOrganization::find($id);
    }

    // get all
    public function getAll()
    {
        return SponsershipOrganization::orderByDesc('created_at')->select('id', 'name', 'status')->paginate(10);
    }

    // create
    public function create($data)
    {
        return SponsershipOrganization::create($data);
    }

    // update
    public function update($organization, $data)
    {
        return $organization->update($data);
    }

    // destroy
    public function destroy($organization)
    {
        return $organization->forceDelete();
    }

    // chane status
    public function changeStatus($organization, $status)
    {
        return $organization->update([
            'status' => $status,
        ]);
    }
}
