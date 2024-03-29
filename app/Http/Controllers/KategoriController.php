<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\KategoriStoreValidation;
use App\Http\Requests\KategoriUpdateValidation;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = Kategori::select('*');

            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = 
                '<div>
                    <a href="'.route('admin:kategori.edit', $row->id).'" class="btn btn-outline-primary round btn-min-width mr-1" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil-square-o mr-1" ></i>Edit</a>

                    <a href="'.route('admin:kategori.destroy', $row->id ).'" class="btn btn-outline-danger round btn-min-width mr-1 delete-data-table" data-toggle="tooltip" data-placement="top" title="Hapus Data" ><i class="fa fa-trash mr-1"></i> Hapus</a>
                </div>';
                return $actionBtn;
            })
            ->addColumn('gambar', function($row){
                $gambar = asset('trusthand/assets/images/icons/'.$row->icon);
                return '<a href="'.$gambar.'" target="_blank"><img src="'.$gambar.'" style="height:50px;"></a>';
            })
            ->rawColumns(['action', 'gambar'])
            ->make(true);
        }

        return view('admin.kategori.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KategoriStoreValidation $request)
    {
        $a = Kategori::create([
            'nama_kategori' => ucwords($request->nama_kategori)
        ]);

        $id = $a->id;

        if($request->hasFile('icon')){
            $a = $request->file('icon');
            $prefix = date('Ymdhis');
            $extension = $a->extension();
            $filename = $prefix.'.'.$extension;
            $request->file('icon')->move(public_path('/trusthand/assets/images/icons/'), $filename);

            Kategori::find($id)->update([
                'icon' => $filename
            ]);
        }

        return redirect(route('admin:kategori.index'))->with('status', 'berhasil');

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
        $data = Kategori::find($id);

        return view('admin.kategori.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KategoriUpdateValidation $request, $id)
    {
        Kategori::find($id)
        ->update([
            'nama_kategori' => ucwords($request->nama_kategori)
        ]);

        if($request->hasFile('icon')){
            $a = $request->file('icon');
            $prefix = date('Ymdhis');
            $extension = $a->extension();
            $filename = $prefix.'.'.$extension;
            $request->file('icon')->move(public_path('/trusthand/assets/images/icons/'), $filename);

            Kategori::find($id)->update([
                'icon' => $filename
            ]);
        }

        return redirect(route('admin:kategori.index'))->with('status', 'berhasil');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategori::destroy($id);
    }
}
