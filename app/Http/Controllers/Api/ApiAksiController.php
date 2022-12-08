<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aksi;
use Exception;
use App\Http\Resources\AksiResource;
use App\Facades\MyResponse;
use DB;
use Carbon\Carbon;

class ApiAksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Aksi::with('kategorinya', 'user', 'publikasi')->get();

        try {
            $responseData = AksiResource::collection($data)->resolve();
        } catch (Exception $e) {
            $responseData = [];
        }

        return MyResponse::type('success')->info('Get Aksi')->data($responseData)->response();
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
        $a = DB::transaction(function()use($request){
            $data = Aksi::create([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
                'creator_id' => auth('api')->user()->id,
                'setuju' => $request->setuju,
                'publish_st' => 'PUBLISH_ST_02',
                'publish_at' => $request->publish_at,
            ]);
            // tambah foto
            foreach($request->file('foto') as $key){
                $paths = 'public/'.Carbon::now()->isoFormat('Y').'/'.Carbon::now()->isoFormat('MMMM');


                    $path_foto_ktp = $key->store($paths);
                    $data->fotonya()->create([
                        "url" => $path_foto_ktp
                    ]);
            }

            // tambah penerima donasi

            if($request->filled('penerima_id')){
                $data->penerimaDonasi()->create(
                    [
                        'penerima_id' => $request->penerima_id,
                        'target_donasi' => $request->target_donasi,
                        'target_waktu' => $request->target_waktu,
                        'donasi_tercapai' => 0,
                        'donasi_st' => 'DONASI_ST_00',
                    ]
                );
            }

            return $data;
        });

        try {
            return MyResponse::type('success')->info('Berhasil Membuat Aksi')->data($a)->response();
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
        try {
            $data = Aksi::find($id)->update([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
                'creator_id' => auth('api')->user()->id,
                'setuju' => $request->setuju,
                'publish_st' => $request->publish_st,
                'publish_at' => $request->publish_at,
            ]);

            return MyResponse::type('success')->info('Berhasil Update Aksi')->data($data)->response();

        } catch (Exception $e) {
            return MyResponse::type('error')->info('Gagal Update Aksi')->response();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Aksi::destroy($id);

        if ($data){
            return MyResponse::type('success')->info('Berhasil Delete Aksi')->response();
        } else {
            // $responseData = [];
            return MyResponse::type('error')->info('Gagal Delete Aksi')->response();
        }
    }
}
