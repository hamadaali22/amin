
    <title>التفاصيل والدفع</title>
 

    <!-- ================================
    START BOOKING AREA
================================= -->
    <section class="booking-area padding-top-100px padding-bottom-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    
                    

                    <div class="form-box" style="direction: ltr">

                        <br>

                        <div id="">
                            <script src="https://eu-prod.oppwa.com/v1/paymentWidgets.js?checkoutId={{$res['id']}}"></script>
                            <form action="{{route('checkout')}}" class="paymentWidgets" data-brands="VISA MASTER"></form>
                        </div>
                        <br>
                    </div><!-- end form-box -->
                </div><!-- end col-lg-8 -->
                
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end booking-area -->
    <!-- ================================
    END BOOKING AREA
================================= -->





    