$().ready(function() {
    // validate signup form on keyup and submit
    $(".form_validate").validate({
        rules: {
            name: "required",
            lastname: "required",
            phone:{
                required: true,
                rangelength: [10, 10],
                number: true
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            name: "Please enter your firstname",
            lastname: "Please enter your lastname",
            phone: {
                required: "Please enter a phone",
                rangelength: "Your phone must consist of 10 characters"
            },
            email: {
                required: "Please enter an email",
                email: "Please enter a valid email"
            }
        }
    });
});
