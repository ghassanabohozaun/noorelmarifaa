<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\Dashboard\GovernorateService;
use Illuminate\Http\Request;
use App\Exports\ChildrenExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use App\Models\Child;


class ChildrenReportsController extends Controller
{

    protected $governorateService ;

    public function __construct(GovernorateService $governorateService)
    {
        $this->governorateService   = $governorateService;
    }


        // show report
    public function showReport()
    {
        $title = __('children.reports');

        $childColumnNames = $this->childColumnNamesFunction();
        $familyCloumnNames = $this->columnNamesFunction('child_families');
        $fatherCloumnNames = $this->columnNamesFunction('child_fathers');
        $motherCloumnNames = $this->columnNamesFunction('child_mothers');
        $guardianCloumnNames = $this->columnNamesFunction('child_guardians');
        $governorates = $this->governorateService->getAllGovernoratesWithoutRelations();

        return view('dashboard.children.report', compact('title', 'childColumnNames', 'familyCloumnNames', 'fatherCloumnNames', 'motherCloumnNames', 'guardianCloumnNames', 'governorates'));
    }


    public function exportExcel(Request $request)
    {
        $filters = $request->except(['_token']);

        if (empty($filters['columns'])) {
            $selectedColumns = ['id', 'first_name', 'father_name', 'grand_father_name', 'family_name','personal_id', 'classification', 'gender', 'health_status', 'city_id', 'governoate_id', 'guardian_full_name'];
        } else {
            $selectedColumns = $request->input('columns', $filters);
        }

        $fileName = 'children_' . now() . '.xlsx';
        return Excel::download(new ChildrenExport(Child::with(['childFile', 'childFamily', 'childFather', 'childMother', 'childGuardian', 'childFile', 'governorate', 'city'])->get(), $selectedColumns, $filters), $fileName);
    }

    //  child columns name function
    public function childColumnNamesFunction()
    {
        // fliter children columns
        $tableName = 'children';
        $excludedColumns = ['deleted_at', 'updated_at', 'password', 'disease_clarification', 'backup_contact_number', 'status', 'freeze', 'created_at'];
        $allCloumnsNames = DB::getSchemaBuilder()->getColumnListing($tableName);
        $columnNames = collect($allCloumnsNames)
            ->filter(function ($column) use ($excludedColumns) {
                return !in_array($column, $excludedColumns);
            })
            ->values()
            ->toArray();

        return $columnNames;
    }

    //  father columns name function
    public function columnNamesFunction($tableName)
    {
        $excludedColumns = ['id', 'created_at', 'child_id', 'deleted_at', 'updated_at'];
        $allCloumnsNames = DB::getSchemaBuilder()->getColumnListing($tableName);
        $columnNames = collect($allCloumnsNames)
            ->filter(function ($column) use ($excludedColumns) {
                return !in_array($column, $excludedColumns);
            })
            ->values()
            ->toArray();

        return $columnNames;
    }

}
