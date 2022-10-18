<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Http;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use DB;
use App\Http\Requests\UserStoreValidation;
use App\Http\Requests\UserUpdateValidation;
use App\Models\ComRegion;


class ManagementUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $data = User::with('role')->select('*');

            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $actionBtn = 
                '<div>
                    <a href="'.route('admin:user.edit', $row->id).'" class="btn btn-outline-primary round btn-min-width mr-1" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pencil-square-o mr-1" ></i>Edit</a>

                    <a href="'.route('admin:user.destroy', $row->id ).'" class="btn btn-outline-danger round btn-min-width mr-1 delete-data-table" data-toggle="tooltip" data-placement="top" title="Hapus Data" ><i class="fa fa-trash mr-1"></i> Hapus</a>
                </div>';
                return $actionBtn;
            })
            ->addColumn('role', function($row){
                $tampung = [];
                if(!empty($row->getRoleNames())){
                    foreach($row->getRoleNames() as $role){
                        $tampung[] = '<label class=" badge bg-dark">'.$role.'</label>';
                    }
                    return implode(" ",$tampung);
                }  
            })

            ->rawColumns(['action', 'role'])
            ->make(true);
        }

        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();

        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreValidation $request)
    {    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect(route('admin:user.index'))->with('status', 'berhasil');
                        
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
        $data = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $data->roles->pluck('name','name')->all();
        $kabupaten = ComRegion::where('region_cd', $data->region_kab)->pluck('region_cd', 'region_nm'); 
        $kecamatan = ComRegion::where('region_cd', $data->region_kec)->pluck('region_cd', 'region_nm'); 
        $kelurahan = ComRegion::where('region_cd', $data->region_kel)->pluck('region_cd', 'region_nm'); 

        return view('admin.user.edit', compact('data', 'roles', 'userRole', 'kabupaten', 'kecamatan', 'kelurahan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateValidation $request, $id)
    {
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));

        return redirect(route('admin:user.index'))->with('status', 'berhasil');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
    }
}
