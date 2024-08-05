<?php

namespace App\Http\Controllers;

use App\Models\Ma7kamaOlia;

class Ma7kamaOliaPreviewController extends Controller
{
    public function preview(Ma7kamaOlia $ma7kamaOlia)
    {
        return view('highCourt.preview', compact('ma7kamaOlia'));
    }
}