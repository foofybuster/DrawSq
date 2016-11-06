<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
                $artFile->storeAs('arts/' . $cat, $fileName);
            } elseif ($cat == "drawings") {
                $artFile->storeAs('arts/' . $cat, $fileName);
            } elseif ($cat == "fan-art") {
                $artFile->storeAs('arts/' . $cat, $fileName);
            } elseif ($cat == "paintings") {
                $artFile->storeAs('arts/' . $cat, $fileName);
            } elseif ($cat == "sketches") {
                $artFile->storeAs('arts/' . $cat, $fileName);
            }

            $filePath = "arts/" . $cat . "/" . $fileName;
            $request->user()->arts()->create([
                'art_file' => $filePath,
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
            #$artUserName = \DB::table('users')->where('art_id', $artUserId)->value('name');
            $artName = \DB::table('arts')->where('art_id', $artId)->value('art_name');
            $artCat = \DB::table('arts')->where('art_id', $artId)->value('art_cat');
            $artEndorse = \DB::table('arts')->where('art_id', $artId)->value('art_endorse');
            $artFile = \DB::table('arts')->where('art_id', $artId)->value('art_file');
            return view('layout.single', compact('artName', 'artCat', 'artEndorse', 'artFile'));
        } else {
            return redirect(url('/'));
        }
    }
}
