<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AksiComment;
use Exception;
use App\Http\Resources\AksiCommentResource;
use App\Facades\MyResponse;

class ApiAksiCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data = AksiComment::with(['parent', 'user'])->get();
            $responseData = AksiCommentResource::collection($data)->resolve();

            return MyResponse::type('paginate')->info('Get Komentar')->data($responseData)->response();
        } catch (Exception $e) {
            // $responseData = [];
            return MyResponse::type('error')->info('Tidak Ada Komentar')->response();
        }
    }

    public function GetComment($id)
    {
        try {
            $data = AksiComment::with(['parent', 'user'])->where('aksi_id', $id)->get();
            $responseData = AksiCommentResource::collection($data)->resolve();

            return MyResponse::type('success')->info('Get Komentar by Aksi')->data($responseData)->response();
        } catch (Exception $e) {
            // $responseData = [];
            return MyResponse::type('error')->info('Tidak Ada Komentar')->response();
        }
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
        $data = AksiComment::create([
            'aksi_id' => $request->aksi_id,
            'root_id' => $request->root_id,
            'comment' => $request->comment,
            'creator_id' => auth('api')->user()->id
        ]);

        try {
            return MyResponse::type('success')->info('Berhasil Memberikan Komentar')->data($data)->response();
        } catch (Exception $e) {
            // $responseData = [];
            return MyResponse::type('error')->info('Gagal Memberikan Komentar')->response();
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
            $data = AksiComment::find($id)->update([
                'comment' => $request->comment,
            ]);

            return MyResponse::type('success')->info('Berhasil Update Komentar')->data($data)->response();

        } catch (Exception $e) {
            return MyResponse::type('error')->info('Gagal Update Komentar')->response();
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
        $data = AksiComment::destroy($id);

        if ($data){
            return MyResponse::type('success')->info('Berhasil Delete Komentar')->response();
        } else {
            // $responseData = [];
            return MyResponse::type('error')->info('Gagal Delete Komentar')->response();
        }
    }
}
