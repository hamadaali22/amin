<x-website.web-master>
    @section('title')
    <title>جاري مراجعة الطلب</title>
    @endsection
    @section('style')
    <style>

    </style>
    @endsection
    @section('content')
    <div style=" position:relative ;">
        <div class=" loading-section-title d-flex ">
            <h1 class="font-weight-bold">جاري عرض الأسعار</h1>
            <p class="font-weight-bold">يرجى الانتظار...</p>
        </div>
        <div class="wrap ">
            <img width="100%" height="640px" src="/images/سيارة-متحركة-4.gif" alt="">


        </div>
    </div>
    </div>
    @endsection
    @section('script')
    <script src="js/anime/anime.2.0.0.js"></script>
    <script src="js/myJS.js"></script>
    <script>
        car = anime({
            targets: '.content',
            translateY: -2,
            easing: 'easeInOutSine',
            duration: 1000,
            delay: function(el, i) {
                return i * 250
            },
            direction: 'alternate',
            loop: true
        });
        car__wheel = anime({
            targets: '.car #car__wheel1,#car__wheel2',
            rotate: 360,
            easing: 'linear',
            loop: true,
            direction: 'reverse',
        });
        // setTimeout(function() {
        //     window.location.href = 'http://127.0.0.1:8000/purchase_flow/price_list';
        // }, 5000);
    </script>
    @endsection
</x-website.web-master>