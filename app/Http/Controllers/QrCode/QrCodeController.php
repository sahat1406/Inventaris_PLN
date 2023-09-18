<?php

namespace App\Http\Controllers\QrCode;

use App\Commodity;
use App\CommodityLocation;
use App\Http\Controllers\Controller;
use App\SchoolOperationalAssistance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCoder extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commodities = Commodity::latest()->get();
        $school_operational_assistances = SchoolOperationalAssistance::orderBy('name', 'ASC')->get();
        $commodity_locations = CommodityLocation::orderBy('name', 'ASC')->get();

        return view('commodities.index', compact('commodities', 'school_operational_assistances', 'commodity_locations'));
    }

    
}
