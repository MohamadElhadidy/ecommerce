<div class="flex justify-around px-4 py-2 w-full bg-slate-500 items-center">
    <div class="flex space-x-2 ">
        <a href="#"> <img src="{{asset('/assets/icons/facebook.svg')}}" width="25"  alt=""></a>
        <a href="#"><img src="{{asset('/assets/icons/instagram.svg')}}" width="25"  alt=""></a>
        <a href="#"><img src="{{asset('/assets/icons/twitter.svg')}}" width="25"  alt=""></a>
    </div>
    <a href="#" class="text-white font-semibold hover:text-[#fcf5ee]">{{$navigationTopMessage}}</a>
    <div class="flex space-x-2">
        <label>
            <select name="lang" class="bg-[#64748B] text-white cursor-pointer">
                <option selected value="en">English</option>
                <option value="ar">Arabic</option>
            </select>
        </label>
        <label>
            <select name="lang" class="bg-[#64748B] text-white cursor-pointer">
                <option selected value="usd">USD $</option>
                <option value="egp">EGP LE</option>
            </select>
        </label>
    </div>

</div>
