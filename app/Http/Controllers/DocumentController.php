<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ($request->type == 'video') {
            $videoFields = $request->validate([
                "section_id" => "required",
                "document" => "required | mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi",
                "type" => "required",
            ]);
            if ($request->hasFile('document')) {
                $videoFields['path'] = $request->file('document')->store('videos', 'public');
            }
            Document::create($videoFields);
        } else {
            $formFields = $request->validate([
                "section_id" => "required",
                "document" => "required | image",
                "type" => "required",
            ]);
            if ($request->hasFile('document')) {
                $formFields['path'] = $request->file('document')->store('images', 'public');
            }
            Document::create($formFields);
        }
        return back()->with('msg', 'Image Has Been Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {

        Document::destroy($document->id);
        Storage::disk('public')->delete($document->path);

        return back()->with('msg', 'Video Has Been Deleted Successfully');
    }
}
