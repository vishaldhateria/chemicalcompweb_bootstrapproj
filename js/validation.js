$(function() {

            $.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Letters only please");

     jQuery.validator.addMethod("fileSize", function(val, element) {

     var size = element.files[0].size;
     console.log(size);

     if (size > 2048576) // checks the file more than 1 MB
     {
         return false;
     } else {
         return true;
     }

 }, "Maximum 2MB Image Size Allowed");
    $.validator.addMethod( "extension", function( value, element, param ) {
               param = typeof param === "string" ? param.replace( /,/g, "|" ) : "png|jpe?g|pdf|doc|docx";
               return this.optional( element ) || value.match( new RegExp( "\\.(" + param + ")$", "i" ) );
           }, $.validator.format( "Please enter a value with a valid extension." ) );
            // Initialize form validation on the registration form.
            // It has the name attribute "registration"
            // Career Form Start
            $("#career-form").validate({
                ignore: ".ignore",
                // Specify validation rules
                rules: {
                    // The key name on the left side is the name attribute
                    // of an input field. Validation rules are defined
                    // on the right side
                   
                    uname: {
                        required: true,
                        //lettersonly: true
                    },

                    uphone: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    uemail: {
                        required: true,
                        email: true
                    }
                },

                // Specify validation error messages
                messages: {
                    
                    uname:{
                        required: "Please Enter Your Name",
                       // lettersonly: "Please Enter Only Letters"
                    },
                    uphone: {
                        minlength: "Enter 10 digit number",
                        maxlength: "Enter 10 digit number"
                    },
                    uemail:{ 
                         required: "Please Enter a Valid Email Address"
                    }
                    
                },
                // Make sure the form is submitted to the destination defined
                // in the "action" attribute of the form when valid
                submitHandler: function(form) {
                    form.submit();
                }
            });
            // Career Form End

});
