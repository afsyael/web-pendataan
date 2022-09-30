<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\User;
use App\karyawan;
use App\kritik;
use App\cuti;
use PDF;

class bppdcontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('insertkritik','insertcuti','cari','pegawai','cetak');
    }

    public function pegawai() {
        $pegawai = karyawan::all();
        return view('pages.pegawai',['pegawai' => $pegawai]);
    }

    public function cari(Request $request) {
        $cari = $request->cari;
        /*$cetakdata = cuti::where('nip','=', $cari);
        $pdf = PDF::loadview('pages.cetak_cuti',['cetakdata'=>$cetakdata]);
        return $pdf->stream();*/
        $datacuti = DB::table('cuti')->where('nip','like',"%".$cari."%")->paginate();
        return view('pages.formcetak',['datacuti' => $datacuti]);
    }

    public function cetak($id) {
        $cetak = cuti::all();
        $cetakdata = $cetak -> where('id','=', $id);
        $pdf = PDF::loadview('pages.cetak_cuti',['cetakdata'=>$cetakdata]);
        return $pdf->stream();
    }
    
     public function insertcuti(Request $request) {
    	$this->validate($request, [
            'name' => 'required|string|max:225',
            'alasan' => 'required',
            'divisi' => 'required',
            'alamat' => 'required',
            'nip' => 'required',
            'email' => 'required|string|email',
            'mulai' => 'required',
            'selesai' => 'required',
        ]);


        cuti::create([
            'nama' => $request->name,
            'alasan_cuti' => $request->alasan,
            'divisi' => $request->divisi,
            'alamat' => $request->alamat,
            'nip' => $request->nip,
            'email' => $request->email,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
        ]);
             return redirect('/datacuti')->with('status', 'Data Berhasil ditambahkan');
    }

    public function insertkritik(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:225',
            'email' => 'required|string|email|max:225|unique:kritik',
            'subject' => 'required|string',
            'message' => 'required',
        ]);

        kritik::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'pesan' => $request->message,
        ]);
              return redirect('/kontak')->with('status','Terimakasih!');
    }

    public function index() {
        return view('admin.dashboard');
    }

    public function view_admin() {
    	/*$admin = User::all();*/
    	$admin = new User();
    	$admin= User::orderBy('created_at','desc')->get();
        return view('admin.adm',['admin' => $admin]);
    }

    public function insertadmin(Request $request) {
    	$this->validate($request, [
    		'nama' => 'required|string|max:225',
    		'email' => 'required|string|email|max:225|unique:users',
            'telp' => 'required|string',
    		'password' => 'required|string|min:3|confirmed',
    	]);

    	//Hash Password
    	$request['password'] = bcrypt($request['password']);

    	User::create([
    		'name' => $request->nama,
    		'email' => $request->email,
            'phone' => $request->telp,
    		'password' => $request->password,
    	]);
    	      return redirect('/adm')->with('status','Data Berhasil Ditambahkan');
    }

    public function editadmin($id) {
    	$dataadmin = User::all();
    	$admin = $dataadmin -> where('id','=', $id);
    	    return view('admin.edit_admin',['admin' => $admin]);
    	
    }

    public function updateadmin(Request $request) {
    	 $this->validate($request, [
    	     'nama' => 'required',
    	     'email' => 'required|string|email|max:225',
             'telp' => 'required|string',
         ]);

         $admin = User::where('id', $request->idadmin)->update([
            'name' => $request->nama,
            'email' => $request->email,
            'telp' => $request->telp,
        ]);
              return redirect('/adm')->with('status', 'Data Berhasil Diedit');
    }

    public function deleteadmin($id) {
        $admin = User::where('id', $id)->delete();
            return redirect('/adm')->with('status', 'Data Berhasil Dihapus');
    }

     public function view_karyawan() {
    	/*$karyawan = karyawan::all();*/
    	$karyawan = new karyawan();
    	$karyawan= karyawan::orderBy('created_at','desc')->get();
        return view('admin.karyawan',['karyawan' => $karyawan]);
    }

    public function insertkaryawan(Request $request) {
    	$this->validate($request, [
    		'nama' => 'required|string|max:225',
    		'email' => 'required|string|email|max:225|unique:users',
    		'jk' => 'required',
            'divisi' => 'required',
            'telp' => 'required',
            'nip' => 'required',
            'negara' => 'required',
            'alamat' => 'required|string|max:225',
            'status' => 'required',
        ]);

        karyawan::create([
            'name' => $request->nama,
            'email' => $request->email,
            'jk' => $request->jk,
            'divisi' => $request->divisi,
            'telepon' => $request->telp,
            'nip' => $request->nip,
            'negara_domisili' => $request->negara,
            'alamat' => $request->alamat,
            'status_pernikahan' => $request->status,
        ]);
              return redirect('/karyawan')->with('status', 'Data Berhasil Ditambahkan');
    }

    public function editkaryawan($id) {
    	$datakaryawan = karyawan::all();
    	$karyawan = $datakaryawan -> where('id','=', $id);
                    return view('admin.edit_karyawan',['karyawan' => $karyawan]);
    }

    public function updatekaryawan(Request $request) {
    	 $this->validate($request, [
            'nama' => 'required|string|max:225',
            'email' => 'required|string|email|max:225',
            'jk' => 'required',
            'divisi' => 'required',
            'telp' => 'required',
            'nip' => 'required',
            'negara' => 'required',
            'alamat' => 'required|string|max:225',
            'status' => 'required',
        ]);

        $karyawan = karyawan::where('id', $request->idkaryawan)->update([
            'name' => $request->nama,
            'email' => $request->email,
            'jk' => $request->jk,
            'divisi' => $request->divisi,
            'telepon' => $request->telp,
            'nip' => $request->nip,
            'negara_domisili' => $request->negara,
            'alamat' => $request->alamat,
            'status_pernikahan' => $request->status,
        ]);
        return redirect('/karyawan')->with('status', 'Data Berhasil Diedit');
    }

    public function deletekaryawan($id) {
        $karyawan = karyawan::where('id', $id)->delete();
            return redirect('/karyawan')->with('status', 'Data Berhasil Dihapus');
    }

    public function view_cuti() {
 		/*$cuti = cuti::all();*/
 		$cuti = new cuti();
    	$cuti= cuti::orderBy('created_at','desc')->get();
        return view('admin.cuti',['cuti' => $cuti]);
    }
    public function report(){
        $cuti = cuti::all();
        $pdf = PDF::loadview('admin.reportcuti',['cuti' => $cuti]);
        return $pdf->stream();
    }

    public function editcuti($id) {
    	$datacuti = cuti::all();
    	$cuti = $datacuti -> where('id','=', $id);
                return view('admin.edit_cuti',['cuti' => $cuti]);
    }

     public function updatecuti(Request $request) {
    	$this->validate($request, [
            'nama' => 'required|string|max:225',
            'alasan' => 'required',
            'divisi' => 'required',
            'alamat' => 'required',
            'nip' => 'required',
            'email' => 'required|string|email',
            'mulai' => 'required',
            'selesai' => 'required',
            'status' => 'required',
        ]);

        $cuti = cuti::where('id', $request->idcuti)->update([
            'nama' => $request->nama,
            'alasan_cuti' => $request->alasan,
            'divisi' => $request->divisi,
            'alamat' => $request->alamat,
            'nip' => $request->nip,
            'email' => $request->email,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
            'status' => $request->status,
        ]);
             return redirect('/cuti')->with('status', 'Data Berhasil Diedit');
    }

     public function deletecuti($id) {
        $cuti = cuti::where('id', $id)->delete();
            return redirect('/cuti')->with('status', 'Data Berhasil Dihapus');
    }

     public function view_kritik() {
    	/*$kritik = kritik::all();*/
    	$kritik = new kritik();
    	$kritik= kritik::orderBy('created_at','desc')->get();
        return view('admin.kritik',['kritik' => $kritik]);
    }

    public function deletekritik($id) {
        $kritik = kritik::where('id', $id)->delete();
            return redirect('/kritik')->with('status', 'Data Berhasil Dihapus');
    }
}
