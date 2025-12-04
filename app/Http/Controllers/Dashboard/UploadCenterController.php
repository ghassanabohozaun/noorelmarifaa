<?php

namespace App\Http\Controllers\Dashboard;

use App\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\UploadCenterRequest;
use App\Traits\GeneralTrait;
use App\Utils\ImageManagerUtils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Mpdf\Tag\P;

class UploadCenterController extends Controller
{
    protected $imageManagerUtils;

    public function __construct(ImageManagerUtils $imageManagerUtils)
    {
        $this->imageManagerUtils = $imageManagerUtils;
    }

    // index
    public function index()
    {
        $title = trans('menu.upload_center');
        $files = File::select('id', 'file_name', 'file_mimes_type')->latest()->where('file_type', 'uploadCenter')->paginate(10);
        return view('dashboard.upload-center.index', compact('title', 'files'));
    }

    // store
    public function store(UploadCenterRequest $request)
    {
        if ($request->hasFile('file')) {
            $filePath = $this->imageManagerUtils->uploadSingleImage('', $request->file('file'), 'upload-center');

            $file = new File();
            $file->file_name = $request->file('file')->getClientOriginalName();
            $file->file_size = $request->file('file')->getSize();
            $file->file_path = 'upload_center';
            $file->file_after_upload = $request->file('file')->hashName();
            $file->full_path_after_upload = $filePath;
            $file->file_mimes_type = $request->file('file')->getMimeType();
            $file->file_type = 'uploadCenter';
            $file->relation_id = 'uploadCenter';
            $file->save();

            return response()->json(['status' => true], 201);
        } else {
            return response()->json(['status' => false], 500);
        }
    }

    // destroy
    public function destroy(Request $request)
    {
        try {
            $file = File::find($request->id);

            if (!$file) {
                return redirect()->back();
            }

            if (!empty($file->full_path_after_upload)) {
                $this->imageManagerUtils->removeImageFromLocal($file->full_path_after_upload, 'upload-center');
            }

            if ($file->delete()) {
                return response()->json(['status' => true], 200);
            } else {
                return response()->json(['status' => false], 500);
            }
        } catch (\Exception $exception) {
            return response()->json(['status' => false], 500);
        }
    }

    // get by id
    public function getUploadCenterFileById(Request $request)
    {
        $file = File::find($request->id);
        if (!$file) {
            return redirect()->back();
        }
        return response()->json(['status' => true, 'data' => $file]);
    }
}
