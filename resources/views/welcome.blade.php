@extends('layouts.landing')

<!doctype html>


<section id="home-section" class="hero">
        <h3 class="vr">PT Monarre Makmur Abadi</h3>
          <div class="home-slider js-fullheight owl-carousel">
          <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
              <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="one-third order-md-last img js-fullheight" style="background-image:url(images/4.png);">
                    <div class="overlay"></div>
                </div>
                  <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text">
                        {{-- <span class="subheading">Welcome to the digilab</span> --}}
                        <h2 class="mb-4 mt-3">PT Monarre Makmur Abadi </h2>
                        {{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p> --}}
                        <div class="intro-info">
                        <div>
                        <a href="{{ backpack_url('production') }}" class="btn btn-primary px-5 py-3 mt-3">Produksi</a>
                        <a href="{{ backpack_url('packing') }}" class="btn btn-primary px-5 py-3 mt-3">Packing</a>
                        </div>
                        <div>
                        <a href="{{ backpack_url('material') }}" class="btn btn-primary px-5 py-3 mt-3">Gudang</a>
                        <a href="{{ route('discount') }}" class="btn btn-primary px-5 py-3 mt-3">Diskon</a>
                        </div>
                        <div>
                        <a href="{{ route('ppic') }}" class="btn btn-primary px-5 py-3 mt-3">PPIC</a>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>

          <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid p-0">
              <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="one-third order-md-last img js-fullheight" style="background-image:url(images/5.png);">
                    <div class="overlay"></div>
                </div>
                  <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text">
                        {{-- <span class="subheading">Welcome to the digilab</span> --}}
                        <h2 class="mb-4 mt-3">PT Monarre Makmur Abadi</h2>
                        {{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p> --}}
                        
                        <p><a href="{{ backpack_url('production') }}" class="btn btn-primary px-5 py-3 mt-3">Produksi</a></p>
                        <p><a href="{{ backpack_url('packing') }}" class="btn btn-primary px-5 py-3 mt-3">Packing</a></p>
                        <p><a href="{{ backpack_url('material') }}" class="btn btn-primary px-5 py-3 mt-3">Gudang</a></p>
                        <p><a href="{{ route('discount') }}" class="btn btn-primary px-5 py-3 mt-3">Diskon</a></p>
                        <p><a href="{{ route('ppic') }}" class="btn btn-primary px-5 py-3 mt-3">PPIC</a></p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </section>
</html>
