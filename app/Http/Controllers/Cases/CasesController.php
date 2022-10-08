<?php

namespace App\Http\Controllers\Cases;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Models\Cases\Cases;
use App\Models\Auth;
// use Illuminate\Support\Facades\Auth;

use Session;

class CasesController extends Controller
{
    // protected $API_HOST_TICKET = "http://192.168.22.16:4306/api/1.0.0/";
    // protected $API_TOKEN_OS = "&access_token=rAGiAUURPKNR5EHT0sK9qX0DU1ELeYDkeJAFWoDA4bVn3LNBV34IIshxdEn70Qhh";

    public function __construct(Cases $Cases)
    {
        $this->Cases = $Cases;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // dd(Auth::id());
        $compact = array();

        $list = $this->Cases->GetCasesList();
       // $aaa = $list->test;
        dd($list->aaa());
        $compact['listData'] = $list;

        return view('cases.list',$compact);

    //     //Array data you want to paginate
    //     $results =  Cases::GetCasesList();
    //     //This would contain all data to be sent to the view
    //     $data = array();
    //     //Get current page form url e.g. &page=6
    //     $currentPage = LengthAwarePaginator::resolveCurrentPage();

    //     //Create a new Laravel collection from the array data
    //     $collection = new Collection($results);

    //     //Define how many items we want to be visible in each page
    //     $per_page = 10;

    //     //Slice the collection to get the items to display in current page
    //     $currentPageResults = $collection->slice(($currentPage-1) * $per_page, $per_page)->all();

    //     //Create our paginator and add it to the data array
    //     $data['listData'] = new LengthAwarePaginator($currentPageResults, count($collection), $per_page);

    //     //Set base url for pagination links to follow e.g custom/url?page=6
    //     $data['listData']->setPath($request->url());

    //    //  dd($data['results']);
    //    // $compact['listData'] = $data['listData'];
    //     //Pass data to view
    //     return view('cases.list',$data);
    }



    public function create (Request $request){
        
        $compact = array();
       
        return view('cases.form',$compact);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
