function test() {
  var url = "index.php";

  $.ajax({
           type: "POST",
           url: url,
           data: $("#formulier").serialize(),
           success: function(data){

           }
         });

}
