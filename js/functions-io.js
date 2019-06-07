$("#btn-register").click(function(event) {
  //event.preventDefault();
  //console.log("yaper");
  $.post('php/register.php',{nm:$("#firstName").val(),ln:$("#lastName").val(),email:$("#inputEmail").val(),pass:$("#inputPassword").val()}, function(data, textStatus, xhr) {
    alert(data);
  });
});
