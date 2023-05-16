// id="send-link-moblile"
$('#send-link-moblile').on('submit', function (event) {
    event.preventDefault();
    $('#phone-error').text('');
    // $('#start-date-error').text('');
    // $('#code-error').text('');


    companyId = $('#company_id').val();
    companyName = $('#company_name').val();
    phone = $('#phone').val();
    _token = $("input[name='_token']").val();
    // console.log(ID_number);
    // start_date = $('#start-date').val();
    // code = $('#code').val();
    // Insurance_type = $('#Insurance-type').val();
    $.ajax({
        url: "/company-info",
        type: "POST",
        data: {
            _token: _token,
            company_id: companyId,
            company_name: companyName,
            phone: phone,
            // start_date: start_date,
            // code: code,
            // Insurance_type: Insurance_type,
        },
        success: function (response) {
            console.log(response);
            if (response[0] == 401) { // check whether response is received
                console.log(response[0]);
                $('#phone-error').text(response['error'].phone);
                // $('#start-date-error').text(response['error'].start_date);
                // $('#code-error').text(response['error'].code);
            } else {
                console.log(response);
                // $('#phone-error').text(response['error'].phone);
                // $path='http://127.0.0.1:8000/send-link-mobile/'.;
                // window.location = $path;
            }
        },

    });
});