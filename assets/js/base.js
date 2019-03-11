$(document).ready(function(){

  $('input[name=numero]').focus();

  $('input[name=numero]').mask('(00) 0 0000-0000');

  $("form").submit(function() {

    var input_pais = $('input[name=pais]').val().replaceAll('+', '');
    var input_numero = $('input[name=numero]').val().replaceAll('(', '').replaceAll(')', '').replaceAll('-', '').replaceAll(' ', '');

    alert('http://wa.me/' + (input_pais + input_numero));
    window.location.href = 'http://wa.me/' + (input_pais + input_numero);

    $(this).serialize();
    return false;

  });

});