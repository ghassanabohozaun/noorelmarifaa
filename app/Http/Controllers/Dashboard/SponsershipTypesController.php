<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SponsershipTypeRequest;
use App\Services\Dashboard\SponsershipOrganizationService;
use App\Services\Dashboard\SponsershipTypeService;
use Illuminate\Http\Request;

class SponsershipTypesController extends Controller
{
    protected $sponsershipTypeService , $sponsershipOrganizationService;
    // __construct
    public function __construct(SponsershipTypeService $sponsershipTypeService , SponsershipOrganizationService $sponsershipOrganizationService)
    {
        $this->sponsershipTypeService = $sponsershipTypeService;
        $this->sponsershipOrganizationService = $sponsershipOrganizationService;
    }

    // index
    public function index()
    {
        $title = __('sponsership.sponsershipTypes');
        $types = $this->sponsershipTypeService->getAll();
        $organizations = $this->sponsershipOrganizationService->getActive();
        return view('dashboard.sponsership.types.index', compact('title', 'types','organizations'));
    }

    // create
    public function create()
    {
        //
    }

    // store
    public function store(SponsershipTypeRequest $request)
    {
        $data = $request->only(['sponsership_organization_id', 'name']);
        $status = $this->sponsershipTypeService->create($data);
        if (!$status) {
            return response()->json(['status' => false], 500);
        }
        return response()->json(['status' => true, 'data' => $status], 201);
    }

    // show
    public function show(string $id)
    {
        //
    }

    // edit
    public function edit(string $id)
    {
        //
    }

    // update
    public function update(SponsershipTypeRequest $request, string $id)
    {
        $data = $request->only(['id', 'sponsership_organization_id', 'name']);
        $status = $this->sponsershipTypeService->update($data);
        if (!$status) {
            return response()->json(['status' => false], 500);
        }
        return response()->json(['status' => true, 'data' => $status], 200);
    }

    // destroy
    public function destroy(Request $request)
    {
        if ($request->ajax()) {
            $status = $this->sponsershipTypeService->destroy($request->id);
            if (!$status) {
                return response()->json(['status' => false], 500);
            }
            return response()->json(['status' => true, 'data' => $status], 200);
        }
    }

    // change status
    public function changeStatus(Request $request)
    {
        if ($request->ajax()) {
            $status = $this->sponsershipTypeService->changeStatus($request->id, $request->statusSwitch);
            if (!$status) {
                return response()->json(['status' => false], 500);
            }
            $status = $this->sponsershipTypeService->getOne($request->id);
            return response()->json(['status' => true, 'data' => $status], 200);
        }
    }
}
