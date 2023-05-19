// id="send-link-moblile"
$('#checkout-submite').on('submit', function (event) {
    event.preventDefault();
    // $path='http://127.0.0.1:8000/get-checkout';
    // window.location = $path;
    // if($('#pay_type1').is(':checked') ){
    //     alert("nnn");
    // }else{
    //     alert("ccc");
    // }
    

   

    $('#demo1-error').text('');
    $('#demo2-error').text('');
    $('#demo3-error').text('');
    $('#demo4-error').text('');
    $('#demo5-error').text('');
    $('#demo6-error').text('');
    $('#declaration-error').text('');
    $('#bank_number-error').text('');
    $('#email-error').text('');
    $('#mobile-error').text('');
    $('#pay_type-error').text('');
    $('#agreechb-error').text('');

    // $('#load_value-error').text('');
    // $('#place_repair-error').text('');

    
    var pay_type;
    var declaration;
    var agreechb;
    insurance_type = $('#insurance_type').val();
    demo1 = $('#demo1').val();
    demo2 = $('#demo2').val();
    demo3 = $('#demo3').val();
    demo4 = $('#demo4').val();
    demo5 = $('#demo5').val();
    demo6 = $('#demo6').val();
    if($('#declaration').is(':checked') ){
        declaration = $('#declaration').val();
    }else{
    }
    
    bank_number = $('#bank_number').val();
    email = $('#email').val();
    mobile = $('#mobile').val();

    if($('#pay_type1').is(':checked') ){
        pay_type = $('#pay_type1').val();
    }else{
    }
    if($('#pay_type2').is(':checked') ){
        pay_type = $('#pay_type2').val();
    }else{
    }

    if($('#agreechb').is(':checked') ){
        agreechb = $('#agreechb').val();
    }else{
    }

    // load_value = $('#load_value').val();
    // place_repair = $('#place_repair').val();
    
   

    _token = $("input[name='_token']").val();
    // console.log(ID_number);
    // start_date = $('#start-date').val();
    // code = $('#code').val();
    // Insurance_type = $('#Insurance-type').val();
    $.ajax({
        url: "/get-save-data",
        type: "POST",
        data: {
            _token: _token,
            demo1: demo1,
            demo2: demo2,
            demo3: demo3,
            demo4: demo4,
            demo5: demo5,
            demo6: demo6,
            declaration: declaration,
            bank_number: bank_number,
            email: email,
            mobile: mobile,
            pay_type:pay_type,
            agreechb: agreechb,
            // load_value:load_value,
            // place_repair:place_repair
            insurance_type: insurance_type,
            // Insurance_type: Insurance_type,
        },
        success: function (response) {

            // console.log(response);
            if(response[0] == 401) { // check whether response is received
                // console.log(response['error'].load_value);
                console.log(response[0]);
                $('#demo1-error').text(response['error'].demo1);
                $('#demo2-error').text(response['error'].demo2);
                $('#demo3-error').text(response['error'].demo3);
                $('#demo4-error').text(response['error'].demo4);
                $('#demo5-error').text(response['error'].demo5);
                $('#demo6-error').text(response['error'].demo6);
                $('#declaration-error').text(response['error'].declaration);
                $('#bank_number-error').text(response['error'].bank_number);
                $('#email-error').text(response['error'].email);
                $('#mobile-error').text(response['error'].mobile);
                $('#pay_type-error').text(response['error'].pay_type);
                $('#agreechb-error').text(response['error'].agreechb);
                // $('#load_value-error').text(response['error'].load_value);
                // $('#place_repair-error').text(response['error'].place_repair);
            }else {
                console.log(response);
                console.log(response);
                // console.log(response.pay_type);
                if(response.pay_type =='visa'){
                    $path='https://amin-jo.net/get-checkout';
                    window.location = $path;
                }
                if(response.pay_type =='sdad'){
                    $path='https://amin-jo.net/get-checkout-sdad';
                    window.location = $path;
                }
                
            }
        },

    });
});