@extends('layouts.layout')

@section('content')
<div class="slider">
  <div class="callbacks_container">
   <ul class="rslides" id="slider">
     <li>
       <div class="banner1">
        <div class="banner-info">
          <div class="slide-content">
            <h3>BanShop your best Tire online shop</h3>
            <p>Menyediakan ban yang dibutuhkan oleh anda.</p>
          </div>
        </div>
      </div>
    </li>
    <li>
     <div class="banner2">
       <div class="banner-info">
        <div class="slide-content">
         <h3>Harga bersahabat</h3>
         <p>Harga per-ban dimulai dari range 300.000!</p>
       </div>
     </div>
   </div>
 </li>
 <li>
   <div class="banner3">
     <div class="banner-info">
      <div class="slide-content">
       <h3>Forum tanya jawab</h3>
       <p>Kami pun menyediakan tempat untuk tanya jawab seputar ban yang akan anda beli.</p>
     </div>
   </div>
 </div>
</li>
</ul>
</div>
</div>
<!---->

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

<div class="items">
 <div class="container">
    <h2 class="text-center" style="font-family: Dosis-Medium">Latest Update</h2>
    <br/>
    <br/>
   <div class="items-sec">
     @foreach($data as $ban)
     <div class="col-md-3 feature-grid">
       <a href="{{ url('produk') }}""><img src="{{ URL::asset($ban->path_gambar) }}" alt=""/>
         <div class="arrival-info text-center">
          <h4><p>{{ $ban->nama_ban }}</p></h4>
           <p>Rp. {{ $ban->harga }} per-ban</p>
           <span class="pric1">Ukuran Ban : {{ $ban->lebar.'/'.$ban->profil.' R'.$ban->diameter.' '.$ban->indeks_muatan.$ban->simbol_kecepatan}} <br/>
           @if ($ban->stok == 0)
            Stok : Habis
           @else
            Stok : {{ $ban->stok }}
           @endif
           <br/> Updated at : {{$ban->updated_at}}</span>
         </div>
         <div class="viw">
          <a href="{{ url('produk') }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
        </div>
      </a>
    </div>
    @endforeach

<div class="clearfix"></div>
</div>
</div>
</div>
<!---->
<div class="offers">
 <div class="container">
   <h3>Alur BanShop</h3>
   <div class="offer-grids">
     <div class="col-md-3 text-center">
       <a href="#"><div class="offer-grid1">
         {{-- <div class="ofr-pic"> --}}
           <center><img src="{{ URL::asset('img/search.png') }}" class="img-responsive" alt="" style="width: 100px; height: 100px;"/></center>
         {{-- </div> --}}
         <div class="ofr-pic-info text-center">
           <h4>01. Cari Ban yang anda suka</h4>
           <span>Tersedia lebih dari 10 merek</span>
           <p>Cari Sekarang</p>
         </div>
         <div class="clearfix"></div>
       </div></a>
     </div>
     <div class="col-md-3 text-center">
       <a href="#"><div class="offer-grid1">
         {{-- <div class="ofr-pic"> --}}
           <center><img src="{{ URL::asset('img/brd001.png') }}" class="img-responsive" alt="" style="width: 100px; height: 100px;" /></center>
         {{-- </div> --}}
         <div class="ofr-pic-info text-center">
           <h4>02. Pilih ban dan masukkan ke keranjang</h4>
           <span>Bisa membeli lebih dari 1 model ban</span>
           <p>Keranjang</p>
         </div>
         <div class="clearfix"></div>
       </div></a>
     </div>
     <div class="col-md-3 text-center">
       <a href="#"><div class="offer-grid1">
         {{-- <div class="ofr-pic"> --}}
           <center><img src="{{ URL::asset('img/shopping-store.png') }}" class="img-responsive" alt="" style="width: 100px; height: 100px;"/></center>
         {{-- </div> --}}
         <div class="ofr-pic-info text-center">
           <h4>03. Bayar lewat lebih dari 1 atm</h4>
           <span>Bisa COD ataupun transfer</span>
           <p>Transfer</p>
         </div>
         <div class="clearfix"></div>
       </div></a>
     </div>
     <div class="col-md-3 text-center">
       <a href="#"><div class="offer-grid1">
         {{-- <div class="ofr-pic"> --}}
           <center><img src="{{ URL::asset('img/rocket-launch.png') }}" class="img-responsive" alt="" style="width: 100px; height: 100px;"/></center>
         {{-- </div> --}}
         <div class="ofr-pic-info text-center">
           <h4>04. Pengiriman secara cepat dan tepat</h4>
           <span>COD atau lewat kurir yang anda inginkan</span>
           <p>Konfirmasi untuk pengiriman</p>
         </div>
         <div class="clearfix"></div>
       </div></a>
     </div>
     {{-- <div class="col-md-6 grid-right">
       <a href="#"><div class="offer-grid2">
         <div class="ofr-pic-info2">
           <h4>Flat Discount</h4>
           <span>UP TO 30% OFF</span>
           <h5>Outdoor Gate Lights</h5>
           <p>Shop Now</p>
         </div>
         <div class="ofr-pic2">
           <img src="{{ URL::asset('main/images/ofr3.jpg') }}" class="img-responsive" alt=""/>
         </div>
         <div class="clearfix"></div>
       </div></a>
     </div> --}}
     <div class="clearfix"></div>
   </div>
 </div>
</div>
@endsection