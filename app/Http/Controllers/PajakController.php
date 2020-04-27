<?php

namespace App\Http\Controllers;

use App\Models\Pajak;
use App\User;
use App\Http\Requests\PajakRequest;
use App\Exports\PajakExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class PajakController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #identifikasi siapa yang login
        $user = Auth::user()->id;
        
        
        $items = Pajak::where('user_id',$user)
                    ->orderBy('id', 'desc')
                    ->paginate(10);
        
        
        return view ('pages.pajak.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pajak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PajakRequest $request)
    {
        $data = $request->all();
        $data['user_id']=auth()->id();

        Pajak::create($data);
        // $data->save();
        flash('Pajak berhasil ditambahkan')->success();
        return redirect()->route('pajak.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
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
        $pajak = Pajak::find($id);

        $pajak->delete();
        flash('Data berhasil dihapus')->error();
        return redirect()->route('pajak.index');
    }
    public function export() 
    {
        return Excel::download(new PajakExport, 'pajak.xlsx');
    }
}
