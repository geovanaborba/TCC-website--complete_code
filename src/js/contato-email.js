$(document).ready(function() {
    $('#novo-email').hide();
    $('#mySelect').change(function() {
      if ($('#mySelect').val() == 'Quero trocar meu email cadastrado') {
        $('#novo-email').show();
      } else {
        $('#novo-email').hide();
      }
    });
  });