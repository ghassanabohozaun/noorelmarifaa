<?php

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\ChildRepository;
use Illuminate\Support\Facades\Cache;
use App\Utils\ImageManager;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;
class ChildService
{
    protected $childRepository, $imageManager;

    // __construct
    public function __construct(ChildRepository $childRepository, ImageManager $imageManager)
    {
        $this->childRepository = $childRepository;
        $this->imageManager = $imageManager;
    }

    // get child
    public function getChild($id)
    {
        $child = $this->childRepository->getChild($id);

        if (!$child) {
            return false;
        }
        return $child;
    }

    // get child with relation
    public function getChildWithRelations($id)
    {
        $child = $this->childRepository->getChildWithRelations($id);
        if (!$child) {
            return false;
        }
        return $child;
    }

    // get children
    public function getChildren()
    {
        $children = $this->childRepository->getChildren(request());
        return $children;
    }

    // get all
    public function getAll($request)
    {
        $children = $this->childRepository->getChildren($request);

        return DataTables::of($children)
            ->addIndexColumn()
            ->addColumn('full_name', function ($child) {
                return $child->childFullName(); // ar and en
            })
            ->addColumn('gender', function ($child) {
                return $child->childGender();
            })
            ->addColumn('classification', function ($child) {
                return $child->childClassification();
            })
            ->addColumn('health_status', function ($child) {
                return $child->childHealthStatus();
            })
            ->addColumn('governoate_id', function ($child) {
                return $child->governorate->name;
            })
            ->addColumn('city_id', function ($child) {
                return $child->city->name;
            })
            ->addColumn('status_manage', function ($child) {
                return view('dashboard.children.parts.status_manage', compact('child'));
            })
            ->addColumn('actions', function ($child) {
                return view('dashboard.children.parts.actions', compact('child'));
            })
            ->make(true);
    }

    // create child
    public function createChild($childData, $childFamilyData, $childFatherData, $childMotherData, $childGuaridanData, $childFileData)
    {
        try {
            DB::beginTransaction();

            // child
            $child = $this->childRepository->createChild($childData);
            if (!$child) {
                return false;
            }

            // child family
            $childFamilyData['child_id'] = $child->id;
            $childFamily = $this->childRepository->createChildFamily($childFamilyData);
            if (!$childFamily) {
                return false;
            }

            // child father
            $childFatherData['child_id'] = $child->id;
            $childFather = $this->childRepository->createChildFather($childFatherData);
            if (!$childFather) {
                return false;
            }

            // child mother
            $childMotherData['child_id'] = $child->id;
            $childMother = $this->childRepository->createChildMother($childMotherData);
            if (!$childMother) {
                return false;
            }

            // child guardian
            $childGuaridanData['child_id'] = $child->id;
            $childGuaridan = $this->childRepository->createChildGuardian($childGuaridanData);
            if (!$childGuaridan) {
                return false;
            }

            $childFileData['picture_of_the_orphan_child'] = $this->createChildFile('picture_of_the_orphan_child', $childFileData);
            $childFileData['orphan_child_birth_certificate'] = $this->createChildFile('orphan_child_birth_certificate', $childFileData);
            $childFileData['father_death_certificate'] = $this->createChildFile('father_death_certificate', $childFileData);
            $childFileData['guardian_personal_id_photo'] = $this->createChildFile('guardian_personal_id_photo', $childFileData);

            // child files
            // if (array_key_exists('picture_of_the_orphan_child', $childFileData) && $childFileData['picture_of_the_orphan_child'] != null) {
            //     $file_name = $this->imageManager->uploadSingleImage('/', $childFileData['picture_of_the_orphan_child'], 'children');
            //     $childFileData['picture_of_the_orphan_child'] = $file_name;
            // }

            // if (array_key_exists('orphan_child_birth_certificate', $childFileData) && $childFileData['orphan_child_birth_certificate'] != null) {
            //     $file_name = $this->imageManager->uploadSingleImage('/', $childFileData['orphan_child_birth_certificate'], 'children');
            //     $childFileData['orphan_child_birth_certificate'] = $file_name;
            // }

            // if (array_key_exists('father_death_certificate', $childFileData) && $childFileData['father_death_certificate'] != null) {
            //     $file_name = $this->imageManager->uploadSingleImage('/', $childFileData['father_death_certificate'], 'children');
            //     $childFileData['father_death_certificate'] = $file_name;
            // }

            // if (array_key_exists('guardian_personal_id_photo', $childFileData) && $childFileData['guardian_personal_id_photo'] != null) {
            //     $file_name = $this->imageManager->uploadSingleImage('/', $childFileData['guardian_personal_id_photo'], 'children');
            //     $childFileData['guardian_personal_id_photo'] = $file_name;
            // }

            $childFileData['child_id'] = $child->id;
            $childFile = $this->childRepository->createChildFiles($childFileData);
            if (!$childFile) {
                return false;
            }

            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error Creating Child  : ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
            return false;
        }
    }

    // update child
    public function updateChild($ChildID, $myChild, $childData, $childFamilyData, $childFatherData, $childMotherData, $childGuaridanData, $childFileData)
    {
        try {
            DB::beginTransaction();

            // child
            $child = $this->childRepository->updateChild($myChild, $childData);
            if (!$child) {
                return false;
            }

            // child family
            $childFamilyData['child_id'] = $ChildID;
            $childFamily = $this->childRepository->updateChildFamily($myChild, $childFamilyData);
            if (!$childFamily) {
                return false;
            }

            // child father
            $childFatherData['child_id'] = $ChildID;
            $childFather = $this->childRepository->updateChildFather($myChild, $childFatherData);
            if (!$childFather) {
                return false;
            }

            // child mother
            $childMotherData['child_id'] = $ChildID;
            $childMother = $this->childRepository->updateChildMother($myChild, $childMotherData);
            if (!$childMother) {
                return false;
            }

            // child guardian
            $childGuaridanData['child_id'] = $ChildID;
            $childGuaridan = $this->childRepository->updateChildGuardian($myChild, $childGuaridanData);
            if (!$childGuaridan) {
                return false;
            }

            // child files
            $childFileData['picture_of_the_orphan_child'] = $this->updateChildFile('picture_of_the_orphan_child', $myChild, $childFileData);
            $childFileData['orphan_child_birth_certificate'] = $this->updateChildFile('orphan_child_birth_certificate', $myChild, $childFileData);
            $childFileData['father_death_certificate'] = $this->updateChildFile('father_death_certificate', $myChild, $childFileData);
            $childFileData['guardian_personal_id_photo'] = $this->updateChildFile('guardian_personal_id_photo', $myChild, $childFileData);

            $childFileData['child_id'] = $ChildID;
            $childFile = $this->childRepository->updateChildFiles($myChild, $childFileData);
            if (!$childFile) {
                return false;
            }

            $this->childCache();
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            Log::error('Error Creating Child  : ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
            return false;
        }
    }

    // destory child
    public function destoryChild($id)
    {
        $child = self::getChild($id);
        if (!$child) {
            return false;
        }

        $child = $this->childRepository->destoryChild($child);

        if (!$child) {
            return false;
        }
        $this->childCache();
        return $child;
    }

    // change status
    public function changeStatus($id, $status)
    {
        $child = self::getChild($id);
        if (!$child) {
            return false;
        }

        $child = $this->childRepository->changeStatus($child, $status);

        if (!$child) {
            return false;
        }
        return $child;
    }

    // child cache
    public function childCache()
    {
        Cache::forget('children_count');
    }

    // create child file
    public function createChildFile($file, $childFileData)
    {
        // child files
        if (array_key_exists($file, $childFileData) && $childFileData[$file] != null) {
            // upload new photo
            $file_name = $this->imageManager->uploadSingleImage('/', $childFileData[$file], 'children');
            return $file_name;
        }
    }

    // upload child file
    public function updateChildFile($file, $myChild, $childFileData)
    {
        // child files
        if (array_key_exists($file, $childFileData) && $childFileData[$file] != null) {
            // remove old photo
            $this->imageManager->removeImageFromLocal($myChild->childFile->$file, 'children');
            // upload new photo
            $file_name = $this->imageManager->uploadSingleImage('/', $childFileData[$file], 'children');
            return $file_name;
        } else {
            $file_name = $myChild->childFile->$file;
            return $file_name;
        }
    }
}
