<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function tampil() {
        return Profile::all();
    }

    public function tambah(request $request){
        $profile = new Profile;
        $profile->nama = $request->nama;
        $profile->jeniskelamin = $request->jeniskelamin;
        $profile->tinggibadan = $request->tinggibadan;
        $profile->hobbi = $request->hobbi;
        $profile->ttl = $request->ttl;
        $profile->save();

        return "penambahan berhasil";
    }

    public function ubah(request $request, $id){
        $nama = $request->nama;
        $jeniskelamin = $request->jeniskelamin;
        $tinggibadan = $request->tinggibadan;
        $hobbi = $request->hobbi;
        $ttl = $request->ttl;

        $profile = Profile::find($id);
        $profile->nama = $nama;
        $profile->jeniskelamin = $jeniskelamin;
        $profile->tinggibadan = $tinggibadan;
        $profile->hobbi = $hobbi;
        $profile->ttl = $ttl;
        $profile->save();

        return "Pengubahan data berhasil";
    }

    public function hapus($id){
        $profile = Profile::find($id);
        $profile->delete();

        return "Penghapusan berhasil";
    }
}
