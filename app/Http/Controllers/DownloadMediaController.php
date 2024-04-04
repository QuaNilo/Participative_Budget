<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\MediaStream;

class DownloadMediaController extends Controller
{
    public function download_zip_proposal(Proposal $proposal): MediaStream
    {
        $documents = $proposal->getMedia('documents');
        return MediaStream::create(substr($proposal->title, 0, 24) . '.zip')->addMedia($documents);
    }

   public function download_zip_citizen(Citizen $citizen): MediaStream
    {
        $cc = $citizen->getMedia('cc');
        return MediaStream::create(substr($citizen->user->name, 0, 24) . '.zip')->addMedia($cc);
    }
}
