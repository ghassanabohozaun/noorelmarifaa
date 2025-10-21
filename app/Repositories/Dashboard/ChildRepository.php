<?php

namespace App\Repositories\Dashboard;

use App\Models\Child;
use App\Models\ChildFamily;
use App\Models\ChildFather;
use App\Models\ChildFile;
use App\Models\ChildGuardian;
use App\Models\ChildMother;

class ChildRepository
{
    // get child
    public function getChild($id)
    {
        return Child::find($id);
    }

    // get child by personal id
    public function getChildByPersonalID($personal_id)
    {
        return Child::where('personal_id', $personal_id)->firstOrFail();
    }
    // get child with relation
    public function getChildWithRelations($id)
    {
        return Child::with(['childFile', 'childFamily', 'childFather', 'childMother', 'childGuardian', 'childFile', 'governorate', 'city'])->find($id);
    }

    // get child with relation
    // public function getChildWithRelations2()
    // {
    //     return Child::with(['childFile', 'childFamily', 'childFather', 'childMother', 'childGuardian', 'childFile', 'governorate', 'city'])
    //         ->latest()
    //         ->limit(10)
    //         ->get();
    // }

    // get children
    public function getChildren($request)
    {
        return Child::with(['childFile', 'childFamily', 'childFather', 'childMother', 'childGuardian', 'childFile', 'governorate', 'city'])
            ->when(!empty(request()->personal_id), function ($query) {
                $query->where('personal_id', request()->personal_id);
            })
            ->when(!empty(request()->gender), function ($query) {
                $query->where('gender', request()->gender);
            })
            ->when(!empty(request()->classification), function ($query) {
                $query->where('classification', request()->classification);
            })
            ->when(!empty(request()->health_status), function ($query) {
                $query->where('health_status', request()->health_status);
            })
            ->when(!empty(request()->governoate_id), function ($query) {
                $query->where('governoate_id', request()->governoate_id);
            })
            ->when(!empty(request()->city_id), function ($query) {
                $query->where('city_id', request()->city_id);
            })
            ->latest()
            ->get();
    }

    // create child
    public function createChild($data)
    {
        return Child::create($data);
    }

    // update child
    public function updateChild($child, $data)
    {
        return $child->update($data);
    }

    // destory child
    public function destoryChild($child)
    {
        return $child->forceDelete();
    }

    // change status
    public function changeStatus($child, $status)
    {
        return $child->update(['status' => $status]);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // child family
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // create child family
    public function createChildFamily($childFamilyData)
    {
        return ChildFamily::create($childFamilyData);
    }

    // update child family
    public function updateChildFamily($myChild, $childFamilyData)
    {
        return $myChild->childFamily->update($childFamilyData);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // child father
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // create child father
    public function createChildFather($childFatherData)
    {
        return ChildFather::create($childFatherData);
    }
    //update child father
    public function updateChildFather($myChild, $childFatherData)
    {
        return $myChild->childFather->update($childFatherData);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // child mother
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //  create child mother
    public function createChildMother($childMotherData)
    {
        return ChildMother::create($childMotherData);
    }

    //update child mother
    public function updateChildMother($myChild, $childMotherData)
    {
        return $myChild->childMother->update($childMotherData);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // child guardian
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // create child guardian
    public function createChildGuardian($childGuaridanData)
    {
        return ChildGuardian::create($childGuaridanData);
    }

    //update child guardian
    public function updateChildGuardian($myChild, $childGuaridanData)
    {
        return $myChild->childGuardian->update($childGuaridanData);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // child guardian
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // create child Files
    public function createChildFiles($childFileData)
    {
        return ChildFile::create($childFileData);
    }

    //update child guardian
    public function updateChildFiles($myChild, $childFileData)
    {
        return $myChild->childFile->update($childFileData);
    }
}
