<?php

namespace App\Http\Controllers;

use App\Models\customers;
use App\Models\Daftar;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Testi;
use Database\Seeders\MenuSeeders;
use DeepCopy\Filter\Filter;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class Dkcontroller extends Controller
{
    public function index()
    {
        $ms = Menu::paginate(10);
        $ms2 = Menu::all();
        $testi = Testi::all();
        return view('index', ['menu' => $ms, 'menu2'=>$ms2, 'testi' => $testi]);

    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $req = $request;
        $ms = Menu::all();
    		// mengambil data dari table makanan sesuai pencarian data
		$search = DB::table('menus')
		->where('harga','like',"%".$cari."%")
        ->orWhere(function($query) use ($cari, $request)  {
            $query->where('nama','like',"%".$cari."%");

        })
        ->orWhere(function($query) use ($cari, $request)  {
            $query->where('kategori','like',"%".$cari."%");

        })->paginate();


    		// mengirim data makanan ke view index

		return view('cari',['search' => $search, 'menu' => $ms, 'request' => $req]);


    }
    public function menu()
    {

        $ms = Menu::all();
        $geprek = DB::table('menus');
    		// mengambil data dari table makanan sesuai pencarian data


    		// mengirim data makanan ke view index

		return view('menu',[ 'menu' => $ms, 'geprek' => $geprek]);
    }

    // public function mesen(Request $request)
    // {
    //     $nama = $request->nama;
    // }

    public function detailmenu($id)
    {
        $menu = Menu::findOrFail($id);
        $related = DB::table('menus')->where('harga', 'like', '%'.$menu->harga.'%')->paginate(10);
        $prek = preg_replace('/[^.0-9]/','',$menu->harga);
        return view('detail', ['menu'=> $menu, 'related'=>$related, 'prek' => $prek]);


    }
    public function ujang()
    {
        $udin = Menu::all();
        return response()->json([
            'shelby' => $udin,
        ]);
    }
    public function testrl()
    {
        return view('tester');
    }
    public function order(Request $request)
    {
        //$newOrder=$request->all();
        $jumlah = $request->post('harga') * $request->post('quantity');


        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->nama_mitra = Auth::user()->name;
        $order->nama = $request->post('nama');
        $order->bagian = $request->post('bagian');
        if ($request->post('bagian') == '') {
            $order->bagian = '-';

        }
        $order->harga = $request->post('harga');
        $order->quantity = $request->post('quantity');
        $order->total = $jumlah;

        $order->save();
        return response()->json(['success'=>'Form is successfully submitted!']);
    }
    public function menuh()
    {
        $menu = Menu::all();

        return response()->json(['menuee'=>$menu]);
    }

    public function joint(Request $request)
    {


        $daftar = new Daftar;

        $daftar->nama_lengkap = $request->post('nama');

        $daftar->nomor_hp = $request->post('hp');
        $daftar->email = $request->post('email');
        $daftar->tanggal_lahir = $request->post('tanggal');

        if($request->hasFile('ktp')){
            $filename = $request->ktp->getClientOriginalName();
            $request->ktp->storeAs('KTP',$filename,'public');
            $daftar->ktp = $filename;

        }
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'hp' =>  'required|unique:daftars,nomor_hp',
            'email'=> 'required|unique:daftars,email',
            'ktp'=> 'required'
        ]);

        $daftar->save();

        return redirect()->route('home')->with('success', 'kami telah menghubungi kemitraan dkriuk tentang pendaftaran anda');
    }
}
