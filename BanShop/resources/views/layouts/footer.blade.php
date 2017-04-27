{{-- <div class="subscribe">
     <div class="container">
         <h3>Newsletter</h3>
         <form>
             <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
             <input type="submit" value="Subscribe">
         </form>
     </div>
 </div> --}}
 <!---->
 <div class="footer">
     <div class="container">
         <div class="footer-grids">
             <div class="col-md-3 about-us">
                 <h3>About Us</h3>
                 <p>BanShop online shop yang memberikan fitur terbaik untuk anda dan memberikan penawaran terbaik mengenai ban yang kami miliki. InsyaAllah anda akan puas dan nyaman menggunakan layanan kami.</p>
             </div>
             <div class="col-md-3 ftr-grid">
                <h3>More Info</h3>
                <ul class="nav-bottom">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="{{ url('contak') }}">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3 ftr-grid">
                <h3>Merek</h3>
                <ul class="nav-bottom">
                    <li><a href="product.html">Accelera</a></li>
                    <li><a href="product.html">Achilles</a></li>
                    <li><a href="product.html">Bridgestone</a></li>
                    <li><a href="product.html">Continental</a></li>
                    <li><a href="product.html">Dunlop</a></li>
                    <li><a href="product.html">Goodyear</a></li>
                </ul>
            </div>
            <div class="col-md-3 ftr-grid">
                <ul class="nav-bottom">
                    <li><a href="product.html">GT Radial</a></li>
                    <li><a href="product.html">Hankook</a></li>
                    <li><a href="product.html">Michelin</a></li>
                    <li><a href="product.html">Nitto</a></li>
                    <li><a href="product.html">Pirelli</a></li>
                    <li><a href="product.html">Roadstone</a></li>
                    <li><a href="product.html">Toyo</a></li>
                    <li><a href="product.html">Yokohama</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="copywrite">
 <div class="container">
     <div class="copy">
         <p>© 2017 BanShop. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> and Kelompok 3 RPL</p>
     </div>
     <div class="social">
        <a href="#"><i class="facebook"></i></a>
        <a href="#"><i class="twitter"></i></a>
        <a href="#"><i class="dribble"></i></a>
        <a href="#"><i class="google"></i></a>
        <a href="#"><i class="youtube"></i></a>
    </div>
    <div class="clearfix"></div>
</div>
</div>

<!-- start menu -->
<script type="text/javascript" src="{{ asset('main/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/simpleCart.min.js') }}"> </script>
<script type="text/javascript" src="{{ asset('main/js/bootstrap.js') }}"> </script>
<script type="text/javascript" src="{{ asset('main/js/memenu.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/responsiveslides.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/jquery.flexisel.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/jquery.flexslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('main/js/jquery.jscrollpane.min.js') }}"></script>
<script src="{{asset('main/js/imagezoom.js') }}"></script>
<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
      });
    });
    </script>
<script>
    $(document).ready(function(){
      $(".memenu").memenu();
  });
</script>

<script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: false,
    });
  });
</script>

<script type="text/javascript" id="sourcecode">
  $(function()
  {
    $('.scroll-pane').jScrollPane();
});
</script>

<!--script for categories product-->
<script>
    $(document).ready(function(){
        $(".tab1 .single-bottom").hide();
        $(".tab2 .single-bottom").hide();
        $(".tab3 .single-bottom").hide();
        $(".tab4 .single-bottom").hide();
        $(".tab5 .single-bottom").hide();

        $(".tab1 ul").click(function(){
            $(".tab1 .single-bottom").slideToggle(300);
            $(".tab2 .single-bottom").hide();
            $(".tab3 .single-bottom").hide();
            $(".tab4 .single-bottom").hide();
            $(".tab5 .single-bottom").hide();
        })
        $(".tab2 ul").click(function(){
            $(".tab2 .single-bottom").slideToggle(300);
            $(".tab1 .single-bottom").hide();
            $(".tab3 .single-bottom").hide();
            $(".tab4 .single-bottom").hide();
            $(".tab5 .single-bottom").hide();
        })
        $(".tab3 ul").click(function(){
            $(".tab3 .single-bottom").slideToggle(300);
            $(".tab4 .single-bottom").hide();
            $(".tab5 .single-bottom").hide();
            $(".tab2 .single-bottom").hide();
            $(".tab1 .single-bottom").hide();
        })
        $(".tab4 ul").click(function(){
            $(".tab4 .single-bottom").slideToggle(300);
            $(".tab5 .single-bottom").hide();
            $(".tab3 .single-bottom").hide();
            $(".tab2 .single-bottom").hide();
            $(".tab1 .single-bottom").hide();
        })
        $(".tab5 ul").click(function(){
            $(".tab5 .single-bottom").slideToggle(300);
            $(".tab4 .single-bottom").hide();
            $(".tab3 .single-bottom").hide();
            $(".tab2 .single-bottom").hide();
            $(".tab1 .single-bottom").hide();
        })
    });
</script>
<script type='text/javascript'>//<![CDATA[
    $(window).load(function(){
       $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 100000,
        values: [ 500, 100000 ],
        slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
    }
});
       $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

                    });//]]>
                </script>
<!-- script -->