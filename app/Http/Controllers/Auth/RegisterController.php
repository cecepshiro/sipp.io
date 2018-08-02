<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'register';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('cekstatusadmin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'id_anggota' => 'required|string|max:15|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'id_anggota' => $data['id_anggota'],
            'akses' => $data['akses'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function daftar(){
        $data['data']=User::get();
        return view('admin.pengguna.list', $data);
    }

    public function edit($id){
        $data['data']=User::find($id);
        return view('admin.pengguna.formubah', $data);
    }

    public function update(Request $request, $id){
        $temp =  Hash::make($request->password);
        User::find($id)->update(['password'=>$temp]);
        $data['data']=User::get();
        return view('admin.pengguna.list', $data)->with('message', 'Password berhasil diubah');

    }

    public function destroy($id){
        $temp=User::find($id)->value('id');
        User::find($id)->delete();
        $data['data']=User::get();
        return view('admin.pengguna.list', $data)->with('message', 'Data berhasil dihapus');
    }


}
