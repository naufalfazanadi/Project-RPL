<div class="header-top">
 <div class="header-bottom">
    <div class="logo">
        <h1><a href="{{ url('/') }}"><span><img src="{{ URL::asset('main/images/tire.png') }}" style="height: 50px; width: 50px;"></span>&nbsp BanShop</a></h1>
    </div>
    <!---->
    <div class="top-nav">
        <ul class="memenu skyblue"><li class="active"><a href="{{ url('/') }}">Home</a></li>
            <li class="grid"><a href="#">Produk</a>
                <div class="mepanel">
                    <div class="row">
                        <div class="col1 me-one">
                            <h4>Merek A - C</h4>
                            <ul>
                                <li><a href="{{ url('produk') }}">All Item</a></li>
                                <li><a href="{{ url('produk') }}">Accelera</a></li>
                                <li><a href="{{ url('produk') }}">Achilles</a></li>
                                <li><a href="{{ url('produk') }}">Bridgestone</a></li>
                                <li><a href="{{ url('produk') }}">Continental</a></li>
                            </ul>
                        </div>
                        <div class="col1 me-one">
                            <h4>Merek D - M</h4>
                            <ul>
                                <li><a href="{{ url('produk') }}">Dunlop</a></li>
                                <li><a href="{{ url('produk') }}">Goodyear</a></li>
                                <li><a href="{{ url('produk') }}">GT Radial</a></li>
                                <li><a href="{{ url('produk') }}">Hankook</a></li>
                                <li><a href="{{ url('produk') }}">Michelin</a></li>
                            </ul>
                        </div>
                        <div class="col1 me-one">
                            <h4>Merek N - Y</h4>
                            <ul>
                                <li><a href="{{ url('produk') }}">Nitto</a></li>
                                <li><a href="{{ url('produk') }}">Pirelli</a></li>
                                <li><a href="{{ url('produk') }}">Roadstone</a></li>
                                <li><a href="{{ url('produk') }}">Toyo</a></li>
                                <li><a href="{{ url('produk') }}">Yokohama</a></li>
                            </ul>
                        </div>
                        {{-- <div class="col1 me-one">
                            <h4>Type</h4>
                            <ul>
                                <li><a href="#">10PR</a></li>
                                <li><a href="#">12PR</a></li>
                                <li><a href="#">14PR</a></li>
                                <li><a href="#">16PR</a></li>
                                <li><a href="#">25</a></li>
                                <li><a href="#">30</a></li>
                                <li><a href="#">35</a></li>
                                <li><a href="#">40</a></li>
                                <li><a href="#">45</a></li>
                                <li><a href="#">50</a></li>
                                <li><a href="#">55</a></option>
                                <li><a href="#">60</a></li>
                                <li><a href="#">65</a></li>
                                <li><a href="#">70</a></li>
                                <li><a href="#">75</a></li>
                                <li><a href="#">80</a></li>
                                <li><a href="#">85</a></li>
                                <li><a href="#">8PR</a></li>
                            </ul>
                        </div>
                        <div class="col1 me-one">
                            <h4>Popular Brands</h4>
                            <ul>
                                <li><a href="{{ url('produk') }}">Everyday</a></li>
                                <li><a href="{{ url('produk') }}">Philips</a></li>
                                <li><a href="{{ url('produk') }}">Havells</a></li>
                                <li><a href="{{ url('produk') }}">Wipro</a></li>
                                <li><a href="{{ url('produk') }}">Jaguar</a></li>
                                <li><a href="{{ url('produk') }}">Ave</a></li>
                                <li><a href="{{ url('produk') }}">Gold Medal</a></li>
                                <li><a href="{{ url('produk') }}">Anchor</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </li>
            <li class="grid"><a href="{{ url('konfirmasi') }}">Konfirmasi</a></li>
            <li class="grid"><a href="{{ url('faq') }}">FAQ</a></li>
            <li class="grid"><a href="{{ url('kontak') }}">Kontak</a></li>
        </ul>
    </div>
    <!---->
    <div class="cart box_1">
     <a href="checkout.html">
        <div class="total">
            <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div>
            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
        </a>
        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
    <!---->
</div>
<div class="clearfix"> </div>
</div>