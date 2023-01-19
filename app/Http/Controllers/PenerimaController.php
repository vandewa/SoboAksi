<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Penerima;
use Spatie\Permission\Models\Role;
use App\Http\Requests\PenerimaStoreValidation;
use App\Http\Requests\PenerimaUpdateValidation;
use Carbon\Carbon;
use App\Models\ComRegion;
use Illuminate\Support\Facades\Storage;


class PenerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = Penerima::with(['provinsi', 'kabupaten', 'kecamatan', 'kelurahan', 'identitas'])->select('*');

            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = 
                '<div>
                    <a href="'.route('admin:penerima.edit', $row->id).'" class="btn btn-outline-primary round btn-min-width mr-1" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil-square-o mr-1" ></i>Edit</a>

                    <a href="'.route('admin:penerima.destroy', $row->id ).'" class="btn btn-outline-danger round btn-min-width mr-1 delete-data-table" data-toggle="tooltip" data-placement="top" title="Hapus Data" ><i class="fa fa-trash mr-1"></i> Hapus</a>
                </div>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('admin.penerima.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();

        return view('admin.penerima.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PenerimaStoreValidation $request)
    {
        // $paths = 'public/'.Carbon::now()->isoFormat('Y').'/'.Carbon::now()->isoFormat('MMMM');

        if($request->hasFile('foto_ktp') || $request->hasFile('foto_penerima')){
            if($request->hasFile('foto_ktp')){
                // $name_foto_ktp = $request->file('foto_ktp')->getClientOriginalName();
                // $path_foto_ktp = $request->file('foto_ktp')->store($paths);
                $path_foto_ktp = $request->file('foto_ktp')->store('aksi/identitas/', 'public');
            } else {
                $path_foto_ktp = '';

            }
            if($request->hasFile('foto_penerima')){
                // $name_foto_penerima = $request->file('foto_penerima')->getClientOriginalName();
                // $path_foto_penerima = $request->file('foto_penerima')->store($paths);
                $path_foto_penerima = $request->file('foto_penerima')->store('aksi/penerima', 'public');
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
                'foto_penerima' => $path_foto_penerima,
                'creator_id' => auth()->user()->id
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
                'creator_id' => auth()->user()->id
            ];
        }

        Penerima::create($data);
        
        return redirect(route('admin:penerima.index'))->with('status', 'berhasil');
        
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
        $data = Penerima::find($id);
        $kabupaten = ComRegion::where('region_cd', $data->region_kab)->pluck('region_cd', 'region_nm'); 
        $kecamatan = ComRegion::where('region_cd', $data->region_kec)->pluck('region_cd', 'region_nm'); 
        $kelurahan = ComRegion::where('region_cd', $data->region_kel)->pluck('region_cd', 'region_nm'); 

        // return $data;

        return view('admin.penerima.edit', compact('data','kabupaten', 'kecamatan', 'kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PenerimaUpdateValidation $request, $id)
    {

        if($request->hasFile('foto_ktp') || $request->hasFile('foto_penerima')){
            $gambar = Penerima::where('id', $id)->first();

            if($request->hasFile('foto_ktp')){
                if (Storage::exists($gambar->foto_ktp)) {
                    Storage::delete($gambar->foto_ktp);
                }

                $path_foto_ktp = $request->file('foto_ktp')->store('aksi/identitas/', 'public');
            } else {
                $path_foto_ktp = $gambar->foto_ktp;

            }
            if($request->hasFile('foto_penerima')){
                if (Storage::exists($gambar->foto_penerima)) {
                    Storage::delete($gambar->foto_penerima);
                }

                $path_foto_penerima = $request->file('foto_penerima')->store('aksi/penerima', 'public');
            } else {
                $path_foto_penerima =  $gambar->foto_penerima;
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

        Penerima::find($id)->update($data);

        
        
        return redirect(route('admin:penerima.index'))->with('status', 'berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = Penerima::where('id', $id)->first();

        if (Storage::exists($gambar->foto_ktp)) {
            Storage::delete($gambar->foto_ktp);
        }
        if (Storage::exists($gambar->foto_penerima)) {
            Storage::delete($gambar->foto_penerima);
        }

        Penerima::destroy($id);
        
    }
}
