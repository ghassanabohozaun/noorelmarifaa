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

class CreateChild extends Component
{
    use WithFileUploads;
    public $currentStep = 1;
    public $activeTab = 'child_info_tab';
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
    public function mount($governorates, $cities)
    {
        $this->child = new Child();
        $this->governorates = $governorates;
        $this->cities = $cities;
        $this->governoate_id ?? ($this->cities = []);
    }

    // set active tab
    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
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

    // first step
    public function firstStepSubmit()
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
            'password' => ['required:id'],
            'password_confirm' => ['required:id', 'same:password'],
            'personal_id' => ['required', 'numeric', 'digits:9', Rule::unique('children')->ignore($this->child)],
            'birthday' => ['required', 'date'],
            'classification' => ['required'],
            'gender' => ['required'],
            'class' => ['required'],
            'health_status' => ['required'],
            'governoate_id' => ['required', 'exists:governorates,id'],
            'city_id' => ['required', 'exists:cities,id'],
            'address_details' => ['required', 'string', 'min:5'],
            'authorized_contact_number' => ['required', 'string', 'min:5'],
            'backup_contact_number' => ['required', 'string', 'min:5'],
            'whatsApp_number' => ['required', 'string', 'min:5'],
        ];
        if ($this->health_status == 'sick') {
            $data['disease_clarification'] = ['required', 'string', 'min:5'];
        }
        $this->validate($data);

        $this->currentStep = 2;
    }

    // second step
    public function secondStepSubmit()
    {
        $data = [
            'number_of_people_including_mother' => ['required'],
            'male_number' => ['required', 'numeric'],
            'female_number' => ['required', 'numeric'],
            'father_full_name_ar' => ['required', 'string'],
            'father_full_name_en' => ['required', 'string'],
            'father_personal_id' => ['required', 'numeric', 'digits:9'],
            'father_date_of_death' => ['required', 'date'],
            'father_respon_of_death' => ['required', 'in:illness,martyr'],
            'mother_full_name_ar' => ['required', 'string'],
            'mother_full_name_en' => ['required', 'string'],
            'mother_personal_id' => ['required', 'numeric', 'digits:9'],
            'is_mother_alive' => ['required', 'in:0,1'],
            'is_mother_the_guardian' => ['required', 'in:0,1'],
        ];

        if ($this->is_mother_alive == '0') {
            $data['mother_date_of_death'] = ['required', 'date'];
        }

        $this->validate($data);

        if ($this->is_mother_the_guardian == 1) {
            $this->guardian_full_name_ar = $this->mother_full_name_ar;
            $this->guardian_full_name_en = $this->mother_full_name_en;
            $this->guardian_personal_id = $this->mother_personal_id;
            $this->guardian_relationship_with_the_child = 'mother';
        } else {
            $this->guardian_full_name_ar = null;
            $this->guardian_full_name_en = null;
            $this->guardian_personal_id = null;
            $this->guardian_relationship_with_the_child = null;
            $this->guardian_birthday = null;
            $this->why_not_the_mother_is_guardian = null;
        }

        $this->currentStep = 3;
    }

    // third step
    public function thirdStepSubmit()
    {
        $data = [
            'guardian_full_name_ar' => ['required', 'string'],
            'guardian_full_name_en' => ['required', 'string'],
            'guardian_personal_id' => ['required', 'numeric', 'digits:9'],
            'guardian_birthday' => ['required', 'date'],
            'guardian_relationship_with_the_child' => ['required', 'in:mother,uncle,aunt,grandfather,grandmother,brother,sister,uncle2,aunt2'],
        ];

        if ($this->is_mother_the_guardian == 0) {
            $data['why_not_the_mother_is_guardian'] = ['required', 'in:divorced,abandoned,sick,etc'];
        }

        $this->validate($data);

        $this->currentStep = 4;
    }

    public function forthStep()
    {
        $this->validate([
            'picture_of_the_orphan_child' => ['required', 'mimes:png,jpg,jpeg,gif,pdf', 'max:2024'],
            'orphan_child_birth_certificate' => ['required', 'mimes:png,jpg,jpeg,gif,pdf', 'max:2024'],
            'father_death_certificate' => ['required', 'mimes:png,jpg,jpeg,gif,pdf', 'max:2024'],
            'guardian_personal_id_photo' => ['required', 'mimes:png,jpg,jpeg,gif,pdf', 'max:2024'],
        ]);

        $this->currentStep = 5;
    }

    // back setp
    public function backStep($step)
    {
        $this->currentStep = $step;
    }

    public function submitForm()
    {
        $childData = [
            'first_name' => ['ar' => $this->first_name_ar, 'en' => $this->first_name_en],
            'father_name' => ['ar' => $this->father_name_ar, 'en' => $this->father_name_en],
            'grand_father_name' => ['ar' => $this->grand_father_name_ar, 'en' => $this->grand_father_name_en],
            'family_name' => ['ar' => $this->family_name_ar, 'en' => $this->family_name_en],
            'password' => $this->password,
            'personal_id' => $this->personal_id,
            'birthday' => $this->birthday,
            'classification' => $this->classification,
            'gender' => $this->gender,
            'class' => $this->class,
            'health_status' => $this->health_status,
            'disease_clarification' => $this->health_status == 'sick' ? $this->disease_clarification : null,
            'governoate_id' => $this->governoate_id,
            'city_id' => $this->city_id,
            'address_details' => $this->address_details,
            'authorized_contact_number' => $this->authorized_contact_number,
            'backup_contact_number' => $this->backup_contact_number,
            'whatsApp_number' => $this->whatsApp_number,
        ];

        $childFamilyData = [
            'number_of_people_including_mother' => $this->number_of_people_including_mother,
            'male_number' => $this->male_number,
            'female_number' => $this->female_number,
        ];

        $childFatherData = [
            'father_full_name' => ['ar' => $this->father_full_name_ar, 'en' => $this->father_full_name_en],
            'father_personal_id' => $this->father_personal_id,
            'father_date_of_death' => $this->father_date_of_death,
            'father_respon_of_death' => $this->father_respon_of_death,
        ];

        $childMotherData = [
            'mother_full_name' => ['ar' => $this->mother_full_name_ar, 'en' => $this->mother_full_name_en],
            'mother_personal_id' => $this->mother_personal_id,
            'mother_date_of_death' => $this->mother_date_of_death,
            'is_mother_alive' => $this->is_mother_alive,
            'is_mother_the_guardian' => $this->is_mother_the_guardian,
        ];

        $childGuaridanData = [
            'guardian_full_name' => ['ar' => $this->guardian_full_name_ar, 'en' => $this->guardian_full_name_en],
            'guardian_personal_id' => $this->guardian_personal_id,
            'guardian_birthday' => $this->guardian_birthday,
            'why_not_the_mother_is_guardian' => $this->why_not_the_mother_is_guardian,
            'guardian_relationship_with_the_child' => $this->guardian_relationship_with_the_child,
        ];

        $childFileData = [
            'picture_of_the_orphan_child' => $this->picture_of_the_orphan_child,
            'orphan_child_birth_certificate' => $this->orphan_child_birth_certificate,
            'father_death_certificate' => $this->father_death_certificate,
            'guardian_personal_id_photo' => $this->guardian_personal_id_photo,
        ];

        $childCreated = $this->childService->createChild($childData, $childFamilyData, $childFatherData, $childMotherData, $childGuaridanData, $childFileData);

        if (!$childCreated) {
            flash()->error(message: __('general.add_error_message'));
            $this->currentStep = 1;
        } else {
            flash()->success(message: __('general.add_success_message'));
            //$this->resetExcept(['categories', 'brands', 'successMessage']);
            $this->currentStep = 1;
        }
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

    //  change health status
    public function changeHealthStatus($value)
    {
        if ($value == 'good') {
            $this->disease_clarification = null;
        }
    }

      // change is mother alive
    public function changeIsMotherAlive($value)
    {
        if ($value == 1) {
            $this->mother_date_of_death = null;
        }
    }

    // change is mother the guardian
    public function changeIsMotherTheGuardain($value)
    {
        if ($value == 1) {
            $this->guardian_full_name_ar = $this->mother_full_name_ar;
            $this->guardian_full_name_en = $this->mother_full_name_en;
            $this->guardian_personal_id = $this->mother_personal_id;
            $this->guardian_relationship_with_the_child = 'mother';
        } else {
            $this->guardian_full_name_ar = null;
            $this->guardian_full_name_en = null;
            $this->guardian_personal_id = null;
            $this->guardian_relationship_with_the_child = null;
            $this->guardian_birthday = null;
            $this->why_not_the_mother_is_guardian = null;
        }
    }
    // render
    public function render()
    {
        return view('livewire.dashboard.child.create-child', [
            'governorates' => $this->governorates,
            'cities' => $this->cities,
        ]);
    }
}
