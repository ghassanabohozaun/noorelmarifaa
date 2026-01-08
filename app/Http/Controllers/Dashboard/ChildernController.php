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
            'picture_of_the_orphan_child' => public_path('uploads/children/' . $child->childFile->picture_of_the_orphan_child),
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
            'picture_of_the_orphan_child' => public_path('uploads/children/' . $child->childFile->picture_of_the_orphan_child),
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
            'picture_of_the_orphan_child' => public_path('uploads/children/' . $child->childFile->picture_of_the_orphan_child),
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

        $templatePath = storage_path(
            'app/word-templates/Donor.docx'
        );

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

        $template->setValue('father_name', $child->childFather->father_full_name ? $child->childFather->father_full_name : 'N/A');
        $template->setValue('mother_name', $child->childMother->mother_full_name ? $child->childMother->mother_full_name : 'N/A');
        $template->setValue('gurdian_name', $child->childGuardian->guardian_full_name ? $child->childGuardian->guardian_full_name : 'N/A');
        $template->setValue('gurdian_relation', $child->childGuardian->guardian_relationship_with_the_child ? $child->childGuardian->guardian_relationship_with_the_child : 'N/A');
        $template->setValue('gurdian_address', $child->address_details ? $child->address_details : 'N/A');
        $template->setValue('child_family_members', $child->childFamily->number_of_people_including_mother ? $child->childFamily->number_of_people_including_mother : 'N/A');

        if ($child->childFile?->picture_of_the_orphan_child) {
            $template->setImageValue('child_image', [
                'path' => public_path('uploads/children/' . $child->childFile->picture_of_the_orphan_child),
                'width' => 120,
                'height' => 150,
                'ratio' => true
            ]);
        }
        if ($child->childFile?->child_activity_photo) {
            $template->setImageValue('child_activity_photo', [
                'path' => public_path('uploads/children/' . $child->childFile->child_activity_photo),
                'width' => 500,
                'height' => 350,
                'ratio' => true
            ]);
        }
        if ($child->childFile?->child_with_family_photo) {
            $template->setImageValue('child_with_family_photo', [
                'path' => public_path('uploads/children/' . $child->childFile->child_with_family_photo),
                'width' => 500,
                'height' => 350,
                'ratio' => true
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

        $template = new TemplateProcessor(
            storage_path('app/word-templates/Information.doc')
        );

       $template->setValue('child_name', $child->childFullName());
        $template->setValue('date_of_birth', $child->birthday ? $child->birthday : 'N/A');
        $template->setValue('child_age', $child->birthday ? \Carbon\Carbon::parse($child->birthday)->age : 'N/A');

        $template->setValue('male_yes', $child->gender=='male' ? '☑' : '☐');
        $template->setValue('male_no',  $child->gender!='male' ? '☐' : '☑');

        $template->setValue('child_health', $child->health_status !='good' ? 'Yes' : 'No');
        $template->setValue('child_health', $child->health_status_g =='good' ? 'Yes' : 'No');
        $template->setValue('health_problem', $child->health_status ? $child->health_status : 'Good');

        $template->setValue('child_health', $child->health_status ? $child->health_status : 'Good');
        $template->setValue('child_city', 'Gaza');
        $template->setValue('child_country', 'Palestine');
        $template->setValue('child_class', $child->class ? $child->class : 'N/A');
        $template->setValue('child_school', $child->school_name ? $child->school_name : 'N/A');
        $template->setValue('overall_acadmic_progress', $child->school_name ? $child->school_name : 'N/A');

        $template->setValue('father_name', $child->childFather->father_full_name ? $child->childFather->father_full_name : 'N/A');
        $template->setValue('mother_name', $child->childMother->mother_full_name ? $child->childMother->mother_full_name : 'N/A');
        $template->setValue('gurdian_name', $child->childGuardian->guardian_full_name ? $child->childGuardian->guardian_full_name : 'N/A');
        $template->setValue('gurdian_relation', $child->childGuardian->guardian_relationship_with_the_child ? $child->childGuardian->guardian_relationship_with_the_child : 'N/A');
        $template->setValue('gurdian_address', $child->address_details ? $child->address_details : 'N/A');
        $template->setValue('child_family_members', $child->childFamily->number_of_people_including_mother ? $child->childFamily->number_of_people_including_mother : 'N/A');

        $fileName = $child->childFullName() . ' Information Form 2025-2026.doc';
        $outputPath = storage_path('app/temp/' . $fileName);

        $template->saveAs($outputPath);

        return response()->download($outputPath)->deleteFileAfterSend(true);
    }
}
