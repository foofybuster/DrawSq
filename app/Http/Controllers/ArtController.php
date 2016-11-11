<?php

namespace App\Http\Controllers;

use Request;
use App\Art;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArtController extends Controller
{
    public function upload()
    {
        $artFile = Request::file('art'); # gets the uploaded file
        $artFileExtension = strtolower($artFile->extension()); # gets the file's extension
        $acceptedFileTypes = ["png", "jpg", "jpeg"];
        if (in_array($artFileExtension, $acceptedFileTypes)) {
            $cat = Request::input('category'); # gets the category
            $artName = Request::input('art-name'); # gets the title
            $artDesc = Request::input('art-desc'); # gets the description
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

            Request::user()->arts()->create([
                'art_file' => $fileName,
                'art_name' => $artName,
                'art_cat' => $cat,
                'art_desc' => $artDesc
            ]);

            $artId = \DB::table('arts')->where('art_file', $fileName)->value('art_id');
            return redirect(url('art/' . $artId));

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
            $artDesc = \DB::table('arts')->where('art_id', $artId)->value('art_desc');
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
            $title = $artName . " | Drawsquare";
            return view('layout.single', compact('artUserName', 'artName', 'artCatUri', 'artCatName', 'artEndorse', 'artPath', 'artCreated', 'artDesc', 'title'));
        } else {
            return redirect(url('/'));
        }
    }

    public function profileArt($username = null)
    {
        if ($username == null) {
            return redirect(url('/'));
        } else {
            $userId = \DB::table('users')->where('name', $username)->value('id');
            if ($userId == null) {
                return "User not found";
            } else {
                $nameOfUser = \DB::table('users')->where('id', $userId)->value('name');
                $arts = Art::where('user_id', $userId)->simplePaginate(8);
                $dateJoined = \DB::table('users')->where('id', $userId)->value('created_at');
                $yearJoined = substr($dateJoined, 0, 4);
                $endorse = \DB::table('users')->where('id', $userId)->value('endorse');
                return view('layout.profile', compact('arts', 'nameOfUser', 'yearJoined', 'endorse'));
            }
        }
    }

    public function homeArt()
    {
        # $selected = [1, 2, 3, 4]; # selected art_id
        # $staffPicks = Art::whereIn('art_id', $selected)->get();
        $newPieces = Art::simplePaginate(16);
        return view('layout.home', compact('newPieces'));
    }
}
