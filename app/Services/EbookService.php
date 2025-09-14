<?php

namespace App\Services;

use App\Http\Requests\Ebook\StoreEbookRequest;
use App\Http\Requests\Ebook\UpdateEbookRequest;
use App\Models\Ebook;
use App\Services\Utils\FileService;

class EbookService
{
    public function __construct(protected FileService $fileService)
    {
    }

    public function getEbookById($id)
    {
        return Ebook::findOrFail($id);
    }

    public function store(StoreEbookRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->user()->id;

        // upload image
        $data['image'] = $request->hasFile('image') ? $this->fileService->upload($request->file('image'), 'ebook/images') : null;

        // upload file
        $data['ebook_file'] = $request->hasFile('ebook_file') ? $this->fileService->upload($request->file('ebook_file'), 'ebook/files') : null;

        // store
        return Ebook::create($data);
    }

    public function update(UpdateEbookRequest $request, $id)
    {
        $ebook = $this->getEbookById($id);

        $data = $request->validated();

        // image upload
        if ($request->hasFile('image')) {
            //delete file from located storage

            $this->fileService->delete($ebook->image);

            $data['image'] = $this->fileService->upload($request->file('image'), 'ebook/images');
        } else {

            $data['image'] = $ebook->image;
        }

        // upload file
        if ($request->hasFile('ebook_file')) {
            //delete file from located storage
            $this->fileService->delete($ebook->image);

            $data['ebook_file'] = $this->fileService->upload($request->file('ebook_file'), 'ebook/files');
        } else {

            $data['ebook_file'] = $ebook->image;
        }

        return $ebook->update($data);
    }

    public function delete($id)
    {
        $ebook = $this->getEbookById($id);

        $this->fileService->delete($ebook->image);

        if ($ebook->ebook_file) {
            $this->fileService->delete($ebook->ebook_file);
        }

        return $ebook->delete();
    }
}
