<p>
	{{$produk->harga}} |
	Stok : {{$produk->stok}} |
	Berat : {{$produk->berat}} gr |
	Seller : {{$produk->username}} |
	Tanggal Produk : {{$produk->created_at->diffForHumans()}} 
</p>