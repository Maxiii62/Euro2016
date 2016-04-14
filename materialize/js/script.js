$("#cnxBtn").on('click',function(){
  $("#modalConnexion").openModal();
})

$(".closeModal").on('click',function(){
  $($(".modal").closest()).closeModal();
})

$( "#sbmtCnx" ).click(function() {
           $.ajax({
               method: "POST",
               url : "/Euro2016/controller/controller.php",
               data: { ws: 'users', action : 'connect', login: $("#login").val(), password: $("#password").val()},
               success: function(response) {
                 if (jQuery.parseJSON(response).mail != null){
                       if (jQuery.parseJSON(response).mail.indexOf("@") > -1){
                           $.ajax({
                               type: "POST",
                               url: "/Euro2016/home.php",
                               data: { client: jQuery.parseJSON(response)},
                               success:function(data){
                                   window.location.replace("/Euro2016/home.php");
                               }
                           });
                       };
                   }else{
                     $("#badRQ").val("Les identifiants fournis se permettent pas de connecter");
                   }
               }
          });
});
