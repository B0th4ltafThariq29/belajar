<?php

namespace App\Http\Controllers;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class SiswaController extends Controller
{
    public function index() {
        $siswa = DB::table('siswa')->get();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('data',['siswa' => $siswa]);
    }

    // tambah data
    public function tambah(){
        return view('tambah');
    }
    public function store(Request $request){

        if ($request->hasFile('profile_image')) {
            $destination = public_path('/images');
            $file = $request->file('profile_image');
            $extension = $file->getClientOriginalName();
            $filename =$extension;
            $file->move($destination, $filename);
        }
        DB::table('siswa')->insert([
            'nama'=> $request->nama,
            'kelas'=> $request->kelas,
            'jurusan'=> $request->jurusan,
            'profile_image'=> $filename,

        ]);

        return redirect('/data')->with('toast_success', 'Data berhasil di tambahkan');;
    }

    // edit dan update data
    public function edit($id){
        $siswa = DB::table('siswa')->where('id',$id)->get();
        return view ('edit',['siswa' => $siswa]);
    }
    public function update(Request $request){

	 DB::table('siswa')->where('id', $request->id)->update([
            'nama'=> $request->nama,
            'kelas'=> $request->kelas,
            'jurusan'=> $request->jurusan,
            'profile_image'=> $request->profileImage,
        ]);

        return redirect('/data')->with('toast_info', 'Data berhasil di edit!');;
    }

    // hapus data
    public function delete($id){
        DB::table('siswa')->where('id', $id)->delete();

        return redirect('/data')->with('toast_succes', 'data berhasil di hapus');
    }

}
