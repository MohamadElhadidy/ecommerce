        @if (count($sliders))
        <section class="hero__slider--section slider__section3 mb-16 container mt-6" >
            <div class="hero__slider--inner hero__slider--activation swiper">
                <div class="hero__slider--wrapper swiper-wrapper">
                    @foreach ($sliders as $slider)
                    <div class="swiper-slide ">
                        <div class="hero__slider--items home3__slider--bg" style=" background: url(/sliders/{{pathinfo($slider)['basename']}});">
                            <div class="container-fluid">
                                <div class="hero__slider--items__inner">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>
        @endif
