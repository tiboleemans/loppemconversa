$(function() {
  $("#inscriptionForm").submit(function(e) {
            e.preventDefault();
            var $form = $(this);
             if(! $form.valid()) return false;

            $.ajax({
                   type: "POST",
                   url: "php/index.php",
                   data: $("#inscriptionForm").serialize(), // serializes the form's elements.
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
})