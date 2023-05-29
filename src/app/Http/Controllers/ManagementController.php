<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Management;

class ManagementController extends Controller
{
    public function management()
    {
        $managements = Management::Paginate(15);
        
        return view('management', compact('managements'));
    }

}
