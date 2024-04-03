<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;

trait imageTraits{

    public function getImageUrl($file, $path){
        $file_path = null;
        if ($file && $file !== 'null') {
            $file_name = date('Ymd-his') . '.' . $file->getClientOriginalName();
            $destinationPath = $path . $file_name;
            // $file->move(public_path($path), $file_name);
            // $file_path = $destinationPath;
            Storage::putFileAs($path, $file, $file_name);
            $file_path = $destinationPath;
        }
        return $file_path ?? null;
    }

}

?>
