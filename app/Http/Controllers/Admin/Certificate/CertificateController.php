<?php

namespace App\Http\Controllers\Admin\Certificate;

use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Services\Utils\FileService;
use App\Http\Controllers\Controller;

class CertificateController extends Controller
{
    public function __construct(protected FileService $fileService)
    {
        $this->middleware('permission:Edit Certificate|Show Certificate', ['only' => ['index']]);
        $this->middleware('permission:Edit Certificate', ['only' => ['edit', 'update']]);
    }

    public function index()
    {
        set_page_meta('Certificates');

        $data['certificates'] = Certificate::all();

        return view('admin.certificate.index', $data);
    }
    public function edit($uuid)
    {
        $certificate = Certificate::whereUuid($uuid)->firstOrFail();
        return view('admin.certificate.edit', compact('certificate'));
    }

    public function update(Request $request, $uuid)
    {
        $certificate = Certificate::whereUuid($uuid)->firstOrFail();

        $certificate->update([
            'title' => $request->title ?? $certificate->title,
            'website' => $request->website ?? $certificate->website,
            'tel' => $request->tel ?? $certificate->tel,
            'name' => $request->name ?? $certificate->name,
            'body_text' => $request->body_text ?? $certificate->body_text,
            'founder' => $request->founder ?? $certificate->founder,
            'date' => $request->date ?? $certificate->date,
            'signature' => $request->hasFile('signature') ? $this->fileService->upload($request->file('signature'), 'certificate/signatures') :   $certificate->signature,
        ]);

        record_updated_flash('Certificate updated Successfully');

        return back();
    }
}
