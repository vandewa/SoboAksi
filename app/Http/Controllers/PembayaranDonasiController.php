<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\DonasiPayment;
use Carbon\Carbon;

class PembayaranDonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = DonasiPayment::with(['aksi', 'penerimaDonasi', 'donatur'])->select('*');

            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = 
                '<div>
                    <a href="'.route('admin:pembayaran-donasi.destroy', $row->id ).'" class="btn btn-outline-danger round btn-min-width mr-1 delete-data-table" data-toggle="tooltip" data-placement="top" title="Hapus Data" ><i class="fa fa-trash mr-1"></i> Hapus</a>
                </div>';
                return $actionBtn;
            })
            ->editColumn('payment', function($row){
                return $this->rupiah($row->payment);
            })
            ->editColumn('request_payment', function($row){
                if($row->request_payment){
                    return Carbon::createFromTimeStamp(strtotime($row->request_payment))->isoFormat('D MMMM Y');
                } else {
                    return '';
                }
            })
            ->editColumn('payment_date', function($row){
                if($row->payment_date){
                    return Carbon::createFromTimeStamp(strtotime($row->payment_date))->isoFormat('D MMMM Y');
                } else {
                    return '';
                }
            })
            ->editColumn('payment_status', function($row){
                if($row->payment_status == 'PAID'){
                    return '<div class="badge badge-success">PAID</div>';
                } else {
                    return '<div class="badge badge-warning">PENDING</div>';

                }
            })
            ->rawColumns(['action', 'payment_status'])
            ->make(true);
        }

        return view('admin.pembayaran-donasi.index');
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
        $data = DonasiPayment::find($id);

        return view('admin.pembayaran-donasi.edit', compact('data'));
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

    function rupiah($angka){
	
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
     
    }
}
