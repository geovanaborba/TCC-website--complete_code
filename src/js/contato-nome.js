$(document).ready(function() {
    $('#novo-nome').hide();
    $('#mySelect').change(function() {
      if ($('#mySelect').val() == 'Quero trocar meu nome de usuário') {
        $('#novo-nome').show();
      } else {
        $('#novo-nome').hide();
      }
    });
  });