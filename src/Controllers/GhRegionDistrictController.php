<?php

namespace Wapnen\GhRegionDistrict\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;

class GhRegionDistrictController extends Controller
{
    //
	public function index(){
		$regions = DB::table('regions')->get();
		$districts = DB::table('districts')->get();

		return view('ghregiondistrict.index', compact('regions', 'districts'));
	}

	 public function getDistricts($region)
    {
     
      $district = DB::table("districts")->where("region_id", $region)->get();
      print_r(json_encode($district));
    }
}
