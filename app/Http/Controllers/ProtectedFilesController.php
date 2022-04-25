<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Statamic\Facades\Asset;

class ProtectedFilesController extends Controller
{
  public function download($filename)
  {
        if (!Auth::check()) {
            return redirect('/login');
        } else {
            $file = Asset::find('protected::' . $filename);
            $path = $file->resolvedPath();

            $headers = [
                'Content-Type' => 'application/pdf',
            ];

            return response()->download($path, $filename, $headers);
        }
    }
}
