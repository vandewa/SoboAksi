<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Aksi;
use App\Models\Kategori;
use App\Models\Penerima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\DonasiStoreValidation;
use App\Models\AksiPenerima;
use Yajra\DataTables\Facades\DataTables;    
use App\Http\Requests\DonasiUpdateValidation;
use App\Models\AksiPhoto;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return $data = Aksi::with('publikasi', 'user', 'kategorinya')->get();
        if($request->ajax()){

            $data = Aksi::with('publikasi', 'user', 'kategorinya')->whereHas('penerimaDonasi')->select('*');

            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = 
                '<div>
                    <a href="'.route('admin:donasi.edit', $row->id ).'" class="btn btn-outline-primary round btn-min-width mr-1" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil-square-o mr-1" ></i>Edit</a>

                    <a href="'.route('admin:donasi.destroy', $row->id ).'" class="btn btn-outline-danger round btn-min-width mr-1 delete-data-table" data-toggle="tooltip" data-placement="top" title="Hapus Data" ><i class="fa fa-trash mr-1"></i> Hapus</a>
                </div>';
                return $actionBtn;
            })
            ->editColumn('setuju', function($a){
               if($a->setuju == '1'){
                return '<label class=" badge bg-success">Disetujui</label>';
               } else {
                return '<label class=" badge bg-danger">Ditolak</label>';
               }
            })
            ->editColumn('highlight', function($a){
               if($a->highlight == '1'){
                return '<label class=" badge bg-success">Ya</label>';
               } else {
                return '<label class=" badge bg-danger">Tidak</label>';
               }
            })
            ->addColumn('publikasinya', function($a){
                if($a->publikasi != null){
                    if($a->publikasi->code_cd == 'PUBLISH_ST_01'){
                        return '<label class=" badge bg-success">Ya</label>';
                   } else {
                        return '<label class=" badge bg-danger">Tidak</label>';
                   }
                }
                else{
                    return '-';
                }
               
            })
            ->addColumn('tanggal', function($a){
                if($a->publish_at != NULL || $a->publish_at != ''){
                    return Carbon::createFromTimeStamp(strtotime($a->publish_at))->isoFormat('D MMMM Y');
                } else {
                    return '-';
                }
            })
            ->editColumn('created_at', function($a){
                return Carbon::createFromTimeStamp(strtotime($a->created_at))->isoFormat('D MMMM Y');
                
            })
            ->rawColumns(['action', 'setuju', 'publikasinya', 'highlight'])
            ->make(true);
        }

        return view('admin.donasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::orderBy('nama_kategori', 'asc')->pluck('nama_kategori','id');
        $penerima = Penerima::select(DB::Raw("concat(nama,' (',no_identitas,')') as opo, id"))->orderBy('nama', 'asc')->pluck('opo', 'id');

        return view('admin.donasi.create', compact('kategori', 'penerima'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DonasiStoreValidation $request)
    {

       $aksi = Aksi::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'creator_id' => auth()->user()->id,
            'setuju' => 1 ,
            'publish_st' => 'PUBLISH_ST_01',
            'publish_at' => $request->publish_at,
            'highlight' => $request->highlight,
        ]);

        AksiPenerima::create([
            'aksi_id' => $aksi->id,
            'penerima_id' => $request->penerima_id,
            'target_donasi' => $request->target_donasi,
            'target_waktu' => $request->target_waktu,
            'donasi_st' => 'DONASI_ST_00',
            'donasi_tercapai' => '0'
        ]);

        if($request->photo){
            $path_photo = $request->file('photo')->store('aksi', 'public');
            AksiPhoto::create([
                'aksi_id' => $aksi->id,
                'url' => $path_photo
            ]);
        }

        $cek_highlight = Aksi::where('highlight', 1)
        ->count();

        if($cek_highlight >= 6){

            $cek = Aksi::where('highlight', 1)
            ->orderBy('publish_at', 'asc')
            ->first();

            Aksi::where('id', $cek->id)->update([
                'highlight' => 0
            ]);
        }


        return redirect()->route('admin:donasi.index')->with('status', 'berhasil');
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
        $data = Aksi::with(['penerimaDonasi', 'sampul'])->find($id);
        $kategori = Kategori::orderBy('nama_kategori', 'asc')->pluck('nama_kategori','id');
        $penerima = Penerima::select(DB::Raw("concat(nama,' (',no_identitas,')') as opo, id"))->orderBy('nama', 'asc')->pluck('opo', 'id');

        // return $data;

        return view('admin.donasi.edit', compact('data', 'kategori', 'penerima'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DonasiUpdateValidation $request, $id)
    {
        // return $request->all();
        if($request->publish_st == 'PUBLISH_ST_02'){
            $publikasi_tanggal = NULL;
        } else {
            $publikasi_tanggal = $request->publish_at;
        }

       Aksi::find($id)->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'updated_by' => auth()->user()->id,
            'setuju' => $request->setuju,
            'publish_st' => $request->publish_st,
            'publish_at' => $publikasi_tanggal,
            'highlight' => $request->highlight,
        ]);

        AksiPenerima::where('aksi_id', $id)
        ->update([
            'penerima_id' => $request->penerima_id,
            'target_donasi' => $request->target_donasi,
            'target_waktu' => $request->target_waktu,
            'donasi_st' => 'DONASI_ST_00',
            'donasi_tercapai' => '0'
        ]);

        if($request->photo){
            $path_photo = $request->file('photo')->store('aksi', 'public');
            AksiPhoto::where('aksi_id', $id)->update([
                'url' => $path_photo
            ]);
        }
        

        return redirect()->route('admin:donasi.index')->with('status', 'berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aksi = Aksi::where('id', $id)->first();

        if($aksi){
            AksiPenerima::where('aksi_id', $aksi->id)->delete();
        }
        Aksi::destroy($id);
    }
}
