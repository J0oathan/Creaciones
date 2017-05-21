$(document).ready(function(){
  $("#regi").click(function(){
    var name =$("#no").val();
    var passw = $("#pas").val();
    var email = $("#em").val();
    var tipo = $("#tip").val();

    var sdata = 'no='+ name + '&pas='+ passw+'&em='+ email+'&tip='+tipo;
    if(name==""||passw==""||email==""||tipo==""){
    }
    else{
      $.ajax({
        type: "POST",
        url: "php/insertar.php",
        data: sdata,
        success: function(result){
            $("#mes").html(result);
        }
      });
    }
  });
});