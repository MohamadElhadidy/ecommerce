@section('styles')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 80%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fcf5ee;
            display: flex;
            align-items: center;

        }
        .swiper-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet, .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet{
            background: gray;
        }

    </style>
@endsection
<div class="swiper mySwiper bg-[#fcf5ee]">
    <div class="swiper-wrapper ">
        <div class="swiper-slide ">
            <div class="w-[50%] space-y-6 flex flex-col justify-center pl-32  text-left">
                <p class="text-slate-700">45% MEGA SALE OFFER</p>
                <h1 class="font-semibold text-[64px]">Unique & <br>Stylish Furniture</h1>
                <p class="text-slate-500 whitespace-normal w-[60%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit quam scelerisque a tincidunt urna. Nisl, quam orci malesuada</p>
                <a href="#"  class="bg-black w-[15%] rounded-xl text-white p-4 hover:text-black hover:bg-white border border-black">Shop Now</a>
            </div>
            <img src="{{asset('/assets/images/1.png')}}"  width="50%" alt="">
        </div>
        <div class="swiper-slide">
            <div class="w-[50%] space-y-6 flex flex-col justify-center  pl-32 whitespace-nowrap  text-left">
                <p class="text-slate-700">45% MEGA SALE OFFER</p>
                <h1 class="font-semibold text-[64px]">Unique & <br>Stylish Furniture</h1>
                <p class="text-slate-500 whitespace-normal w-[60%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit quam scelerisque a tincidunt urna. Nisl, quam orci malesuada</p>
                <a href="#"  class="bg-black w-[15%] rounded-xl text-white p-4 hover:text-black hover:bg-white border border-black">Shop Now</a>
            </div>
            <img src="{{asset('/assets/images/1.png')}}" width="50%" alt="">
        </div>
        <div class="swiper-slide">
            <div class="w-[50%] space-y-6 flex flex-col justify-center  pl-32 whitespace-nowrap  text-left">
                <p class="text-slate-700">45% MEGA SALE OFFER</p>
                <h1 class="font-semibold text-[64px]">Unique & <br>Stylish Furniture</h1>
                <p class="text-slate-500 whitespace-normal w-[60%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit quam scelerisque a tincidunt urna. Nisl, quam orci malesuada</p>
                <a href="#" class="bg-black w-[15%] rounded-xl text-white p-4 hover:text-black hover:bg-white border border-black">Shop Now</a>
            </div>
            <img src="{{asset('/assets/images/1.png')}}" width="50%" alt="">
        </div>

    </div>
    <div class="swiper-pagination"></div>
</div>
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    </script>
@endsection
