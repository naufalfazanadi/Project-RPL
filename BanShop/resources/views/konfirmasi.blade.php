@extends('layouts.layout')

@section('content')
<div class="login_sec">
	 <div class="container">
		 <ol class="breadcrumb">
		 	<h2>Konfirmasi Pembayaran</h2>
		 </ol>
		 <div class="col-md-6 log">
				 <p>Isilah data dibawah ini sesuai transaksi anda</p>
				 <p>Jika terjadi masalah hubungi kami, <span>click here</span></p>
				 <form>
					 <h5>ID Transaksi</h5>
					 <input type="text" value="">
					 <h5>Kode Pembayaran (didapatkan ketika transfer)</h5>
					 <p>Ketikkan 'COD' jika pembayaran melalui metode COD</p>
					 <input type="text" value="">
					 <input type="submit" value="Konfirm">
				 </form>

		 </div>

		 <div class="clearfix"></div>
	 </div>
</div>
@endsection