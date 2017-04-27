@extends('layouts.layout')

@section('content')
<!--header//-->

@foreach($data as $var)
<div class="product">
	 <div class="container">
		 <div class="product-price1">
			 <div class="top-sing">
				  <div class="col-md-7 single-top">
					 <div class="flexslider">
							  <ul class="slides">
								<li data-thumb="{{ asset($var->path_gambar) }}">
									<div class="thumb-image"> <img src="{{ asset($var->path_gambar) }}" > </div>
								</li>
								<li data-thumb="{{ asset($var->path_gambar) }}">
									 <div class="thumb-image"> <img src="{{ asset($var->path_gambar) }}" > </div>
								</li>
								<li data-thumb="{{ asset($var->path_gambar) }}">
								   <div class="thumb-image"> <img src="{{ asset($var->path_gambar) }}" > </div>
								</li>
							  </ul>
						</div>
				 </div>
			     <div class="col-md-5 single-top-in simpleCart_shelfItem">
					  <div class="single-para ">
						 <h4>{{ $var->nama_ban }}<br/>{{ $var->lebar.'/'.$var->profil.' R'.$var->diameter.' '.$var->indeks_muatan.$var->simbol_kecepatan}} <br/></h4>
							<h5 class="item_price">Rp. {{ $var->harga }}</h5>
							<p class="para" style="color: #000">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Vivamus porttitor tincidunt elementum nisi a, euismod rhoncus urna. Curabitur scelerisque vulputate diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat </p>
							<div class="prdt-info-grid">
								 <ul style="color: #000">
									 <li style="color: #000">- Merek : {{ $var->merek }}</li>
									 <li style="color: #000">- Lebar : {{$var->lebar}}</li>
									 <li style="color: #000">- Profil : {{$var->profil}}</li>
									 <li style="color: #000">- Diameter : {{$var->diameter}}</li>
									 <li style="color: #000">- Simbol Kecepatan : {{$var->simbol_kecepatan}}</li>
									 <li style="color: #000">- Indeks Muatan : {{$var->indeks_muatan}}</li>
									 <li style="color: #000">- Negara Asal : {{$var->negara_asal}}</li>
									 <li style="color: #000">- Stok Ban : {{$var->stok}}</li>
								 </ul>
							</div>
							<input type="text" class="item_quantity" value="1" />
							<a href="#" class="add-cart item_add">ADD TO CART</a>
					 </div>
				 </div>
				 <div class="clearfix"> </div>
			 </div>
     </div>
	     <hr>
	     <h2 class="text-center">Forum Section</h2>
	     <hr>
	 </div>
</div>
@endforeach
<div class="subscribe">
 <div class="container">
   <h3>Cari Spesifikasi Ban</h3>
   <form class="form-inline">
    <b>Lebar : </b>
    <select class="form-control">
      <option value=""></option>
      <option value="10.00">10.00</option>
      <option value="135">135</option>
      <option value="145">145</option>
      <option value="155">155</option>
      <option value="165">165</option>
      <option value="175">175</option>
      <option value="185">185</option>
      <option value="195">195</option>
      <option selected="selected" value="205">205</option>
      <option value="215">215</option>
      <option value="225">225</option>
      <option value="235">235</option>
      <option value="245">245</option>
      <option value="255">255</option>
      <option value="265">265</option>
      <option value="275">275</option>
      <option value="280">280</option>
      <option value="285">285</option>
      <option value="295">295</option>
      <option value="305">305</option>
      <option value="30x9,5">30x9,5</option>
      <option value="315">315</option>
      <option value="31X10.50">31X10.50</option>
      <option value="325">325</option>
      <option value="335">335</option>
      <option value="33X12.50">33X12.50</option>
      <option value="345">345</option>
      <option value="355">355</option>
      <option value="500/600">500/600</option>
      <option value="600">600</option>
      <option value="650/700/750">650/700/750</option>
      <option value="7.50">7.50</option>
      <option value="750">750</option>
    </select>
    <b>Profil : </b>
    <select class="form-control">
      <option value=""></option>
      <option value="10PR">10PR</option>
      <option value="12PR">12PR</option>
      <option value="14PR">14PR</option>
      <option value="16PR">16PR</option>
      <option value="25">25</option>
      <option value="30">30</option>
      <option value="35">35</option>
      <option value="40">40</option>
      <option value="45">45</option>
      <option value="50">50</option>
      <option selected="selected" value="55">55</option>
      <option value="60">60</option>
      <option value="65">65</option>
      <option value="70">70</option>
      <option value="75">75</option>
      <option value="80">80</option>
      <option value="85">85</option>
      <option value="8PR">8PR</option>
    </select>
    <b>Diameter : </b>
    <select class="form-control">
      <option value=""></option>
      <option value="9">9</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option selected="selected" value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="24">24</option>
      <option value="R20">R20</option>
    </select>
    <b>Merek : </b>
    <select class="form-control">
      <option selected="selected" value="All">All</option>
      <option value=""></option>
      <option value="Accelera">Accelera</option>
      <option value="Achilles">Achilles</option>
      <option value="Bridgestone">Bridgestone</option>
      <option value="Continental">Continental</option>
      <option value="Dunlop">Dunlop</option>
      <option value="Goodyear">Goodyear</option>
      <option value="GT Radial">GT Radial</option>
      <option value="Hankook">Hankook</option>
      <option value="Michelin">Michelin</option>
      <option value="Nitto">Nitto</option>
      <option value="Pirelli">Pirelli</option>
      <option value="Roadstone">Roadstone</option>
      <option value="Toyo">Toyo</option>
      <option value="Yokohama">Yokohama</option>
    </select>
    {{-- <input type="text" class="text" value="Merek" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Merek';}"> --}}
    <input type="submit" value="Cari">
  </form>
</div>
</div>
@endsection