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
            if($("#periodeInput").val() == '2-12 juli 2018' || $("#periodeInput").val() == '2-12 juillet 2018'){
              $('#confirmation_wait_div').show();
            } else {
              $('#confirmation_div').show();
            }
          }
        });
  }  
  )}
)