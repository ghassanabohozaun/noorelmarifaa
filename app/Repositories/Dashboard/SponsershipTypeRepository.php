<?php

namespace App\Repositories\Dashboard;

use App\Models\SponsershipType;

class SponsershipTypeRepository
{
    // get one
    public function getOne($id)
    {
        return SponsershipType::find($id);
    }

    // get all
    public function getAll()
    {
        return SponsershipType::orderByDesc('created_at')->select('id', 'name', 'status')->paginate(10);
    }

    // create
    public function create($data)
    {
        return SponsershipType::create($data);
    }

    // update
    public function update($types, $data)
    {
        return $types->update($data);
    }

    // destroy
    public function destroy($types)
    {
        return $types->forceDelete();
    }

    // chane status
    public function changeStatus($types, $status)
    {
        return $types->update([
            'status' => $status,
        ]);
    }
}
