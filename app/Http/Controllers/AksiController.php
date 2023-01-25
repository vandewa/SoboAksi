<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Aksi;
use App\Models\Kategori;
use App\Models\AksiPhoto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AksiStoreValidation;
use Yajra\DataTables\Facades\DataTables;    
use App\Http\Requests\AksiUpdateValidation;

class AksiController extends Controller
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

            $data = Aksi::with('publikasi', 'user', 'kategorinya')->whereDoesntHave('penerimaDonasi')->select('*');

            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = 
                '<div>
                    <a href="'.route('admin:aksi.edit', $row->id ).'" class="btn btn-outline-primary round btn-min-width mr-1" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil-square-o mr-1" ></i>Edit</a>

                    <a href="'.route('admin:aksi.destroy', $row->id ).'" class="btn btn-outline-danger round btn-min-width mr-1 delete-data-table" data-toggle="tooltip" data-placement="top" title="Hapus Data" ><i class="fa fa-trash mr-1"></i> Hapus</a>
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
            ->rawColumns(['action', 'setuju', 'publikasinya'])
            ->make(true);
        }

        return view('admin.aksi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::orderBy('nama_kategori', 'asc')->pluck('nama_kategori','id');

        return view('admin.aksi.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AksiStoreValidation $request)
    {
        $aksi = Aksi::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'creator_id' => auth()->user()->id,
            'setuju' => 1,
            'publish_st' => 'PUBLISH_ST_01',
            'publish_at' => now(),
        ]);

        if($request->photo){
            $path_photo = $request->file('photo')->store('aksi', 'public');
            AksiPhoto::create([
                'aksi_id' => $aksi->id,
                'url' => $path_photo
            ]);
        }

        return redirect()->route('admin:aksi.index')->with('status', 'berhasil');
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
        $data = Aksi::find($id);
        $kategori = Kategori::orderBy('nama_kategori', 'asc')->pluck('nama_kategori','id');

        return view('admin.aksi.edit', compact('data', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AksiUpdateValidation $request, $id)
    {
        // return $request->all();
        if($request->publish_st == 'PUBLISH_ST_02'){
            $publikasi_tanggal = NULL;
        } else {
            $publikasi_tanggal = $request->publish_at;
        }

        if($request->photo){
            $path_photo = $request->file('photo')->store('aksi', 'public');
            AksiPhoto::where('aksi_id', $id)->update([
                'url' => $path_photo
            ]);
        }

        Aksi::find($id)->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'updated_by' => auth()->user()->id,
            'setuju' => $request->setuju,
            'publish_st' => $request->publish_st,
            'publish_at' => $publikasi_tanggal,
            
        ]);

        

        return redirect()->route('admin:aksi.index')->with('status', 'berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aksi::destroy($id);
    }
}
