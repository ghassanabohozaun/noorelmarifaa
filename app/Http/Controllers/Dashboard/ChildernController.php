<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\ChildrenExport;
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
use Maatwebsite\Excel\Facades\Excel;
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
    public function index()
    {
        $title = __('children.show_all_children');
        $governorates = $this->governorateService->getAllGovernoratesWithoutRelations();
        $cities = $this->cityService->getAllCitiesWithoutRelation();
        return view('dashboard.children.index', compact('title', 'governorates', 'cities'));
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
        return view('dashboard.children.show', compact('title', 'ChildID', 'child'));
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

    // get cities
    public function getCities($governorate_id)
    {
        $cities = City::where('governorate_id', $governorate_id)->pluck('name', 'id');
        return response()->json($cities);
    }


        public function export(Request $request)
    {
        $selectedColumns = $request->input('columns', ['id','first_name', 'father_name', 'grand_father_name', 'family_name', 'personal_id']);

        return Excel::download(new ChildrenExport(Child::get(), $selectedColumns), 'children.xlsx');

        // $filters = $request->only(['status']); // Get filters from request
        // $selectedColumns = $request->input('columns', ['id', 'name']); // Get selected columns from request
        //  return Excel::download(new AdminsExport($filters, $selectedColumns), 'dynamic_users.xlsx');
    }

}
