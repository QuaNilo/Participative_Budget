<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Attributes\On;
use Livewire\Component;

class HomeControllerLivewire extends Component
{
    public $receivedWallpaper;

    #[('update-files-wallpaper')]
    protected function receivedWallpaper($files)
    {
        if (!empty($files['files'])) {
            $this->receivedWallpaper = $files;
        }
    }

    #[On('remove-file')]
    protected function removeMediaHandling($file): void
    {
        if (isset($this->receivedFiles['files'])) {
            foreach ($this->receivedFiles['files'] as $key => $receivedFile) {
                if ($receivedFile === $file) {
                    unset($this->receivedFiles['files'][$key]);
                }
            }
        }
    }

    public function handleUpdate(Request $request): void
    {
        dd($request);
    }
//    public function render()
//    {
//        return view('livewire.home-controller-livewire');
//    }
}
