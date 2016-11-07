<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArtController extends Controller
{
    public function upload(Request $request)
    {
        $artFile = $request->file('art'); # gets the uploaded file
        $artFileExtension = strtolower($artFile->extension()); # gets the file's extension
        $acceptedFileTypes = ["png", "jpg", "jpeg"];
        if (in_array($artFileExtension, $acceptedFileTypes)) {
            $cat = $request->input('category'); # gets the category
            $artName = $request->input('art-name'); # gets the title
            $time = new \DateTime(); # gets a date-time to use timestamp
            $fileName = \Auth::user()->id . $time->getTimestamp() . "." . $artFileExtension; # renames the file
            if ($cat == "abstract-art") {
                $artFile->storeAs('public/arts/' . $cat, $fileName);
            } elseif ($cat == "drawings") {
                $artFile->storeAs('public/arts/' . $cat, $fileName);
            } elseif ($cat == "fan-art") {
                $artFile->storeAs('public/arts/' . $cat, $fileName);
            } elseif ($cat == "paintings") {
                $artFile->storeAs('public/arts/' . $cat, $fileName);
            } elseif ($cat == "sketches") {
                $artFile->storeAs('public/arts/' . $cat, $fileName);
            }

            $request->user()->arts()->create([
                'art_file' => $fileName,
                'art_name' => $artName,
                'art_cat' => $cat
            ]);

            $uploadNotice = '<div class="callout success">Successfully uploaded your photo</div>';
            return view('layout.upload', compact('uploadNotice'));
        } else {
            $uploadNotice = '<div class="callout alert">The uploaded photo was not a PNG or JPG file.</div>';
            return view('layout.upload', compact('uploadNotice'));
        }
    }
    public function single($artId = null)
    {
        if ($artId != null) {
            $artUserId = \DB::table('arts')->where('art_id', $artId)->value('user_id');
            $artUserName = \DB::table('users')->where('id', $artUserId)->value('name');
            $artName = \DB::table('arts')->where('art_id', $artId)->value('art_name');
            $artCatUri = \DB::table('arts')->where('art_id', $artId)->value('art_cat');
            $artEndorse = \DB::table('arts')->where('art_id', $artId)->value('art_endorse');
            $artCreated = \DB::table('arts')->where('art_id', $artId)->value('created_at');
            $artFile = \DB::table('arts')->where('art_id', $artId)->value('art_file');
            $artPath = \Storage::url('arts/' . $artCatUri . "/" . $artFile);
            if ($artCatUri == "abstract-art") {
                $artCatName = "Abstract art";
            } elseif ($artCatUri == "drawings") {
                $artCatName = "Drawings";
            } elseif ($artCatUri == "fan-art") {
                $artCatName = "Fan art";
            } elseif ($artCatUri == "paintings") {
                $artCatName = "Paintings";
            } elseif ($artCatUri == "sketches") {
                $artCatName = "Sketches";
            }
            return view('layout.single', compact('artUserName', 'artName', 'artCatUri', 'artCatName', 'artEndorse', 'artPath', 'artFile', 'artCreated'));
        } else {
            return redirect(url('/'));
        }
    }
    public function profileArt(Request $request)
    {
        $arts = \DB::table('arts')->where('user_id', $request->user()->id)->get();
        return view('layout.profile', compact('arts'));
    }
}
