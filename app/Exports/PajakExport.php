<?php

namespace App\Exports;

use App\Models\Pajak;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\Auth;

class PajakExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $user = Auth::user()->id;
        return Pajak::where('user_id',$user)
                ->orderBy('id', 'desc')
                ->get();
    }
}
