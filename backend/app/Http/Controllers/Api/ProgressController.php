<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function index()
    {
        $latest = auth()->user()->profile->measurements()->with('values')->latest('measured_at')->get();
        return response()->json([
            'latest' => $latest,
        ], 200);
    }
}
