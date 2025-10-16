<?php

namespace App\Livewire\Dashboard\Child;

use App\Models\Child;
use App\Services\Dashboard\ChildService;
use App\Services\Dashboard\CityService;
use App\Services\Dashboard\GovernorateService;
use Livewire\Component;

class ShowChild extends Component
{

      public $activeTab = 'child_info_tab';
    public $ChildID;
    public $first_name_ar, $father_name_ar, $grand_father_name_ar, $family_name_ar;
    public $first_name_en, $father_name_en, $grand_father_name_en, $family_name_en;
    public $password, $password_confirm, $personal_id, $birthday, $classification, $gender, $class, $health_status, $disease_clarification, $governoate_id, $city_id, $address_details;
    public $authorized_contact_number, $backup_contact_number, $whatsApp_number;
    public $number_of_people_including_mother, $male_number, $female_number;
    public $governorates, $cities;
    public $father_full_name_ar, $father_full_name_en, $father_personal_id, $father_date_of_death, $father_respon_of_death;
    public $mother_full_name_ar, $mother_full_name_en, $mother_personal_id, $is_mother_alive, $mother_date_of_death, $is_mother_the_guardian;
    public $guardian_full_name_ar, $guardian_full_name_en, $guardian_personal_id, $guardian_birthday, $why_not_the_mother_is_guardian, $guardian_relationship_with_the_child;
    public $picture_of_the_orphan_child, $orphan_child_birth_certificate, $father_death_certificate, $guardian_personal_id_photo;
    public $new_picture_of_the_orphan_child, $new_orphan_child_birth_certificate, $new_father_death_certificate, $new_guardian_personal_id_photo;


    public ?Child $child;

    protected ChildService $childService;
    protected GovernorateService $governorateService;
    protected CityService $cityService;
    // boot
    public function boot(ChildService $childService, GovernorateService $governorateService, CityService $cityService)
    {
        $this->childService = $childService;
        $this->governorateService = $governorateService;
        $this->cityService = $cityService;
    }

    // mount
    public function mount($ChildID)
    {
        $this->child = $this->childService->getChildWithRelations($ChildID);
        $this->ChildID = $ChildID;
        $this->governorates = $this->governorateService->getAllGovernoratesWithoutRelations();
        $this->cities = $this->governorateService->getAllCitiesbyGovernorate($this->child->governoate_id);
        // $this->governoate_id ?? ($this->cities = []);

        // basic info

        $this->first_name_ar = $this->child->getTranslation('first_name', 'ar');
        $this->father_name_ar = $this->child->getTranslation('father_name', 'ar');
        $this->grand_father_name_ar = $this->child->getTranslation('grand_father_name', 'ar');
        $this->family_name_ar = $this->child->getTranslation('family_name', 'ar');

        $this->first_name_en = $this->child->getTranslation('first_name', 'en');
        $this->father_name_en = $this->child->getTranslation('father_name', 'en');
        $this->grand_father_name_en = $this->child->getTranslation('grand_father_name', 'en');
        $this->family_name_en = $this->child->getTranslation('family_name', 'en');

        $this->personal_id = $this->child->personal_id;
        $this->birthday = $this->child->birthday;
        $this->classification = $this->child->classification;
        $this->gender = $this->child->gender;

        $this->class = $this->child->class;
        $this->health_status = $this->child->health_status;
        $this->disease_clarification = $this->child->disease_clarification;

        $this->authorized_contact_number = $this->child->authorized_contact_number;
        $this->backup_contact_number = $this->child->backup_contact_number;
        $this->whatsApp_number = $this->child->whatsApp_number;
        $this->governoate_id = $this->child->governoate_id;
        $this->city_id = $this->child->city_id;
        $this->address_details = $this->child->address_details;

        // child family
        $this->number_of_people_including_mother = $this->child->childFamily->number_of_people_including_mother;
        $this->male_number = $this->child->childFamily->male_number;
        $this->female_number = $this->child->childFamily->female_number;

        // child father
        $this->father_full_name_ar = $this->child->childFather->getTranslation('father_full_name', 'ar');
        $this->father_full_name_en = $this->child->childFather->getTranslation('father_full_name', 'en');
        $this->father_personal_id = $this->child->childFather->father_personal_id;
        $this->father_date_of_death = $this->child->childFather->father_date_of_death;
        $this->father_respon_of_death = $this->child->childFather->father_respon_of_death;

        // child  mother
        $this->mother_full_name_ar = $this->child->childMother->getTranslation('mother_full_name', 'ar');
        $this->mother_full_name_en = $this->child->childMother->getTranslation('mother_full_name', 'en');
        $this->mother_personal_id = $this->child->childMother->mother_personal_id;
        $this->is_mother_alive = $this->child->childMother->is_mother_alive;
        $this->mother_date_of_death = $this->child->childMother->mother_date_of_death;
        $this->is_mother_the_guardian = $this->child->childMother->is_mother_the_guardian;

        // child guardian
        $this->guardian_full_name_ar = $this->child->childGuardian->getTranslation('guardian_full_name', 'ar');
        $this->guardian_full_name_en = $this->child->childGuardian->getTranslation('guardian_full_name', 'en');
        $this->guardian_personal_id = $this->child->childGuardian->guardian_personal_id;
        $this->guardian_birthday = $this->child->childGuardian->guardian_birthday;
        $this->why_not_the_mother_is_guardian = $this->child->childGuardian->why_not_the_mother_is_guardian;
        $this->guardian_relationship_with_the_child = $this->child->childGuardian->guardian_relationship_with_the_child;

        // child files
        $this->picture_of_the_orphan_child = $this->child->childFile->picture_of_the_orphan_child;
        $this->orphan_child_birth_certificate = $this->child->childFile->orphan_child_birth_certificate;
        $this->father_death_certificate = $this->child->childFile->father_death_certificate;
        $this->guardian_personal_id_photo = $this->child->childFile->guardian_personal_id_photo;
    }

    // set active tab
    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
    }
    public function render()
    {

        return view('livewire.dashboard.child.show-child');
    }
}
