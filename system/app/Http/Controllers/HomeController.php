<?php 

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Provinsi;
class HomeController extends Controller{


	function showBeranda (){
		return view ('beranda');
	}

	function showProduk (){
		return view ('produk');
	}

	function showKategori (){
		return view ('kategori');
	}

	function test($produk, $hargaMin = 0, $hargaMax = 0){
		if($produk == 'payung'){
			echo "Tampilkan Produk Payung";
		}elseif($produk == 'sepeda'){
			echo "Produk Sepeda";
		}

		echo "<br>";
		echo "Harga Min adalah $hargaMin <br>";
		echo "Harga Max adalah $hargaMax <br>";
	}

		public function testCollection()
	{
		$list_fashion = ['Gucci', 'Supreme', 'Nike', 'Adidas', 'Dior', 'Hermes', 'Zara', 'Rolex', 'Chanel'];
		$list_fashion = collect($list_fashion);
		$list_produk = Produk::all();

	// public function testCollection()
	// {
	// 	$list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'vespa', 'KTM'];
	// 	$collection = collect($list_bike);
	// 	$list_produk = produk::all();

	// 	//Sorting
	// 	//Sort By harga Terenda 
	// 	//d($list_produk->sortBy('harga'));
	// 	//sort By Harga Tertinggi
	// 	//dd($list_bike->sortByDesc('harga')[1]);
	// 	$data['list'] = $list_produk->sortByDesc('harga')
	// 	return view('test-collection', $data);

	// 	//Take
	// 	//Skip



		
	// 	dd($list_bike, $collection, $list_produk);
	// }

		$data['list'] = Produk::paginate(15);
		return view('test-collection', $data);
		dd($list_fashion, $list_produk);
		//dd($list_fashion, $collection, $list_produk);
	}

	function testAjax(){
		$data['list_provinsi'] = provinsi::all();
		return view('test-ajax', $data);
	}
}