<?php

namespace App\Http\Controllers;

use App\Exports\ContractBuyersExport;
use App\Models\Buyer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyers = Buyer::all();

        return view('admin.buyers', compact('buyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $token = $request->token;
        $action = $request->action;
        
        //calling guzzleHttp
        $response =  Http::get('https://www.google.com/recaptcha/api/siteverify',[
            'response'=>$token,
            'secret' => env('GOOGLE_CAPTCHA_SECRET_KEY')
        ]);
        $responseFromGoogleRecaptcha = json_decode($response,true);

        if($responseFromGoogleRecaptcha['success'] ==true && $responseFromGoogleRecaptcha['action'] == $action && $responseFromGoogleRecaptcha['score']> 0.5){
            
            $request->validate([
                'first_name' =>'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email:rfc,dns',
                'full_phone' => 'required|string',
                'country' => 'required'
            ]);
    
            $contractBuyer = new Buyer();
            $contractBuyer->firstname = $request->first_name;
            $contractBuyer->lastname = $request->last_name;
            $contractBuyer->email = $request->email;
            $contractBuyer->contact_number = $request->full_phone;
            $contractBuyer->country = $request->country;
            
            if($contractBuyer->save())
            {
                return back()->with('success','Thank you for taking the time to fill out the form. Our E-mail team will be in contact with you shortly.');
            }
        }
        else
        {
             return back()->with('errors',"Spam or Bot Activity Detected!");
        }

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $buyer = Buyer::findOrFail($id);

        if($buyer->delete())
        {
            return back()->with('success', 'Report Deleted Successfully!');
        }else
        {
            return back()->with('error', 'Oops! Error Occured. Please Try Again Later');
        }
    }

    public function search(Request $request)
    {
        $buyers = Buyer::get();

        if($request->start_date != null)
        {
            $buyers = $buyers->filter(function($value, $key) use($request){
                                        if(Carbon::parse($value->created_at)->toDateString() >= $request->start_date){
                                            return $value;
                                        }
                                    });
        }

        if($request->end_date != null)
        {
            $buyers = $buyers->filter(function($value, $key) use($request){
                                        if(Carbon::parse($value->created_at)->toDateString() <= $request->end_date){
                                            return $value;
                                        }
                                    });

        }

        return view('admin.buyers', compact('buyers'));
    }

    public function download(Request $request)
    {
        $startDate = null;
        $endDate = null;

        if($request->start_date != null)
        {
            $startDate = $request->start_date;
        }

        if($request->end_date != null)
        {
            $endDate = $request->end_date;
        }

        return (new ContractBuyersExport($startDate, $endDate))->download(time().'.xlsx');
    }
}
