<?php

namespace App\Livewire\Dashboard\Child;

use App\Models\Child;
use App\Services\Dashboard\ChildService;
use App\Services\Dashboard\CityService;
use App\Services\Dashboard\GovernorateService;
use Illuminate\Validation\Rule;
use Laravel\Prompts\FormBuilder;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Services\Dashboard\SponsershipOrganizationService;
use App\Services\Dashboard\SponsershipStatusService;
use App\Services\Dashboard\SponsershipTypeService;
use Illuminate\Validation\Validator;

class EditChild extends Component
{
    use WithFileUploads;
    public $currentStep = 1;
    public $personalIDReadOnly = 1;
    public $locked = 'open';
    public $ChildID;
    public $statusAlert = '';

    // basic
    public $first_name_ar, $father_name_ar, $grand_father_name_ar, $family_name_ar;
    public $first_name_en, $father_name_en, $grand_father_name_en, $family_name_en;
    public $password, $password_confirm, $personal_id, $birthday, $classification, $gender, $class, $health_status, $disease_clarification;
    public $with_disability, $kind_of_disability, $governoate_id, $city_id, $address_details;
    public $school_name, $school_address, $school_tel, $school_type, $pay_school_fees, $fees_per_month;
    public $authorized_contact_number, $backup_contact_number, $whatsApp_number;
    public $sponsership_status_id, $sponsership_organization_id, $sponsership_type_id;
    public $number_of_people_including_mother, $male_number, $female_number;
    public $governorates, $cities;

    // father
    public $father_full_name_ar, $father_first_name_ar, $father_middle_name_ar, $father_surname_name_ar, $father_work_ar;
    public $father_full_name_en, $father_first_name_en, $father_middle_name_en, $father_surname_name_en, $father_work_en;
    public $father_personal_id, $father_date_of_death, $father_respon_of_death;

    // mother
    public $mother_full_name_ar, $mother_first_name_ar, $mother_middle_name_ar, $mother_surname_name_ar, $mother_work_ar;
    public $mother_full_name_en, $mother_first_name_en, $mother_middle_name_en, $mother_surname_name_en, $mother_work_en;
    public $mother_personal_id, $is_mother_alive, $mother_date_of_death, $is_mother_the_guardian;

    // guardian
    public $guardian_full_name_ar, $guardian_first_name_ar, $guardian_middle_name_ar, $guardian_surname_name_ar, $guardian_work_ar, $guardian_address_ar;
    public $guardian_full_name_en, $guardian_first_name_en, $guardian_middle_name_en, $guardian_surname_name_en, $guardian_work_en, $guardian_address_en;
    public $guardian_personal_id, $guardian_birthday, $why_not_the_mother_is_guardian, $guardian_relationship_with_the_child;

    // photos
    public $picture_of_the_orphan_child, $orphan_child_birth_certificate, $father_death_certificate, $guardian_personal_id_photo;
    public $child_activity_photo, $child_longitudinal_photo, $child_with_family_photo;
    public $new_picture_of_the_orphan_child, $new_orphan_child_birth_certificate, $new_father_death_certificate, $new_guardian_personal_id_photo;
    public $new_child_activity_photo, $new_child_longitudinal_photo, $new_child_with_family_photo;

    // child details
    public $health_problem_ar, $economic_situation_ar, $child_progress_ar, $expenses_ar, $sponsorship_funds_cover_ar;
    public $health_problem_en, $economic_situation_en, $child_progress_en, $expenses_en, $sponsorship_funds_cover_en;

    // child sponsership
    public $sponsership_organizations, $sponsership_statuses, $sponsership_types;

    public $bortherMembersItems,
        $sisterMembersItems,
        $childBrotherMembers,
        $childSisterMembers = [];

    ///
    public ?Child $child;
    protected ChildService $childService;
    protected GovernorateService $governorateService;
    protected CityService $cityService;
    protected SponsershipOrganizationService $sponsershipOrganizationService;
    protected SponsershipStatusService $sponsershipStatusService;
    protected SponsershipTypeService $sponsershipTypeService;
    ///

    // boot
    public function boot(ChildService $childService, GovernorateService $governorateService, CityService $cityService, SponsershipOrganizationService $sponsershipOrganizationService, SponsershipStatusService $sponsershipStatusService, SponsershipTypeService $sponsershipTypeService)
    {
        $this->childService = $childService;
        $this->governorateService = $governorateService;
        $this->cityService = $cityService;
        $this->sponsershipOrganizationService = $sponsershipOrganizationService;
        $this->sponsershipStatusService = $sponsershipStatusService;
        $this->sponsershipTypeService = $sponsershipTypeService;
    }

    // mount
    public function mount($ChildID)
    {
        $this->child = $this->childService->getChildWithRelations($ChildID);
        $this->ChildID = $ChildID;
        $this->governorates = $this->governorateService->getAllGovernoratesWithoutRelations();
        $this->cities = $this->governorateService->getAllCitiesbyGovernorate($this->child->governoate_id);
        $this->sponsership_statuses = $this->sponsershipStatusService->getActive();
        $this->sponsership_organizations = $this->sponsershipOrganizationService->getActive();
        $this->sponsership_types = $this->sponsershipTypeService->getActive();
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
        $this->school_name = $this->child->school_name;
        $this->school_address = $this->child->school_address;
        $this->school_tel = $this->child->school_tel;
        $this->school_type = $this->child->school_type;
        $this->pay_school_fees = $this->child->pay_school_fees;
        $this->fees_per_month = $this->child->fees_per_month;
        $this->health_status = $this->child->health_status;
        $this->disease_clarification = $this->child->disease_clarification;
        $this->with_disability = $this->child->with_disability;
        $this->kind_of_disability = $this->child->kind_of_disability;
        $this->authorized_contact_number = $this->child->authorized_contact_number;
        $this->backup_contact_number = $this->child->backup_contact_number;
        $this->whatsApp_number = $this->child->whatsApp_number;
        $this->governoate_id = $this->child->governoate_id;
        $this->city_id = $this->child->city_id;
        $this->address_details = $this->child->address_details;
        $this->sponsership_status_id = $this->child->sponsership_status_id;
        $this->sponsership_organization_id = $this->child->sponsership_organization_id;
        $this->sponsership_type_id = $this->child->sponsership_type_id;

        // child father
        if ($this->child->childFather) {
            $this->father_full_name_ar = $this->child->childFather->getTranslation('father_full_name', 'ar');
            $this->father_full_name_en = $this->child->childFather->getTranslation('father_full_name', 'en');
            $this->father_first_name_ar = $this->child->childFather->getTranslation('father_first_name', 'ar');
            $this->father_first_name_en = $this->child->childFather->getTranslation('father_first_name', 'en');
            $this->father_middle_name_ar = $this->child->childFather->getTranslation('father_middle_name', 'ar');
            $this->father_middle_name_en = $this->child->childFather->getTranslation('father_middle_name', 'en');
            $this->father_surname_name_ar = $this->child->childFather->getTranslation('father_surname_name', 'ar');
            $this->father_surname_name_en = $this->child->childFather->getTranslation('father_surname_name', 'en');
            $this->father_work_ar = $this->child->childFather->getTranslation('father_work', 'ar');
            $this->father_work_en = $this->child->childFather->getTranslation('father_work', 'en');
            $this->father_personal_id = $this->child->childFather->father_personal_id;
            $this->father_date_of_death = $this->child->childFather->father_date_of_death;
            $this->father_respon_of_death = $this->child->childFather->father_respon_of_death;
        }

        // child  mother
        if ($this->child->childMother) {
            $this->mother_full_name_ar = $this->child->childMother->getTranslation('mother_full_name', 'ar');
            $this->mother_full_name_en = $this->child->childMother->getTranslation('mother_full_name', 'en');
            $this->mother_first_name_ar = $this->child->childMother->getTranslation('mother_first_name', 'ar');
            $this->mother_first_name_en = $this->child->childMother->getTranslation('mother_first_name', 'en');
            $this->mother_middle_name_ar = $this->child->childMother->getTranslation('mother_middle_name', 'ar');
            $this->mother_middle_name_en = $this->child->childMother->getTranslation('mother_middle_name', 'en');
            $this->mother_surname_name_ar = $this->child->childMother->getTranslation('mother_surname_name', 'ar');
            $this->mother_surname_name_en = $this->child->childMother->getTranslation('mother_surname_name', 'en');
            $this->mother_work_ar = $this->child->childMother->getTranslation('mother_work', 'ar');
            $this->mother_work_en = $this->child->childMother->getTranslation('mother_work', 'en');
            $this->mother_personal_id = $this->child->childMother->mother_personal_id;
            $this->is_mother_alive = $this->child->childMother->is_mother_alive;
            $this->mother_date_of_death = $this->child->childMother->mother_date_of_death;
            $this->is_mother_the_guardian = $this->child->childMother->is_mother_the_guardian;
        }

        // child guardian
        if ($this->child->childGuardian) {
            $this->guardian_full_name_ar = $this->child->childGuardian->getTranslation('guardian_full_name', 'ar');
            $this->guardian_full_name_en = $this->child->childGuardian->getTranslation('guardian_full_name', 'en');
            $this->guardian_first_name_ar = $this->child->childGuardian->getTranslation('guardian_first_name', 'ar');
            $this->guardian_first_name_en = $this->child->childGuardian->getTranslation('guardian_first_name', 'en');
            $this->guardian_middle_name_ar = $this->child->childGuardian->getTranslation('guardian_middle_name', 'ar');
            $this->guardian_middle_name_en = $this->child->childGuardian->getTranslation('guardian_middle_name', 'en');
            $this->guardian_surname_name_ar = $this->child->childGuardian->getTranslation('guardian_surname_name', 'ar');
            $this->guardian_surname_name_en = $this->child->childGuardian->getTranslation('guardian_surname_name', 'en');
            $this->guardian_work_ar = $this->child->childGuardian->getTranslation('guardian_work', 'ar');
            $this->guardian_work_en = $this->child->childGuardian->getTranslation('guardian_work', 'en');
            $this->guardian_address_ar = $this->child->childGuardian->getTranslation('guardian_address', 'ar');
            $this->guardian_address_en = $this->child->childGuardian->getTranslation('guardian_address', 'en');
            $this->guardian_personal_id = $this->child->childGuardian->guardian_personal_id;
            $this->guardian_birthday = $this->child->childGuardian->guardian_birthday;
            $this->why_not_the_mother_is_guardian = $this->child->childGuardian->why_not_the_mother_is_guardian;
            $this->guardian_relationship_with_the_child = $this->child->childGuardian->guardian_relationship_with_the_child;
        }

        // child files
        if ($this->child->childFile) {
            $this->picture_of_the_orphan_child = $this->child->childFile->picture_of_the_orphan_child;
            $this->orphan_child_birth_certificate = $this->child->childFile->orphan_child_birth_certificate;
            $this->father_death_certificate = $this->child->childFile->father_death_certificate;
            $this->guardian_personal_id_photo = $this->child->childFile->guardian_personal_id_photo;
            $this->child_activity_photo = $this->child->childFile->child_activity_photo;
            $this->child_longitudinal_photo = $this->child->childFile->child_longitudinal_photo;
            $this->child_with_family_photo = $this->child->childFile->child_with_family_photo;
        }

        // child family
        if ($this->child->childFamily) {
            $this->number_of_people_including_mother = $this->child->childFamily->number_of_people_including_mother;
            $this->male_number = $this->child->childFamily->male_number;
            $this->female_number = $this->child->childFamily->female_number;
        }

        // child brother members
        $this->childBrotherMembers = $this->child->childBrotherMembers;

        if ($this->child->childBrotherMembers->count() > 0) {
            foreach ($this->childBrotherMembers as $key => $brotherItem) {
                $this->bortherMembersItems[$key]['member_name_ar'] = $brotherItem->getTranslation('member_name', 'ar');
                $this->bortherMembersItems[$key]['member_name_en'] = $brotherItem->getTranslation('member_name', 'en');
                $this->bortherMembersItems[$key]['member_age'] = $brotherItem->member_age;
                $this->bortherMembersItems[$key]['member_relation'] = $brotherItem->member_relation;
            }
        } else {
            $this->bortherMembersItems[] = ['member_name_ar' => '', 'member_name_en' => '', 'member_age' => '', 'member_relation' => 'borther'];
        }

        // child sister members
        $this->childSisterMembers = $this->child->childSisterMembers;
        if ($this->child->childSisterMembers->count() > 0) {
            foreach ($this->childSisterMembers as $key => $sisterItem) {
                $this->sisterMembersItems[$key]['member_name_ar'] = $sisterItem->getTranslation('member_name', 'ar');
                $this->sisterMembersItems[$key]['member_name_en'] = $sisterItem->getTranslation('member_name', 'en');
                $this->sisterMembersItems[$key]['member_age'] = $sisterItem->member_age;
                $this->sisterMembersItems[$key]['member_relation'] = $sisterItem->member_relation;
            }
        } else {
            $this->sisterMembersItems[] = ['member_name_ar' => '', 'member_name_en' => '', 'member_age' => '', 'member_relation' => 'sister'];
        }

        // // child details
        if ($this->child->childDetails) {
            $this->health_problem_ar = $this->child->childDetails->getTranslation('health_problem', 'ar');
            $this->economic_situation_ar = $this->child->childDetails->getTranslation('economic_situation', 'ar');
            $this->child_progress_ar = $this->child->childDetails->getTranslation('child_progress', 'ar');
            $this->expenses_ar = $this->child->childDetails->getTranslation('expenses', 'ar');
            $this->sponsorship_funds_cover_ar = $this->child->childDetails->getTranslation('sponsorship_funds_cover', 'ar');
            $this->health_problem_en = $this->child->childDetails->getTranslation('health_problem', 'en');
            $this->economic_situation_en = $this->child->childDetails->getTranslation('economic_situation', 'en');
            $this->child_progress_en = $this->child->childDetails->getTranslation('child_progress', 'en');
            $this->expenses_en = $this->child->childDetails->getTranslation('expenses', 'en');
            $this->sponsorship_funds_cover_en = $this->child->childDetails->getTranslation('sponsorship_funds_cover', 'en');
        }
    }

    protected function rules()
    {
        return [
            'personal_id' => ['required', 'numeric', 'digits:9', Rule::unique('children')->ignore($this->child)],
            'father_personal_id' => ['required', 'numeric', 'digits:9'],
            'mother_personal_id' => ['required', 'numeric', 'digits:9'],
            'guardian_personal_id' => ['required', 'numeric', 'digits:9'],
        ];
    }

    // updated hock
    public function updated()
    {
        $this->validate();
        //$this->validateOnly('personal_id'); // use when you need to validate specific input
    }

    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    //  child info
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//

    // child Info Click
    public function childInfoClick()
    {
        $this->currentStep = 1;
    }

    // child info submit
    public function childInfoSubmit()
    {
        $data = [
            'first_name_ar' => ['required', 'string', 'min:3'],
            'father_name_ar' => ['required', 'string', 'min:3'],
            'grand_father_name_ar' => ['required', 'string', 'min:3'],
            'family_name_ar' => ['required', 'string', 'min:3'],
            'first_name_en' => ['required', 'string', 'min:3'],
            'father_name_en' => ['required', 'string', 'min:3'],
            'grand_father_name_en' => ['required', 'string', 'min:3'],
            'family_name_en' => ['required', 'string', 'min:3'],
            'password_confirm' => ['same:password'],
            'personal_id' => ['required', 'numeric', 'digits:9', Rule::unique('children')->ignore($this->child)],
            'birthday' => ['required', 'date'],
            'classification' => ['required'],
            'gender' => ['required'],
            'class' => ['required'],
            'health_status' => ['required'],
            'governoate_id' => ['required', 'exists:governorates,id'],
            'city_id' => ['required', 'exists:cities,id'],
            'address_details' => ['required', 'string', 'min:5'],
            'authorized_contact_number' => ['required', 'string', 'min:5', 'max:10'],
            'backup_contact_number' => ['required', 'string', 'min:5', 'max:10'],
            'whatsApp_number' => ['required', 'string', 'min:5', 'max:14'],
        ];

        if ($this->class != 'under_school_age') {
            $data['school_name'] = ['required', 'string', 'min:3'];
            // $data['school_tel'] = ['required', 'string', 'min:3'];
            $data['school_address'] = ['required', 'string', 'min:3'];
            $data['school_type'] = ['required', 'string', 'min:3'];
            $data['pay_school_fees'] = ['required'];
            // $data['fees_per_month'] = ['required', 'numeric', 'decimal:2,4'];
        }

        if ($this->health_status == 'sick') {
            $data['disease_clarification'] = ['required', 'string', 'min:3'];
            // $data['with_disability'] = ['required', 'in:0,1'];
        }

        if ($this->with_disability) {
            $data['kind_of_disability'] = ['required', 'string', 'min:3'];
        }

        if ($this->pay_school_fees == '1') {
            $data['fees_per_month'] = ['required', 'numeric', 'regex:/^\d{1,5}(\.\d{1,3})?$/'];
        }

        $this->withValidator(function (Validator $validator) {
            if ($validator->fails()) {
                $this->dispatch('scroll-to-top');
            }
        })->validate($data);

        // data
        $childData = [
            'first_name' => ['ar' => $this->first_name_ar, 'en' => $this->first_name_en],
            'father_name' => ['ar' => $this->father_name_ar, 'en' => $this->father_name_en],
            'grand_father_name' => ['ar' => $this->grand_father_name_ar, 'en' => $this->grand_father_name_en],
            'family_name' => ['ar' => $this->family_name_ar, 'en' => $this->family_name_en],
            'password' => $this->password == null ? $this->child->password : $this->password,
            'personal_id' => $this->personal_id,
            'birthday' => $this->birthday,
            'classification' => $this->classification,
            'gender' => $this->gender,
            'class' => $this->class,
            'school_name' => $this->class != 'under_school_age' ? $this->school_name : null,
            'school_address' => $this->class != 'under_school_age' ? $this->school_address : null,
            'school_tel' => $this->class != 'under_school_age' ? $this->school_tel : null,
            'school_type' => $this->class != 'under_school_age' ? $this->school_type : null,
            'pay_school_fees' => $this->class != 'under_school_age' ? $this->pay_school_fees : null,
            'fees_per_month' => $this->class != 'under_school_age' && $this->pay_school_fees == 1 ? $this->fees_per_month : null,
            'health_status' => $this->health_status,
            'disease_clarification' => $this->health_status == 'sick' ? $this->disease_clarification : null,
            'with_disability' => $this->health_status == 'sick' ? $this->with_disability : null,
            'kind_of_disability' => $this->health_status == 'sick' && $this->with_disability ? $this->kind_of_disability : null,
            'governoate_id' => $this->governoate_id,
            'city_id' => $this->city_id,
            'address_details' => $this->address_details,
            'authorized_contact_number' => $this->authorized_contact_number,
            'backup_contact_number' => $this->backup_contact_number,
            'whatsApp_number' => $this->whatsApp_number,
            'sponsership_status_id' => $this->sponsership_status_id ? $this->sponsership_status_id : null,
            'sponsership_organization_id' => $this->sponsership_organization_id ? $this->sponsership_organization_id : null,
            'sponsership_type_id' => $this->sponsership_type_id ? $this->sponsership_type_id : null,
        ];

        $recoredUpdated = $this->childService->childInfoUpdate($this->ChildID, $childData);

        if ($recoredUpdated == 'child_not_found') {
            flash()->error(message: __('children.child_not_found'));
        } elseif ($recoredUpdated == 'save_error') {
            flash()->error(message: __('general.save_error_message'));
        } elseif ($recoredUpdated == 'save_success') {
            flash()->success(message: __('general.save_success_message'));
            $this->statusAlert = ['message' => '', 'type' => ''];
            $this->dispatch('scroll-to-top');
            $this->password = null;
            $this->password_confirm = null;
            $this->lockedPersonalID();
            $this->currentStep = 2;
        }
    }

    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    // parents info
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//

    // parents info click
    public function parentsInfoClick()
    {
        if ($this->ChildID == null) {
            flash()->warning(message: __('children.add_child_before'));
            $this->statusAlert = ['message' => __('children.add_child_before'), 'type' => 'alert-warning'];
        } else {
            $this->currentStep = 2;
        }
    }

    // parents info submit
    public function parentsInfoSubmit()
    {
        $data = [
            // father
            'father_full_name_ar' => ['required', 'string'],
            'father_full_name_en' => ['required', 'string'],
            'father_first_name_ar' => ['required', 'string'],
            'father_first_name_en' => ['required', 'string'],
            'father_middle_name_ar' => ['required', 'string'],
            'father_middle_name_en' => ['required', 'string'],
            'father_surname_name_ar' => ['required', 'string'],
            'father_surname_name_en' => ['required', 'string'],
            'father_work_ar' => ['required', 'string'],
            'father_work_en' => ['required', 'string'],
            'father_personal_id' => ['required', 'numeric', 'digits:9'],
            'father_date_of_death' => ['required', 'date'],
            'father_respon_of_death' => ['required', 'in:illness,martyr'],

            // mother
            'mother_full_name_ar' => ['required', 'string'],
            'mother_full_name_en' => ['required', 'string'],
            'mother_first_name_ar' => ['required', 'string'],
            'mother_first_name_en' => ['required', 'string'],
            'mother_middle_name_ar' => ['required', 'string'],
            'mother_middle_name_en' => ['required', 'string'],
            'mother_surname_name_ar' => ['required', 'string'],
            'mother_surname_name_en' => ['required', 'string'],
            'mother_work_ar' => ['required', 'string'],
            'mother_work_en' => ['required', 'string'],
            'mother_personal_id' => ['required', 'numeric', 'digits:9'],
            'is_mother_alive' => ['required', 'in:0,1'],
            'is_mother_the_guardian' => ['required', 'in:0,1'],
        ];

        if ($this->is_mother_alive == '0') {
            $data['mother_date_of_death'] = ['required', 'date'];
        }

        $this->withValidator(function (Validator $validator) {
            if ($validator->fails()) {
                $this->dispatch('scroll-to-top');
            }
        })->validate($data);

        if ($this->is_mother_the_guardian == 1) {
            $this->guardian_full_name_ar = $this->mother_full_name_ar;
            $this->guardian_full_name_en = $this->mother_full_name_en;
            $this->guardian_first_name_ar = $this->mother_first_name_ar;
            $this->guardian_first_name_en = $this->mother_first_name_en;
            $this->guardian_middle_name_ar = $this->mother_middle_name_ar;
            $this->guardian_middle_name_en = $this->mother_middle_name_en;
            $this->guardian_surname_name_ar = $this->mother_surname_name_ar;
            $this->guardian_surname_name_en = $this->mother_surname_name_en;
            $this->guardian_work_ar = $this->mother_work_ar;
            $this->guardian_work_en = $this->mother_work_en;
            $this->guardian_address_ar = null;
            $this->guardian_address_en = null;
            $this->guardian_personal_id = $this->mother_personal_id;
            $this->guardian_relationship_with_the_child = 'mother';
            $this->why_not_the_mother_is_guardian = null;
            // $this->guardian_birthday = null;
        }
        //  else {
        //     $this->guardian_full_name_ar = $this->child->childGuardian->getTranslation('guardian_full_name', 'ar');
        //     $this->guardian_full_name_en = $this->child->childGuardian->getTranslation('guardian_full_name', 'en');
        //     $this->guardian_first_name_ar = $this->child->childGuardian->getTranslation('guardian_first_name', 'ar');
        //     $this->guardian_first_name_en = $this->child->childGuardian->getTranslation('guardian_first_name', 'en');
        //     $this->guardian_middle_name_ar = $this->child->childGuardian->getTranslation('guardian_middle_name', 'ar');
        //     $this->guardian_middle_name_en = $this->child->childGuardian->getTranslation('guardian_middle_name', 'en');

        //     $this->guardian_surname_name_ar = $this->child->childGuardian->getTranslation('guardian_surname_name', 'ar');
        //     $this->guardian_surname_name_en = $this->child->childGuardian->getTranslation('guardian_surname_name', 'en');
        //     $this->guardian_work_ar = $this->child->childGuardian->getTranslation('guardian_work', 'ar');
        //     $this->guardian_work_en = $this->child->childGuardian->getTranslation('guardian_work', 'en');
        //     $this->guardian_address_ar = $this->child->childGuardian->getTranslation('guardian_address', 'ar');
        //     $this->guardian_address_en = $this->child->childGuardian->getTranslation('guardian_address', 'en');

        //     $this->guardian_personal_id = $this->child->childGuardian->guardian_personal_id;
        //     $this->guardian_birthday = $this->child->childGuardian->guardian_birthday;
        //     $this->why_not_the_mother_is_guardian = $this->child->childGuardian->why_not_the_mother_is_guardian;
        //     $this->guardian_relationship_with_the_child = $this->child->childGuardian->guardian_relationship_with_the_child;
        // }

        // data
        $childFatherData = [
            'child_id' => $this->ChildID,
            'father_full_name' => ['ar' => $this->father_full_name_ar, 'en' => $this->father_full_name_en],
            'father_first_name' => ['ar' => $this->father_first_name_ar, 'en' => $this->father_first_name_en],
            'father_middle_name' => ['ar' => $this->father_middle_name_ar, 'en' => $this->father_middle_name_en],
            'father_surname_name' => ['ar' => $this->father_surname_name_ar, 'en' => $this->father_surname_name_en],
            'father_work' => ['ar' => $this->father_work_ar, 'en' => $this->father_work_en],
            'father_personal_id' => $this->father_personal_id,
            'father_date_of_death' => $this->father_date_of_death,
            'father_respon_of_death' => $this->father_respon_of_death,
        ];

        $childMotherData = [
            'child_id' => $this->ChildID,
            'mother_full_name' => ['ar' => $this->mother_full_name_ar, 'en' => $this->mother_full_name_en],
            'mother_first_name' => ['ar' => $this->mother_first_name_ar, 'en' => $this->mother_first_name_en],
            'mother_middle_name' => ['ar' => $this->mother_middle_name_ar, 'en' => $this->mother_middle_name_en],
            'mother_surname_name' => ['ar' => $this->mother_surname_name_ar, 'en' => $this->mother_surname_name_en],
            'mother_work' => ['ar' => $this->mother_work_ar, 'en' => $this->mother_work_en],
            'mother_personal_id' => $this->mother_personal_id,
            'mother_date_of_death' => $this->mother_date_of_death,
            'is_mother_alive' => $this->is_mother_alive,
            'is_mother_the_guardian' => $this->is_mother_the_guardian,
        ];

        $recoredUpdated = $this->childService->parentsInfoSave($this->ChildID, $childFatherData, $childMotherData);

        if ($recoredUpdated == 'child_not_found') {
            flash()->error(message: __('children.child_not_found'));
        } elseif ($recoredUpdated == 'save_error') {
            flash()->error(message: __('general.save_error_message'));
        } elseif ($recoredUpdated == 'save_success') {
            flash()->success(message: __('general.save_success_message'));
            $this->currentStep = 3;
        }
    }

    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    // family info
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//

    // family info click
    public function familyInfoClick()
    {
        if ($this->ChildID == null) {
            flash()->warning(message: __('children.add_child_before'));
            $this->statusAlert = ['message' => __('children.add_child_before'), 'type' => 'alert-warning'];
        } else {
            $this->currentStep = 3;
        }
    }

    // family info submit
    public function familyInfoSubmit()
    {
        // validations
        $data = [
            'number_of_people_including_mother' => ['required'],
            'male_number' => ['required', 'numeric'],
            'female_number' => ['required', 'numeric'],
        ];

        $this->withValidator(function (Validator $validator) {
            if ($validator->fails()) {
                $this->dispatch('scroll-to-top');
            }
        })->validate($data);

        // data
        // family data
        $childFamilyData = [
            'child_id' => $this->ChildID,
            'number_of_people_including_mother' => $this->number_of_people_including_mother,
            'male_number' => $this->male_number,
            'female_number' => $this->female_number,
        ];

        //child brother Member data
        $childBrotherMemberData = [];
        foreach ($this->bortherMembersItems as $index => $name) {
            $childBrotherMemberData[] = [
                'child_id' => $this->ChildID,
                'member_name' => ['ar' => $this->bortherMembersItems[$index]['member_name_ar'], 'en' => $this->bortherMembersItems[$index]['member_name_en']] ?? null,
                'member_age' => $this->bortherMembersItems[$index]['member_age'] ?? null,
                'member_relation' => 'brother',
            ];
        }

        //child sister Member data
        $childSisterMemberData = [];
        foreach ($this->sisterMembersItems as $index => $name) {
            $childSisterMemberData[] = [
                'child_id' => $this->ChildID,
                'member_name' => ['ar' => $this->sisterMembersItems[$index]['member_name_ar'], 'en' => $this->sisterMembersItems[$index]['member_name_en']] ?? null,
                'member_age' => $this->sisterMembersItems[$index]['member_age'] ?? null,
                'member_relation' => 'sister',
            ];
        }

        $recoredUpdated = $this->childService->familyInfoSave($this->ChildID, $childFamilyData, $childBrotherMemberData, $childSisterMemberData);

        if ($recoredUpdated == 'child_not_found') {
            flash()->error(message: __('children.child_not_found'));
        } elseif ($recoredUpdated == 'save_error') {
            flash()->error(message: __('general.save_error_message'));
        } elseif ($recoredUpdated == 'save_success') {
            flash()->success(message: __('general.save_success_message'));
            $this->currentStep = 4;
        }
    }

    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    // guardian  info
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//

    // guardian info click
    public function guardianInfoClick()
    {
        if ($this->ChildID == null) {
            flash()->warning(message: __('children.add_child_before'));
            $this->statusAlert = ['message' => __('children.add_child_before'), 'type' => 'alert-warning'];
        } else {
            $this->currentStep = 4;
        }
    }

    // guardian info submit
    public function guardianInfoSubmit()
    {
        $data = [
            'guardian_full_name_ar' => ['required', 'string'],
            'guardian_full_name_en' => ['required', 'string'],
            'guardian_first_name_ar' => ['required', 'string'],
            'guardian_first_name_en' => ['required', 'string'],
            'guardian_middle_name_ar' => ['required', 'string'],
            'guardian_middle_name_en' => ['required', 'string'],
            'guardian_surname_name_ar' => ['required', 'string'],
            'guardian_surname_name_en' => ['required', 'string'],
            'guardian_work_ar' => ['required', 'string'],
            'guardian_work_en' => ['required', 'string'],
            // 'guardian_address_ar' => ['required', 'string'],
            // 'guardian_address_en' => ['required', 'string'],
            'guardian_personal_id' => ['required', 'numeric', 'digits:9'],
            'guardian_birthday' => ['required', 'date'],
            'guardian_relationship_with_the_child' => ['required', 'in:mother,uncle,aunt,grandfather,grandmother,brother,sister,uncle2,aunt2'],
        ];

        if ($this->is_mother_the_guardian == 0) {
            $data['why_not_the_mother_is_guardian'] = ['required', 'in:divorced,abandoned,sick,etc'];
        }

        $this->withValidator(function (Validator $validator) {
            if ($validator->fails()) {
                $this->dispatch('scroll-to-top');
            }
        })->validate($data);

        $childGuardianData = [
            'child_id' => $this->ChildID,
            'guardian_full_name' => ['ar' => $this->guardian_full_name_ar, 'en' => $this->guardian_full_name_en],
            'guardian_first_name' => ['ar' => $this->guardian_first_name_ar, 'en' => $this->guardian_first_name_en],
            'guardian_middle_name' => ['ar' => $this->guardian_middle_name_ar, 'en' => $this->guardian_middle_name_en],
            'guardian_surname_name' => ['ar' => $this->guardian_surname_name_ar, 'en' => $this->guardian_surname_name_en],
            'guardian_work' => ['ar' => $this->guardian_work_ar, 'en' => $this->guardian_work_en],
            'guardian_address' => ['ar' => $this->guardian_address_ar, 'en' => $this->guardian_address_en],
            'guardian_personal_id' => $this->guardian_personal_id,
            'guardian_birthday' => $this->guardian_birthday,
            'guardian_relationship_with_the_child' => $this->guardian_relationship_with_the_child,
            'why_not_the_mother_is_guardian' => $this->is_mother_the_guardian == 1 ? null : $this->why_not_the_mother_is_guardian,
        ];

        $recoredUpdated = $this->childService->guardianInfoSave($this->ChildID, $childGuardianData);

        if ($recoredUpdated == 'child_not_found') {
            flash()->error(message: __('children.child_not_found'));
        } elseif ($recoredUpdated == 'save_error') {
            flash()->error(message: __('general.save_error_message'));
        } elseif ($recoredUpdated == 'save_success') {
            flash()->success(message: __('general.save_success_message'));
            $this->currentStep = 5;
        }
    }

    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    // details  info
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    // details info Click
    public function detailsInfoClick()
    {
        if ($this->ChildID == null) {
            flash()->warning(message: __('children.add_child_before'));
            $this->statusAlert = ['message' => __('children.add_child_before'), 'type' => 'alert-warning'];
        } else {
            $this->currentStep = 5;
        }
    }

    // details info submit
    public function detailsInfoSubmit()
    {
        $data = [
            // 'health_problem_ar' => ['required', 'string'],
            // 'economic_situation_ar' => ['required', 'string'],
            // 'child_progress_ar' => ['required', 'string'],
            // 'expenses_ar' => ['required', 'string'],
            // 'sponsorship_funds_cover_ar' => ['required', 'string'],
        ];

        if (admin()->check()) {
            // $data['health_problem_en'] = ['required', 'string'];
            // $data['economic_situation_en'] = ['required', 'string'];
            // $data['child_progress_en'] = ['required', 'string'];
            // $data['expenses_en'] = ['required', 'string'];
            // $data['sponsorship_funds_cover_en'] = ['required', 'string'];
        }

        //  $this->withValidator(function (Validator $validator) {
        //     if ($validator->fails()) {
        //         $this->dispatch('scroll-to-top');
        //     }
        // })->validate($data);

        $childDetailsData = [
            'child_id' => $this->ChildID,
            'health_problem' => ['ar' => $this->health_problem_ar ?? '', 'en' => $this->health_problem_en ?? ''],
            'economic_situation' => ['ar' => $this->economic_situation_ar ?? '', 'en' => $this->economic_situation_en ?? ''],
            'child_progress' => ['ar' => $this->child_progress_ar ?? '', 'en' => $this->child_progress_en ?? ''],
            'expenses' => ['ar' => $this->expenses_ar ?? '', 'en' => $this->expenses_en ?? ''],
            'sponsorship_funds_cover' => ['ar' => $this->sponsorship_funds_cover_ar ?? '', 'en' => $this->sponsorship_funds_cover_en ?? ''],
        ];

        $recoredUpdated = $this->childService->detailsInfoSave($this->ChildID, $childDetailsData);

        if ($recoredUpdated == 'child_not_found') {
            flash()->error(message: __('children.child_not_found'));
        } elseif ($recoredUpdated == 'save_error') {
            flash()->error(message: __('general.save_error_message'));
        } elseif ($recoredUpdated == 'save_success') {
            flash()->success(message: __('general.save_success_message'));
            $this->dispatch('scroll-to-top');
            $this->currentStep = 6;
        }
    }

    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    // files info
    //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
    // files Click
    public function filesClick()
    {
        if ($this->ChildID == null) {
            flash()->warning(message: __('children.add_child_before'));
            $this->statusAlert = ['message' => __('children.add_child_before'), 'type' => 'alert-warning'];
        } else {
            $this->currentStep = 6;
        }
    }

    // files submit
    public function filesSubmit()
    {
        // validation
        $data = [
            // 'picture_of_the_orphan_child' => ['required', 'mimes:png,jpg,jpeg'],
            // 'orphan_child_birth_certificate' => ['required', 'mimes:png,jpg,jpeg'],
            // 'father_death_certificate' => ['required', 'mimes:png,jpg,jpeg,gif'],
            // 'guardian_personal_id_photo' => ['required', 'mimes:png,jpg,jpeg,gif'],
            // 'child_activity_photo' => ['required', 'mimes:png,jpg,jpeg,gif'],
            // 'child_longitudinal_photo' => ['required', 'mimes:png,jpg,jpeg,gif'],
            // 'child_with_family_photo' => ['required', 'mimes:png,jpg,jpeg,gif'],
        ];

        //  $this->withValidator(function (Validator $validator) {
        //     if ($validator->fails()) {
        //         $this->dispatch('scroll-to-top');
        //     }
        // })->validate($data);

        //data
        $childFileData = [
            'child_id' => $this->ChildID,
            'picture_of_the_orphan_child' => $this->new_picture_of_the_orphan_child,
            'orphan_child_birth_certificate' => $this->new_orphan_child_birth_certificate,
            'father_death_certificate' => $this->new_father_death_certificate,
            'guardian_personal_id_photo' => $this->new_guardian_personal_id_photo,
            'child_activity_photo' => $this->new_child_activity_photo,
            'child_longitudinal_photo' => $this->new_child_longitudinal_photo,
            'child_with_family_photo' => $this->new_child_with_family_photo,
        ];

        $recoredUpdated = $this->childService->filesInfoSave($this->ChildID, $childFileData);

        if ($recoredUpdated == 'child_not_found') {
            flash()->error(message: __('children.child_not_found'));
        } elseif ($recoredUpdated == 'save_error') {
            flash()->error(message: __('general.save_error_message'));
        } elseif ($recoredUpdated == 'save_success') {
            flash()->success(message: __('general.save_success_message'));
            $this->currentStep = 1;
        }
    }

    // back setp
    public function backStep($step)
    {
        $this->currentStep = $step;
    }

    public function unlockPersonalID()
    {
        $this->personalIDReadOnly = 0;
        $this->locked = 'close';
    }

    public function lockedPersonalID()
    {
        $this->personalIDReadOnly = 1;
        $this->locked = 'open';
    }
    public function changeGovernorate($id)
    {
        if ($id != 0) {
            $this->cities = [];
            $this->city_id = 0;
            $this->cities = $this->governorateService->getAllCitiesbyGovernorate($id);
        } else {
            $this->city_id = 0;
            $this->cities = [];
        }
    }

    //  change changeClass
    public function changeClass($value)
    {
        if ($value == 'under_school_age') {
            $this->school_name = null;
            $this->school_tel = null;
            $this->school_address = null;
            $this->school_type = null;
            $this->pay_school_fees = null;
            $this->fees_per_month = null;
        }
    }
    //  change health status
    public function changeHealthStatus($value)
    {
        if ($value == 'good') {
            $this->disease_clarification = null;
            $this->with_disability = null;
            $this->kind_of_disability = null;
        }
    }

    // change with disability
    public function changeWithDisability($value)
    {
        if ($value == 1) {
            $this->kind_of_disability = null;
        }
    }

    // change is mother alive
    public function changeIsMotherAlive($value)
    {
        if ($value == 1) {
            $this->mother_date_of_death = null;
        }
    }

    public function doesFamilyPayFees($value)
    {
        if ($value == 0) {
            $this->fees_per_month = null;
        }
    }

    // change is mother the guardian
    public function changeIsMotherTheGuardain($value)
    {
        if ($value == 1) {
            // $this->guardian_address_ar = null;
            // $this->guardian_address_en = null;
            // $this->guardian_personal_id = $this->mother_personal_id;
            // $this->guardian_relationship_with_the_child = 'mother';
            // $this->why_not_the_mother_is_guardian = null;
            // $this->guardian_birthday = null;
            $this->is_mother_alive = 1;
        } else {
            // $this->guardian_full_name_ar = $this->child->childGuardian->getTranslation('guardian_full_name', 'ar');
            // $this->guardian_full_name_en = $this->child->childGuardian->getTranslation('guardian_full_name', 'en');
            // $this->guardian_personal_id = $this->child->childGuardian->guardian_personal_id;
            // $this->guardian_birthday = $this->child->childGuardian->guardian_birthday;
            // $this->why_not_the_mother_is_guardian = $this->child->childGuardian->why_not_the_mother_is_guardian;
            // $this->guardian_relationship_with_the_child = $this->child->childGuardian->guardian_relationship_with_the_child;
            $this->is_mother_alive = null;
        }
    }

    // add new brother member
    public function addNewBrotherMember()
    {
        $this->bortherMembersItems[] = ['member_name_ar' => '', 'member_name_en' => '', 'member_age' => '', 'member_relation' => 'brother'];
    }

    // remove bother member
    public function removeBrotherMember($index)
    {
        if (count($this->bortherMembersItems) == 1) {
            $this->bortherMembersItems[$index] = ['member_name_ar' => '', 'member_name_en' => '', 'member_age' => '', 'member_relation' => 'brother'];
        }

        if (count($this->bortherMembersItems) > 1) {
            unset($this->bortherMembersItems[$index]);
        }
    }

    // add new sister member
    public function addNewSisterMember()
    {
        $this->sisterMembersItems[] = ['member_name_ar' => '', 'member_name_en' => '', 'member_age' => '', 'member_relation' => 'sister'];
    }

    // remove sister member
    public function removeSisterMember($index)
    {
        if (count($this->sisterMembersItems) == 1) {
            $this->sisterMembersItems[$index] = ['member_name_ar' => '', 'member_name_en' => '', 'member_age' => '', 'member_relation' => 'sister'];
        }

        if (count($this->sisterMembersItems) > 1) {
            unset($this->sisterMembersItems[$index]);
        }
    }

    // render
    public function render()
    {
        return view('livewire.dashboard.child.edit-child');
    }
}
