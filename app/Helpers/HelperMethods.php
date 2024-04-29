<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class HelperMethods
{
    /**
     * Return true if is an image
     * Can be called like this \App\Facades\HelperMethods::isImage($user->getFirstMedia('avatar'))
     * @param Media $media
     * @return bool
     */
    public static function isImage(Media $media){
        return str_contains($media->mime_type , 'image');
    }

    /**
     * Return true if is a video
     * Can be called like this \App\Facades\HelperMethods::isVideo($user->getFirstMedia('file'))
     * @param Media $media
     * @return bool
     */
    public static function isVideo(Media $media) : bool
    {
        return str_contains($media->mime_type , 'video') || str_contains($media->mime_type , 'application/x-mpegURL');
    }

    /**
     * Return the file size in human readable format
     * @param $size in bytes
     * @param int $precision
     * @return string
     */
    public static function bytesToHuman($bytes, $precision = 2) : string
    {
        $units = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
        $step = 1024;
        $i = 0;
        while (($bytes / $step) > 0.9) {
            $bytes = $bytes / $step;
            $i++;
        }
        return round($bytes, $precision) . ' ' . $units[$i];
    }

    /**
     * Return the languages available on the platform
     * @return array
     */
    public static function getLangArray() : array
    {
        return [
            'PT' => __('Portuguese'),
            'EN' => __('English'),
        ];
    }

    /**
     * Return the language that the user want
     * @return String
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public static function getLang() : String
    {
        //check lang if requested on request otherwise check if user is logged in and use the lang options
        if(empty($lang = request()->get('lang',null))){
            if(auth()->guest()){
                $lang = 'PT';
            }else{
                $lang = auth()->user()->lang ?? 'PT';
            }
            return $lang;
        }
        //check if the requested lang is valid otherwise use PT
        if(isset(self::getLangArray()[$lang]))
            return $lang;
        else
            return 'PT';
    }


    public static function fileUploadHandle($request, $fileName, $collection, $model, $isMultiple = false): void
    {
        if($isMultiple == false) {
            if (!empty($file_id = $request->input($fileName . '_delete'))) {
                if (!empty($model->getMedia($collection)->where('id', $file_id)->first())) {
                    $model->getMedia($collection)->where('id', $file_id)->first()->delete();
                }
            }
            if (!empty($file = $request->input($fileName))) {
                $model->addMedia(storage_path("app/livewire-tmp/" . $file))
                    ->usingName($request->input($fileName . '_original_name'))//get the media original name at the same index as the media item
                    ->toMediaCollection($collection);
            }
        }else{ // is multiple
            foreach ($request->input($fileName . '_delete', []) as $file_id) {
                if(!empty($model->getMedia($collection)->where('id', $file_id)->first())){
                    $model->getMedia($collection)->where('id', $file_id)->first()->delete();
                }
            }
            foreach ($request->input($fileName, []) as $index => $file) {
                $model->addMedia(storage_path( "app/livewire-tmp/" . $file))
                    ->usingName($request->input($fileName . '_original_name',[])[$index])//get the media original name at the same index as the media item
                    ->toMediaCollection($collection);
            }

        }

        if(!empty($files = session('files'))){
            foreach ($files as $file){
                $model->deleteMedia($file->id);
                $folderPath = 'public/' . $file->model_id;
                if (Storage::exists($folderPath)) {
                    // Delete the folder
                    Storage::deleteDirectory($folderPath);
                }
                else{
                    dd("failed to delete");
                }

            }
        }
    }
}
