$(function() {
  $("#inscriptionForm").submit(function(e) {
    $('#pageLang').val(document.getElementById('langId').innerHTML);

      e.preventDefault();
      var $form = $(this);
      if(!$form.valid()){
        return false;
      }
      
      $.ajax({
        type: "POST",
        url: "php/mail.php",
        data: $("#inscriptionForm").serialize(), // serializes the form's elements.
        success: 
          function(){
            $("#inscriptionForm").hide();
            $("#inscription_div").hide();
            $("#reduction_div").hide();
            $('#confirmation_div').show();
          }
        });
  }  
  )}
)