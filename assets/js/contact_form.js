jQuery(document).ready(function ($) {
        $("#contact-form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 4,
                    maxlength: 16,
                    normalizer: function(value) {
                        return $.trim(value);
                    }
                },
                phone: {
                    required: true,
                    minlength: 11,
                    digits: true,
                    normalizer: function(value) {
                        return $.trim(value);
                    }
                },
                email: {
                    required: true,
                    email: true,
                    normalizer: function(value) {
                        return $.trim(value);
                    }
                },
                'accept[]': {
                    required: true,
                },
            },
            invalidHandler: function(event, validator) {
                $('.send-button').addClass('disabled');
            },
            errorPlacement: function(error, element) {
                $('.send-button').addClass('disabled');
            },
            success: function() {
                $('.send-button').removeClass('disabled');
            },
            submitHandler: function(form) {
                $.post(
                    'https://httpbin.org/post',
                    $(form).serialize(),
                    (success)=>{
                        $('.form-block>h2').html("200 OK");
                    }
                );
            },
            errorElement: "label",
        });
       $('.send-button').click(()=>{
           $("#contact-form").submit();
           return false;
       });
});