<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Wilayah::where('region_level', 1)->get();

            if ($request->query('kode')) {
                $data = Wilayah::where('region_root', $request->query('kode'));
            }

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $actionBtn =
                        '<div><center>
                    <a href="' . route('admin:wilayah.edit', $data->region_cd) . '" class="btn btn-outline-primary round btn-min-width mr-1" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil-square-o mr-1" ></i>Edit</a>

                    <a href="' . route('admin:wilayah.destroy', $data->region_cd) . '" class="btn btn-outline-danger round btn-min-width mr-1 delete-data-table" data-toggle="tooltip" data-placement="top" title="Hapus Data" ><i class="fa fa-trash mr-1"></i> Hapus</a>
                </div></center>';
                    return $actionBtn;
                })
                ->addColumn('kab', function ($data) {
                    $actionBtn =
                        '<div>
                     <a href="' . url('admin/filter?kode=') . $data->region_cd . '&kab=kab " class="btn btn-outline-info round btn-min-width mr-1" data-toggle="tooltip" data-placement="top" title="Edit Data">Lihat</a>
                </div>';
                    return $actionBtn;
                })
                ->addColumn('kec', function ($data) {
                    $actionBtn =
                        '<div>
                     <a href="' . url('admin/filter?kab=') . $data->region_cd . '" class="btn btn-outline-info round btn-min-width mr-1" data-toggle="tooltip" data-placement="top" title="Edit Data">Lihat</a>
                </div>';
                    return $actionBtn;
                })

                ->rawColumns(['action', 'kab', 'kec'])
                ->make(true);
        }

        return view('admin.wilayah.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wilayah  $wilayah
     * @return \Illuminate\Http\Response
     */
    public function show(Wilayah $wilayah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wilayah  $wilayah
     * @return \Illuminate\Http\Response
     */
    public function edit(Wilayah $wilayah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wilayah  $wilayah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wilayah $wilayah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wilayah  $wilayah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wilayah $wilayah)
    {
        //
    }
}
