<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aksi;
use App\Models\Kategori;
use Yajra\DataTables\Facades\DataTables;    
use App\Http\Requests\AksiStoreValidation;
use Carbon\Carbon;

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

            $data = Aksi::with('publikasi', 'user', 'kategorinya')->select('*');

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
        Aksi::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'creator_id' => auth()->user()->id,
            'setuju' => $request->setuju,
            'publish_st' => $request->publish_st,
            'publish_at' => $request->publish_at,
        ]);

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
    public function update(AksiStoreValidation $request, $id)
    {
        if($request->publish_st == 'PUBLISH_ST_02'){
            Aksi::find($id)->update([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
                'updated_by' => auth()->user()->id,
                'setuju' => $request->setuju,
                'publish_st' => $request->publish_st,
                'publish_at' => null,
                
            ]);
        } else {
            Aksi::find($id)->update([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'deskripsi' => $request->deskripsi,
                'updated_by' => auth()->user()->id,
                'setuju' => $request->setuju,
                'publish_st' => $request->publish_st,
                'publish_at' => null,
                'publish_at' => $request->publish_at,
            ]);
        }
        

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
