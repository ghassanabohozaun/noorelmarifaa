<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Child;
use App\Models\City;
use App\Services\Dashboard\ChildService;
use App\Services\Dashboard\CityService;
use App\Services\Dashboard\GovernorateService;
use App\Services\Dashboard\SponsershipOrganizationService;
use App\Services\Dashboard\SponsershipStatusService;
use App\Services\Dashboard\SponsershipTypeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\Storage;
use PDF;

use function Symfony\Component\Clock\now;

class ChildernController extends Controller
{
    protected $childService, $governorateService, $cityService, $sponsershipOrganizationService, $sponsershipStatusService, $sponsershipTypeService;
    // __construct
    public function __construct(ChildService $childService, GovernorateService $governorateService, CityService $cityService, SponsershipOrganizationService $sponsershipOrganizationService, SponsershipStatusService $sponsershipStatusService, SponsershipTypeService $sponsershipTypeService)
    {
        $this->childService = $childService;
        $this->governorateService = $governorateService;
        $this->cityService = $cityService;
        $this->sponsershipOrganizationService = $sponsershipOrganizationService;
        $this->sponsershipStatusService = $sponsershipStatusService;
        $this->sponsershipTypeService = $sponsershipTypeService;
    }

    // index
    public function index(Request $request)
    {
        $title = __('children.show_all_children');
        // $children = $this->childService->getChildrenByPagination();

        $governorates = $this->governorateService->getAllGovernoratesWithoutRelations();
        $cities = $this->cityService->getAllCitiesWithoutRelation();

        $children = $this->childService->getAll($request);

        if ($request->ajax()) {
            return view('dashboard.children.partials._table', compact('children'))->render();
        }

        return view('dashboard.children.index', compact('title', 'children', 'governorates', 'cities'));
    }

    // get All
    public function getAll(Request $request)
    {
        return $this->childService->getAll($request);
    }

    // create
    public function create()
    {
        $title = __('children.create_new_child');
        $governorates = $this->governorateService->getAllGovernoratesWithoutRelations();
        $cities = $this->cityService->getAllCitiesWithoutRelation();
        return view('dashboard.children.create', compact('title', 'governorates', 'cities'));
    }

    // store
    public function store(Request $request)
    {
        //
    }

    // show
    public function show(string $id)
    {
        $child = $this->childService->getChildWithRelations($id);
        if (!$child) {
            flash()->error(__('general.no_record_found'));
            return redirect()->route('dashboard.children.index');
        }

        $title = __('children.show_child');
        $governoates = $this->governorateService->getAllGovernoratesWithoutRelations();
        $cities = $this->cityService->getAllCitiesWithoutRelation();
        $ChildID = $id;
        return view('dashboard.children.profile', compact('title', 'ChildID', 'child'));
    }

    // edit
    public function edit(string $id)
    {
        $child = $this->childService->getChildWithRelations($id);
        if (!$child) {
            flash()->error(__('general.no_record_found'));
            return redirect()->route('dashboard.children.index');
        }
        $title = __('children.update_child');
        $governoates = $this->governorateService->getAllGovernoratesWithoutRelations();
        $cities = $this->cityService->getAllCitiesWithoutRelation();
        $ChildID = $id;
        return view('dashboard.children.edit', compact('title', 'ChildID', 'child'));
    }

    // update
    public function update(Request $request, string $id)
    {
        //
    }

    // destroy
    public function destroy(string $id)
    {
        $child = $this->childService->destoryChild($id);
        if (!$child) {
            return response()->json(['status' => false], 500);
        }
        return response()->json(['status' => true], 200);
    }

    // changeStatus
    public function changeStatus(Request $request)
    {
        if ($request->ajax()) {
            $child = $this->childService->changeStatus($request->id, $request->statusSwitch);
            if (!$child) {
                return response()->json(['status' => false], 500);
            }
            return response()->json(['status' => true], 200);
        }
    }

    // get cities
    public function getCities($governorate_id)
    {
        $cities = City::where('governorate_id', $governorate_id)->pluck('name', 'id');
        return response()->json($cities);
    }

    public function downloadPDF($id)
    {
        $child = $this->childService->getChildWithRelations($id);

        $data = [
            'picture_of_the_orphan_child' => $child->childFile?->picture_of_the_orphan_child ? public_path('uploads/children/' . $child->childFile->picture_of_the_orphan_child) : null,
            'image' => public_path('assets/dashbaord/images/pdf-logo.png'),
            'child' => $child,
        ];

        $pdf = PDF::loadView('dashboard.children.pdf', $data);

        return $pdf->stream($child->childFullName() . '.pdf');
        //  return $pdf->stream($child->childFullName().'.pdf');
    }

    public function downloadPDF2($id)
    {
        $child = $this->childService->getChildWithRelations($id);

        $data = [
            'picture_of_the_orphan_child' => $child->childFile?->picture_of_the_orphan_child ? public_path('uploads/children/' . $child->childFile->picture_of_the_orphan_child) : null,
            'image' => public_path('assets/dashbaord/images/pdf-uk.png'),
            'child' => $child,
        ];

        $pdf = PDF::loadView('dashboard.children.pdf2', $data);

        return $pdf->stream($child->childFullName() . '.pdf');
        //  return $pdf->stream($child->childFullName().'.pdf');
    }

    public function downloadPDF3($id)
    {
        $child = $this->childService->getChildWithRelations($id);

        $data = [
            'picture_of_the_orphan_child' => $child->childFile?->picture_of_the_orphan_child ? public_path('uploads/children/' . $child->childFile->picture_of_the_orphan_child) : null,
            'image' => public_path('assets/dashbaord/images/pdf-uk.png'),
            'child' => $child,
        ];

        $pdf = PDF::loadView('dashboard.children.pdf3', $data);

        return $pdf->stream($child->childFullName() . '.pdf');
        //  return $pdf->stream($child->childFullName().'.pdf');
    }

    public function downloadWordProfile($id)
    {
        $child = $this->childService->getChildWithRelations($id);

        if (!$child) {
            abort(404);
        }

        $templatePath = storage_path('app/word-templates/Donor.docx');

        $template = new TemplateProcessor($templatePath);

        $template->setValue('child_name', $child->childFullName());
        $template->setValue('date_of_birth', $child->birthday ? $child->birthday : 'N/A');
        $template->setValue('child_age', $child->birthday ? \Carbon\Carbon::parse($child->birthday)->age : 'N/A');

        $template->setValue('gender', $child->gender ? $child->gender : 'N/A');
        $template->setValue('child_health', $child->health_status ? $child->health_status : 'Good');
        $template->setValue('child_city', 'Gaza');
        $template->setValue('child_country', 'Palestine');
        $template->setValue('child_class', $child->class ? $child->class : 'N/A');
        $template->setValue('child_school', $child->school_name ? $child->school_name : 'N/A');
        $template->setValue('overall_acadmic_progress', $child->school_name ? $child->school_name : 'N/A');

        $template->setValue('father_name', $child->childFather?->father_full_name ? $child->childFather->father_full_name : 'N/A');
        $template->setValue('mother_name', $child->childMother?->mother_full_name ? $child->childMother->mother_full_name : 'N/A');
        $template->setValue('gurdian_name', $child->childGuardian?->guardian_full_name ? $child->childGuardian->guardian_full_name : 'N/A');
        $template->setValue('gurdian_relation', $child->childGuardian?->guardian_relationship_with_the_child ? $child->childGuardian->guardian_relationship_with_the_child : 'N/A');
        $template->setValue('gurdian_address', $child->address_details ? $child->address_details : 'N/A');
        $template->setValue('child_family_members', $child->childFamily?->number_of_people_including_mother ? $child->childFamily->number_of_people_including_mother : 'N/A');

        if ($child->childFile?->picture_of_the_orphan_child) {
            $template->setImageValue('child_image', [
                'path' => public_path('uploads/children/' . $child->childFile->picture_of_the_orphan_child),
                'width' => 120,
                'height' => 150,
                'ratio' => true,
            ]);
        }
        if ($child->childFile?->child_activity_photo) {
            $template->setImageValue('child_activity_photo', [
                'path' => public_path('uploads/children/' . $child->childFile->child_activity_photo),
                'width' => 500,
                'height' => 350,
                'ratio' => true,
            ]);
        }
        if ($child->childFile?->child_with_family_photo) {
            $template->setImageValue('child_with_family_photo', [
                'path' => public_path('uploads/children/' . $child->childFile->child_with_family_photo),
                'width' => 500,
                'height' => 350,
                'ratio' => true,
            ]);
        }

        $fileName = $child->childFullName() . ' Donor Profile 2025-2026.docx';
        $outputPath = storage_path('app/temp/' . $fileName);

        $template->saveAs($outputPath);

        return response()->download($outputPath)->deleteFileAfterSend(true);
    }

    public function downloadWordInformationForm($id)
    {
        $child = $this->childService->getChildWithRelations($id);

        $template = new TemplateProcessor(storage_path('app/word-templates/uk-form.docx'));

        if ($child->childFile?->picture_of_the_orphan_child) {
            $template->setImageValue('child_image', [
                'path' => public_path('uploads/children/' . $child->childFile->picture_of_the_orphan_child),
                'width' => 180,
                'height' => 180,
                'ratio' => true,
            ]);
        }

        $template->setValue('child_name', $child->childFullName());
        $template->setValue('male', $child->gender == 'male' ? '☑' : '☐');
        $template->setValue('female', $child->gender == 'female' ? '☑' : '☐');
        $template->setValue('date_of_birth', $child->birthday ? $child->birthday : 'N/A');
        $template->setValue('child_age', $child->birthday ? \Carbon\Carbon::parse($child->birthday)->age : 'N/A');

        // address
        $template->setValue('address_details', $child->address_details ? $child->address_details : 'N/A');
        $template->setValue('city', $child->city->name ? $child->city->name : 'N/A');
        $template->setValue('governorate', $child->governorate->name ? $child->governorate->name : 'N/A');
        $template->setValue('child_country', 'Palestine');

        // health
        $template->setValue('with_dis', $child->with_disability == 1 ? '☑' : '☐');
        $template->setValue('no_dis', $child->with_disability == 0 || $child->with_disability == null ? '☑' : '☐');
        $template->setValue('kind_of_disability', $child->kind_of_disability ? $child->kind_of_disability : '');
        $template->setValue('health', $child->health_status == 'good' ? '☑' : '☐');
        $template->setValue('sick', $child->health_status == 'sick' ? '☑' : '☐');
        $template->setValue('disease_clarification', $child->disease_clarification ? $child->disease_clarification : '');

        // school
        $template->setValue('class', $child->class ? $child->class : 'N/A');
        $template->setValue('school_name', $child->school_name ? $child->school_name : 'N/A');
        $template->setValue('school_address', $child->school_address ? $child->school_address : 'N/A');
        $template->setValue('school_tel', $child->school_tel ? $child->school_tel : 'N/A');
        $template->setValue('school_type', $child->school_type ? $child->childSchoolType() : 'N/A');
        $template->setValue('fees', $child->pay_school_fees == 1 ? '☑' : '☐');
        $template->setValue('no_fees', $child->pay_school_fees == 0 || $child->pay_school_fees == null ? '☑' : '☐');
        $template->setValue('fees_per_month', $child->fees_per_month ? $child->fees_per_month : 'N/A');

        // father
        $template->setValue('father_name', $child->childFather?->father_full_name ? $child->childFather->father_full_name : 'N/A');
        $template->setValue('father_first_name', $child->childFather?->father_first_name ? $child->childFather->father_first_name : 'N/A');
        $template->setValue('father_middle_name', $child->childFather?->father_middle_name ? $child->childFather->father_middle_name : 'N/A');
        $template->setValue('father_surname_name', $child->childFather?->father_surname_name ? $child->childFather->father_surname_name : 'N/A');
        $template->setValue('father_work', $child->childFather?->father_date_of_death == null ? $child->childFather?->father_work : $child->childFather?->father_work);
        $template->setValue('father_date_of_death', $child->childFather?->father_date_of_death ? $child->childFather->father_date_of_death : 'N/A');
        $template->setValue('father_respon_of_death', $child->childFather?->father_respon_of_death ? $child->childFather->childFatherResponOfDeath() : 'N/A');

        // mother
        $template->setValue('mother_name', $child->childMother?->mother_full_name ? $child->childMother->mother_full_name : 'N/A');
        $template->setValue('mother_first_name', $child->childMother?->mother_first_name ? $child->childMother->mother_first_name : 'N/A');
        $template->setValue('mother_middle_name', $child->childMother?->mother_middle_name ? $child->childMother->mother_middle_name : 'N/A');
        $template->setValue('mother_surname_name', $child->childMother?->mother_surname_name ? $child->childMother->mother_surname_name : 'N/A');
        $template->setValue('mother_work', $child->childMother?->mother_work ? $child->childMother->mother_work : 'N/A');
        $template->setValue('mother_date_of_death', $child->childMother?->mother_date_of_death ? $child->childMother->mother_date_of_death : 'N/A');
        $template->setValue('mother_guardian', $child->is_mother_the_guardian == 1 ? '☑' : '☐');
        $template->setValue('mother_not_guardian', $child->is_mother_the_guardian == 0 || $child->is_mother_the_guardian == null ? '☑' : '☐');

        //gurdian
        $template->setValue('gurdian_name', $child->childGuardian?->guardian_full_name ? $child->childGuardian->guardian_full_name : 'N/A');
        $template->setValue('guardian_first_name', $child->childGuardian?->guardian_first_name ? $child->childGuardian->guardian_first_name : 'N/A');
        $template->setValue('guardian_middle_name', $child->childGuardian?->guardian_middle_name ? $child->childGuardian->guardian_middle_name : 'N/A');
        $template->setValue('guardian_surname_name', $child->childGuardian?->guardian_surname_name ? $child->childGuardian->guardian_surname_name : 'N/A');
        $template->setValue('gurdian_relation', $child->childGuardian?->guardian_relationship_with_the_child ? $child->childGuardian->childGuardianRelationshipWithTheChild() : 'N/A');
        $template->setValue('guardian_work', $child->childGuardian?->guardian_work ? $child->childGuardian->guardian_work : 'N/A');
        $template->setValue('guardian_address', $child->childGuardian?->guardian_address ? $child->childGuardian->guardian_address : 'N/A');

        // family
        $brothers = $child->childFamily?->male_number ? $child->childFamily->male_number : 0;
        $sisters = $child->childFamily?->female_number ? $child->childFamily->female_number : 0;
        $brotherAndSisterCount = $brothers + $sisters;
        $template->setValue('brotherAndSisterCount', $brotherAndSisterCount);

        // brothers
        $template->setValue('brothers_count', $child->childBrotherMembers?->count() > 0 ? $child->childBrotherMembers->count() : 0);
        $brotherArray = $child->childBrotherMembers?->select('member_name', 'member_age')->toArray() ?? [];
        $template->cloneRowAndSetValues('member_name', $brotherArray);

        // sisters
        $template->setValue('sisters_count', $child->childSisterMembers?->count() > 0 ? $child->childSisterMembers->count() : 0);
        $sistersArray = $child->childSisterMembers?->select('member_name', 'member_age')->toArray() ?? [];
        $template->cloneRowAndSetValues('member_name', $sistersArray);

        // details
        $template->setValue('health_problem', $child->childDetails?->health_problem ? $child->childDetails->health_problem : 'N/A');
        $template->setValue('economic_situation', $child->childDetails?->economic_situation ? $child->childDetails->economic_situation : 'N/A');
        $template->setValue('child_progress', $child->childDetails?->child_progress ? $child->childDetails->child_progress : 'N/A');
        $template->setValue('expenses', $child->childDetails?->expenses ? $child->childDetails->expenses : 'N/A');
        $template->setValue('sponsorship_funds_cover', $child->childDetails?->sponsorship_funds_cover ? $child->childDetails->sponsorship_funds_cover : 'N/A');



        $template->setValue('date_now', date('Y-m-d'));

        $fileName = $child->childFullName() . 'UK Form 2025-2026.doc';

        $outputPath = storage_path('app/temp/' . $fileName);

        $template->saveAs($outputPath);

        return response()->download($outputPath)->deleteFileAfterSend(true);
    }
}
