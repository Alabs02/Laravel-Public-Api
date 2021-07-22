<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use \App\Models\CovidCase;
use \App\Http\Resources\CaseResource;
use Cache;

class CaseController extends Controller
{
    public function index()
    {
        ray()->queries();
        return CaseResource::collection(Cache::remember('cases', 60*60*24, function() {
            return CovidCase::all();
        }));
    }
}
