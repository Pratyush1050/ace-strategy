<?php

namespace App\Exports;

use App\Models\Buyer;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Locale;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class ContractBuyersExport implements FromView
{
    use Exportable;

    private $startDate;
    private $endDate;

    public function __construct(string $startDate = null, string $endDate = null)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }
    public function view(): View
    {
        $buyers = Buyer::all();

        if($this->startDate != null)
        {
            $buyers = $buyers->filter(function($value, $key) {
                            if(Carbon::parse($value->created_at)->toDateString() >= $this->startDate){
                                return $value;
                            }
                        });
        }

        if($this->endDate != null)
        {
            $buyers = $buyers->filter(function($value, $key){
                                    if(Carbon::parse($value->created_at)->toDateString() <= $this->endDate){
                                        return $value;
                                    }
                                });
        }

        foreach($buyers as $buyer)
        {
            
            $country = Locale::getDisplayRegion('-'.strtoupper($buyer->country), 'en');
            $buyer->country = $country;
        }

        return view('layouts.exports.contract_buyer', compact('buyers'));
    }
}
