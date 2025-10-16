<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\Dashboard\ChildService;
use App\Services\Dashboard\CityService;
use App\Services\Dashboard\GovernorateService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $childService, $governorateService, $cityService;
    public function __construct(ChildService $childService, GovernorateService $governorateService, CityService $cityService)
    {
        $this->childService = $childService;
        $this->governorateService = $governorateService;
        $this->cityService = $cityService;
    }
    public function index()
    {
        $children = $this->childService->getChildren();
        $title = __('dashboard.dashboard');
        return view('dashboard.index', compact('children', 'title'));
    }

    // addresses
    public function addresses()
    {
        $governorates = $this->governorateService->getAllGovernoratesWithoutRelations();
        $cities = $this->cityService->getAllCitiesWithoutRelation();
        return view('dashboard.address', compact('governorates', 'cities'));
    }
}
