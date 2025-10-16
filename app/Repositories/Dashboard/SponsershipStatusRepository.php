<?php

namespace App\Repositories\Dashboard;

use App\Models\SponsershipStatus;

class SponsershipStatusRepository
{
    // get one
    public function getOne($id)
    {
        return SponsershipStatus::find($id);
    }

    // get all
    public function getAll()
    {
        return SponsershipStatus::orderByDesc('created_at')->select('id', 'name', 'status')->paginate(10);
    }

    // create
    public function create($data)
    {
        return SponsershipStatus::create($data);
    }

    // update
    public function update($sponsershipStatus, $data)
    {
        return $sponsershipStatus->update($data);
    }

    // destroy
    public function destroy($sponsershipStatus)
    {
        return $sponsershipStatus->forceDelete();
    }

    // chane status
    public function changeStatus($sponsershipStatus, $status)
    {
        return $sponsershipStatus->update([
            'status' => $status,
        ]);
    }
}
