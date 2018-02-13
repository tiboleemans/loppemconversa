/*
  Jquery Validation using jqBootstrapValidation
   example is taken from jqBootstrapValidation docs 
  */
$(function() {

    $("#inscriptionForm input,#inscriptionForm textarea").jqBootstrapValidation({
            $.ajax({
                url: "php/inscription.php",
                type: "POST",
                data: {
                    firstNameStudent : firstNameStudent,
                    lastNameStudent : lastNameStudent,

                    firstNameParent : firstNameParent,
                    lastNameParent : lastNameParent,
                    email : email,

                    streetParent : streetParent,
                    streetNumParent : streetNumParent,
                    cityParent : cityParent,
                    zipCodeParent : zipCodeParent,

                    gsm : gsm,
                    telUrgent : telUrgent,

                    nameSchool : nameSchool,
                    streetSchool : streetSchool,
                    streetNumSchool : streetNumSchool,
                    citySchool : citySchool,
                    zipCodeSchool : zipCodeSchool
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#inscriptionForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstNameParent + " it seems that my mail server is not responding...</strong> Could you please email me directly to <a href='mailto:me@example.com?Subject=Message_Me from myprogrammingblog.com;>me@example.com</a> ? Sorry for the inconvenience!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#inscriptionForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
