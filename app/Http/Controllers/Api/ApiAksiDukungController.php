<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AksiDukung;
use Exception;
use App\Facades\MyResponse;


class ApiAksiDukungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $cek = AksiDukung::where('aksi_id', $request->aksi_id)->where('creator_id', auth('api')->user->id)->first();
        if($cek){
            $cek->delete();
        }else {
            $data = AksiDukung::create([
                'aksi_id' => $request->aksi_id,
                'creator_id' => auth('api')->user->id
            ]);
        }



        try {
            return MyResponse::type('success')->info('Berhasil Memberikan Dukungan')->data($data)->response();
        } catch (Exception $e) {
            // $responseData = [];
            return MyResponse::type('error')->info('Isian Tidak Sesuai')->response();
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
        //
    }
}
