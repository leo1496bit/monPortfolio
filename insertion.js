
$('#insertion').submit(function(e){
  e.preventDefault();
  var donnees = $(this).serialize();
  $.ajax({
    data : donnees,
    url : 'insertion.php',
    type:'POST',
  }).done(function(response){
    $("#com").after(response);
  });

});

  