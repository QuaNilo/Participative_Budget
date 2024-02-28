<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\MediaStream;

class DownloadMediaController extends Controller
{
    public function download_zip(Proposal $proposal)
       {
            // Let's get some media.
            $documents = $proposal->getMedia('documents');

            // Download the files associated with the media in a streamed way.
            // No prob if your files are very large.
            return MediaStream::create(substr($proposal->title, 0, 24) . '.zip')->addMedia($documents);
       }
}
