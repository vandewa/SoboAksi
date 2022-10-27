<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penerima;
use Exception;
use App\Facades\MyResponse;
use Carbon\Carbon;
use App\Http\Resources\PenerimaResource;

class ApiPenerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Penerima::with('provinsi', 'kabupaten', 'kecamatan', 'kelurahan', 'identitas')->orderBy('nama', 'asc')->where('creator_id', auth('api')->user()->id)->get();

        try {
            $responseData = PenerimaResource::collection($data)->resolve();
        } catch (Exception $e) {
            $responseData = [];
        }

        return MyResponse::type('success')->info('Get Penerima')->data($responseData)->response();
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
    public function store(PenerimaStoreValidation $request)
    {
        $paths = 'public/'.Carbon::now()->isoFormat('Y').'/'.Carbon::now()->isoFormat('MMMM');

        if($request->hasFile('foto_ktp') || $request->hasFile('foto_penerima')){
            if($request->hasFile('foto_ktp')){
                // $name_foto_ktp = $request->file('foto_ktp')->getClientOriginalName();
                $path_foto_ktp = $request->file('foto_ktp')->store($paths);
            } else {
                $path_foto_ktp = '';

            }
            if($request->hasFile('foto_penerima')){
                // $name_foto_penerima = $request->file('foto_penerima')->getClientOriginalName();
                $path_foto_penerima = $request->file('foto_penerima')->store($paths);
            } else {
                $path_foto_penerima = '';
            }

            $data = [
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'region_prop' => $request->region_prop,
                'region_kab' => $request->region_kab,
                'region_kec' => $request->region_kec,
                'region_kel' => $request->region_kel,
                'telepon' => $request->telepon,
                'kode_identitas' => $request->kode_identitas,
                'no_identitas' => $request->no_identitas,
                'foto_ktp' => $path_foto_ktp,
                'foto_penerima' => $path_foto_penerima
            ];

        } else {
            $data = [
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'region_prop' => $request->region_prop,
                'region_kab' => $request->region_kab,
                'region_kec' => $request->region_kec,
                'region_kel' => $request->region_kel,
                'telepon' => $request->telepon,
                'kode_identitas' => $request->kode_identitas,
                'no_identitas' => $request->no_identitas,
            ];
        }

        try {
            $data_penerima = Penerima::create($data);
            return MyResponse::type('success')->info('Berhasil Membuat Penerima')->data($data_penerima)->response();
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
