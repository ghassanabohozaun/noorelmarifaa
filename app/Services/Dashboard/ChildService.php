<?php

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\ChildRepository;
use App\Utils\ImageManagerUtils;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
class ChildService
{
    protected $childRepository, $imageManagerUtils;

    // __construct
    public function __construct(ChildRepository $childRepository, ImageManagerUtils $imageManagerUtils)
    {
        $this->childRepository = $childRepository;
        $this->imageManagerUtils = $imageManagerUtils;
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

    // get children by pagination
    public function getChildrenByPagination()
    {
        return $this->childRepository->getChildrenByPagination();
    }

    // get children
    public function getChildren()
    {
        $children = $this->childRepository->getChildren(request());
        return $children;
    }

    // get children
    public function getChildrenWithRelations()
    {
        $children = $this->childRepository->getChildrenWithRelations();
        return $children;
    }

    // get all
    public function getAll($request)
    {
        return $this->childRepository->getChildren($request);
    }

    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    //  child info
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    public function childInfoSave($childData)
    {
        $child = $this->childRepository->createChild($childData);
        if (!$child) {
            return false;
        }
        return $child;
    }

    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    //  parents info
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    public function parentsInfoSave($childID, $childFatherData, $childMotherData)
    {
        $child = self::getChild($childID);

        if (!$child) {
            return 'child_not_found';
        }

        //~~~ child father ~~~//
        $childFather = $this->childRepository->getOneChildFatherByChildID($childID);

        if (!$childFather) {
            // store
            $childFather = $this->childRepository->createChildFather($childFatherData);
            if (!$childFather) {
                return 'save_error';
            }
        } else {
            // update
            $childFather = $this->childRepository->updateChildFather($child, $childFatherData);
            if (!$childFather) {
                return 'save_error';
            }
        }

        //~~~ child mother ~~~//
        $childMother = $this->childRepository->getOneChildMotherByChildID($childID);

        if (!$childMother) {
            //store
            $childMother = $this->childRepository->createChildMother($childMotherData);
            if (!$childMother) {
                return 'save_error';
            }
        } else {
            //update
            $childMother = $this->childRepository->updateChildMother($child, $childMotherData);
            if (!$childMother) {
                return 'save_error';
            }
        }

        return 'save_success';
    }

    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    //  family  info
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    public function familyInfoSave($childID, $childFamilyData, $childBrotherMemberData, $childSisterMemberData)
    {
        $child = self::getChild($childID);
        if (!$child) {
            return 'child_not_found';
        }

        //~~~ child family ~~~//

        $childFamily = $this->childRepository->getOnechildFamilyByChildID($childID);
        if (!$childFamily) {
            //store
            $childFamily = $this->childRepository->createChildFamily($childFamilyData);
            if (!$childFamily) {
                return 'save_error';
            }
        } else {
            //update
            $childFamily = $this->childRepository->updateChildFamily($child, $childFamilyData);
            if (!$childFamily) {
                return 'save_error';
            }
        }

        //~~~ child members ~~~//

        // delete all child family members
        $this->childRepository->deleteAllFChildFamilyMemebers($child);

        // child brother members data
        foreach ($childBrotherMemberData as $memberItem) {
            if ($memberItem['member_name']['ar'] != '') {
                $member = $this->childRepository->createChildFamilyMember($memberItem);
                if (!$member) {
                    return 'save_error';
                }
            }
        }

        // child sister members data
        foreach ($childSisterMemberData as $memberItem) {
            if ($memberItem['member_name']['ar'] != '') {
                $member = $this->childRepository->createChildFamilyMember($memberItem);
                if (!$member) {
                    return 'save_error';
                }
            }
        }

        return 'save_success';
    }

    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    //  guardian  info
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//

    public function guardianInfoSave($childID, $childGuardianData)
    {
        $child = self::getChild($childID);
        if (!$child) {
            return 'child_not_found';
        }

        $childGuardian = $this->childRepository->getOneChildGuardianByChildID($childID);

        if (!$childGuardian) {
            // store
            $childGuardian = $this->childRepository->createChildGuardian($childGuardianData);
            if (!$childGuardian) {
                return 'save_error';
            }
        } else {
            // update
            $childGuardian = $this->childRepository->updateChildGuardian($child, $childGuardianData);
            if (!$childGuardian) {
                return 'save_error';
            }
        }

        return 'save_success';
    }

    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    //  details info
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//

    public function detailsInfoSave($childID, $childDetailsData)
    {
        $child = self::getChild($childID);
        if (!$child) {
            return 'child_not_found';
        }

        $childDetails = $this->childRepository->getOneChildDetailsByChildID($childID);

        if (!$childDetails) {
            // store
            $childDetails = $this->childRepository->createChildDetails($childDetailsData);
            if (!$childDetails) {
                return 'save_error';
            }
        } else {
            // update
            $childDetails = $this->childRepository->updateChildDetails($child, $childDetailsData);
            if (!$childDetails) {
                return 'save_error';
            }
        }

        return 'save_success';
    }

    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    //  files info
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//

    public function filesInfoSave($childID, $childFileData)
    {
        $child = self::getChild($childID);
        if (!$child) {
            return 'child_not_found';
        }

        $childfile = $this->childRepository->getOneChildFilesByChildID($childID);
        if (!$childfile) {
            // store
            $childFileData['picture_of_the_orphan_child'] = $this->createChildFile('picture_of_the_orphan_child', $childFileData);
            $childFileData['orphan_child_birth_certificate'] = $this->createChildFile('orphan_child_birth_certificate', $childFileData);
            $childFileData['father_death_certificate'] = $this->createChildFile('father_death_certificate', $childFileData);
            $childFileData['guardian_personal_id_photo'] = $this->createChildFile('guardian_personal_id_photo', $childFileData);
            $childFileData['child_activity_photo'] = $this->createChildFile('child_activity_photo', $childFileData);
            $childFileData['child_longitudinal_photo'] = $this->createChildFile('child_longitudinal_photo', $childFileData);
            $childFileData['child_with_family_photo'] = $this->createChildFile('child_with_family_photo', $childFileData);

            $childFile = $this->childRepository->createChildFiles($childFileData);
            if (!$childFile) {
                return 'save_error';
            }
        } else {
            // update
            $childFileData['picture_of_the_orphan_child'] = $this->updateChildFile('picture_of_the_orphan_child', $child, $childFileData);
            $childFileData['orphan_child_birth_certificate'] = $this->updateChildFile('orphan_child_birth_certificate', $child, $childFileData);
            $childFileData['father_death_certificate'] = $this->updateChildFile('father_death_certificate', $child, $childFileData);
            $childFileData['guardian_personal_id_photo'] = $this->updateChildFile('guardian_personal_id_photo', $child, $childFileData);
            $childFileData['child_activity_photo'] = $this->updateChildFile('child_activity_photo', $child, $childFileData);
            $childFileData['child_longitudinal_photo'] = $this->updateChildFile('child_longitudinal_photo', $child, $childFileData);
            $childFileData['child_with_family_photo'] = $this->updateChildFile('child_with_family_photo', $child, $childFileData);

            $childFile = $this->childRepository->updateChildFiles($child, $childFileData);
            if (!$childFile) {
                return 'save_error';
            }
        }
        return 'save_success';
    }

    // destory child
    public function destoryChild($id)
    {
        $child = self::getChild($id);
        if (!$child) {
            return false;
        }

        // remove child files
        $childfile = $this->childRepository->getOneChildFilesByChildID($id);
        if ($childfile) {
            $this->removeChildFile($childfile->picture_of_the_orphan_child);
            $this->removeChildFile($childfile->orphan_child_birth_certificate);
            $this->removeChildFile($childfile->father_death_certificate);
            $this->removeChildFile($childfile->guardian_personal_id_photo);
            $this->removeChildFile($childfile->child_activity_photo);
            $this->removeChildFile($childfile->child_longitudinal_photo);
            $this->removeChildFile($childfile->child_with_family_photo);
        }

        $child = $this->childRepository->destoryChild($child);

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

    // create child file
    public function createChildFile($file, $childFileData)
    {
        // child files
        if (array_key_exists($file, $childFileData) && $childFileData[$file] != null) {
            // upload new photo

            $file_name = $this->imageManagerUtils->saveResizeImage($childFileData[$file], 'children', 1000, 800);

            return $file_name;
        }
    }

    // upload child file
    public function updateChildFile($file, $child, $childFileData)
    {
        // child files
        if (array_key_exists($file, $childFileData) && $childFileData[$file] != null) {
            // remove old photo
            if ($child->childFile->$file != null) {
                $this->imageManagerUtils->removeImageFromLocal($child->childFile->$file, 'children');
            }
            // upload new photo
            $file_name = $this->imageManagerUtils->saveResizeImage($childFileData[$file], 'children', 1000, 800);

            return $file_name;
        } else {
            $file_name = $child->childFile->$file;
            return $file_name;
        }
    }

    // remove child file
    public function removeChildFile($file)
    {
        if ($file != null) {
            $this->imageManagerUtils->removeImageFromLocal($file, 'children');
        }
    }
}
