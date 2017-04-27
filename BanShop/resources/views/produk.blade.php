@extends('layouts.layout')

@section('content')
<div class="subscribe" style="background-color: #00796b">
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
<div class="product-model">
	<div class="container">
		<ol class="breadcrumb">
			<h2>All Products</h2>
		</ol>
		<div class="col-md-9 product-model-sec">
			@foreach($data as $ban)
			<a href="{{ asset('single/'.$ban->id_ban) }}"><div class="product-grid">
				<div class="more-product"><span> </span></div>
				<div class="product-img b-link-stripe b-animate-go  thickbox">
					<img src="{{ asset($ban->path_gambar) }}" alt=""/>
					<div class="b-wrapper">
						<h4 class="b-animate b-from-left  b-delay03">
							<button><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>Quick View</button>
						</h4>
					</div>
				</div></a>
				<div class="product-info simpleCart_shelfItem">
					<div class="product-info-cust prt_name text-center">
						<h4><span class="item_price">{{ $ban->nama_ban }}</span></h4>
						<span class="item_price">Rp. {{ $ban->harga }} per-ban</span>
						<span class="pric1">Ukuran Ban : {{ $ban->lebar.'/'.$ban->profil.' R'.$ban->diameter.' '.$ban->indeks_muatan.$ban->simbol_kecepatan}} <br/>
							@if ($ban->stok == 0)
							Stok : Habis
							<br/>
							<input type="text" class="item_quantity" value="1" disabled />
							<input type="button" class="item_add items" value="ADD" disabled>
							@else
							Stok : {{ $ban->stok }}
							<br/>
							<input type="text" class="item_quantity" value="1" />
							<input type="button" class="item_add items" value="ADD" disabled>
							@endif
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				@endforeach

			</div>
			<div class="rsidebar span_1_of_left">
				<section class="sky-form">
					<div class="product_right">
						<h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Kategori</h4>
						<div class="tab1">
							<ul class="place">
								<li class="sort">Merek</li>
								<li class="by"><img src="{{ asset('main/images/do.png') }}" alt=""></li>
								<div class="clearfix"> </div>
							</ul>
							<div class="single-bottom">
								<a href=""><p>Accelera</p></a>
					      <a href=""><p>Achilles</p></a>
					      <a href=""><p>Bridgestone</p></a>
					      <a href=""><p>Continental</p></a>
					      <a href=""><p>Dunlop</p></a>
					      <a href=""><p>Goodyear</p></a>
					      <a href=""><p>GT Radial</p></a>
					      <a href=""><p>Hankook</p></a>
					      <a href=""><p>Michelin</p></a>
					      <a href=""><p>Nitto</p></a>
					      <a href=""><p>Pirelli</p></a>
					      <a href=""><p>Roadstone</p></a>
					      <a href=""><p>Toyo</p></a>
					      <a href=""><p>Yokohama</p></a>
							</div>
						</div>
						<div class="tab2">
							<ul class="place">
								<li class="sort">Negara Asal</li>
								<li class="by"><img src="{{ asset('main/images/do.png') }}" alt=""></li>
								<div class="clearfix"> </div>
							</ul>
							<div class="single-bottom">
								<a href="#"><p>Indonesia</p></a>
								<a href="#"><p>Malaysia</p></a>
								<a href="#"><p>Thailand</p></a>
								<a href="#"><p>Asia</p></a>
								<a href="#"><p>Singapore</p></a>
							</div>
						</div>
						<div class="tab3">
							<ul class="place">
								<li class="sort">Lebar</li>
								<li class="by"><img src="{{ asset('main/images/do.png') }}" alt=""></li>
								<div class="clearfix"> </div>
							</ul>
							<div class="single-bottom">
								<a href="#"><p>Lights & Lamps</p></a>
							</div>
						</div>
						<div class="tab4">
							<ul class="place">
								<li class="sort">Profil</li>
								<li class="by"><img src="{{ asset('main/images/do.png') }}" alt=""></li>
								<div class="clearfix"> </div>
							</ul>
							<div class="single-bottom">
								<a href="#"><p>Standing Lamps</p></a>
								<a href="#"><p>Lamps</p></a>
								<a href="#"><p>Led Lamps</p></a>
							</div>
						</div>
						<div class="tab5">
							<ul class="place">
								<li class="sort">Diameter</li>
								<li class="by"><img src="{{ asset('main/images/do.png') }}" alt=""></li>
								<div class="clearfix"> </div>
							</ul>
							<div class="single-bottom">
								<a href="#"><p>Car Lights</p></a>
								<a href="#"><p>Stick Lights</p></a>
								<a href="#"><p>Thread Lights</p></a>
							</div>
						</div>
					</section>

					<section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Price</h4>
						<ul class="dropdown-menu1">
							<li><a href="">
								<div id="slider-range"></div>
								<input type="text" id="amount" style="border: 0; font-weight: NORMAL;   font-family: 'Dosis-Regular';" />
							</a></li>
						</ul>
					</section>

				<section  class="sky-form">
					<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Range Harga</h4>
					<div class="row row1 scroll-pane">
						<div class="col col-4">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>0 - 250k</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>250k - 500k</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>500k - 750k</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>750k - 1000k</label>
							<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>1000k - 1500k</label>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
@endsection