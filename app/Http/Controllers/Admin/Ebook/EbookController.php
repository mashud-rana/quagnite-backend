<?php

namespace App\Http\Controllers\Admin\Ebook;

use App\DataTables\Admin\Ebook\EbookDataTable;
use App\DataTables\Admin\Ebook\EbookReserveDataTable;
use App\DataTables\Admin\Ebook\EnrollEbookDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Ebook\StoreEbookRequest;
use App\Http\Requests\Ebook\UpdateEbookRequest;
use App\Models\Ebook;
use App\Models\EbookCategory;
use App\Models\Invoice;
use App\Models\ReserveEbook;
use App\Models\User;
use App\Services\EbookService;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EbookController extends Controller
{
    public function __construct(protected EbookService $ebookService)
    {
        $this->middleware('permission:All Ebooks|Edit Ebook|Create Ebook|Delete Ebook', ['only' => ['index', 'enrollEbooks', 'reserveEbook']]);
        $this->middleware('permission:Create Ebook', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Ebook', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Ebook', ['only' => ['delete']]);
        $this->middleware('permission:Delete Reserve Ebook', ['only' => ['deleteReserveEbook']]);
    }

    public function index(EbookDataTable $dataTable)
    {
        set_page_meta('Ebooks');

        return $dataTable->render('admin.ebook.index');
    }

    public function create()
    {
        set_page_meta('Ebook');

        $data['ebookCategories'] = EbookCategory::all();

        return view('admin.ebook.create', $data);
    }

    public function store(StoreEbookRequest $request)
    {
        try {
            $ebook = $this->ebookService->store($request);

            record_created_flash();

            return redirect()->back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash('An error occurred while storing the ebook.');

            return redirect()->back();
        }
    }

    public function edit($id)
    {
        try {
            set_page_meta('Edit Ebook');

            $data['ebook'] = $this->ebookService->getEbookById($id);
            $data['ebookCategories'] = EbookCategory::all();

            return view('admin.ebook.edit', $data);
        } catch (ModelNotFoundException $e) {
            log_error($e);
            something_wrong_flash('Ebook not found.');

            return redirect()->back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash('An error occurred while editing the ebook.');

            return redirect()->back();
        }
    }

    public function update(UpdateEbookRequest $request, $id)
    {
        try {
            $this->ebookService->update($request, $id);

            record_updated_flash();

            return redirect()->back();
        } catch (ModelNotFoundException $e) {
            log_error($e);
            something_wrong_flash('Ebook not found.');

            return redirect()->back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash('An error occurred while updating the ebook.');

            return redirect()->back();
        }
    }

    public function show($slug)
    {
        set_page_meta('Ebook');

        // Ebook
        $ebook = Ebook::where('slug', $slug)->firstOrFail();
        $path = $ebook->ebook_file;
        $disk = config('settings.storage_driver');

        if (Storage::disk($disk)->exists($path)) {
            $fileContents = Storage::disk($disk)->get($path);
            $mimeType = Storage::disk($disk)->mimeType($path);

            return view('admin.ebook.show', compact('ebook', 'fileContents', 'mimeType'));
        } else {
            return back()->with('error', 'File not found.');
        }
    }

    public function assignReviewer(Request $request)
    {
        try {
            $request->validate([
                'ebook_id' => 'required|exists:ebooks,id',
                'reviewer_id' => 'nullable|exists:users,id',
            ]);

            $ebook = Ebook::findOrFail($request->ebook_id);
            $ebook->reviewer_id = $request->reviewer_id;
            $ebook->save();

            record_updated_flash('Reviewer Add Successfully');

            return redirect()->back();

        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

            return redirect()->back();
        }
    }

    public function delete($id)
    {
        try {
            $this->ebookService->delete($id);

            record_deleted_flash();

            return redirect()->back();
        } catch (ModelNotFoundException $e) {
            log_error($e);
            something_wrong_flash('Ebook not found.');

            return redirect()->back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash('An error occurred while deleting the ebook.');

            return redirect()->back();
        }
    }

    public function enrollEbooks(EnrollEbookDataTable $dataTable)
    {
        set_page_meta('Ebooks Buy History');

        return $dataTable->render('admin.ebook.enroll');
    }

    public function reserveEbook(EbookReserveDataTable $dataTable)
    {
        set_page_meta('Reserve Ebooks');

        return $dataTable->render('admin.ebook.reserve');
    }

    public function deleteReserveEbook($id)
    {
        try {
            ReserveEbook::findOrFail($id)->delete();

            record_deleted_flash();

            return redirect()->back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

            return back();
        }
    }

    public function downloadInvoice($user_id, $ebook_id)
    {
        $student = User::findOrFail($user_id);
        $invoice = Invoice::where('user_id', $user_id)
            ->whereHas('items', function ($query) use ($ebook_id) {
                $query->where('itemable_id', $ebook_id);
            })
            ->firstOrFail();
        $pdf = PDF::loadView('student.invoice.invoice', compact('invoice', 'student'));

        // Download PDF
        return $pdf->download($invoice->invoice_id.'.pdf');
    }
}
