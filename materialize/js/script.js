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
                     Materialize.toast('Mauvaises informations de connexions', 4000)
                   }
               }
          });
});

function chargerTours(){
    $.ajax({
      method : "POST",
      url : "/Euro2016/controller/controller.php",
      data : {ws : 'matchs', action : 'getTour'},
      success : function (response){
        for(var i = 0; i < JSON.parse(response).length;i++){
          $("ul.tour").append("<li class='tab col s3'><a onClick='chargerMatch("+ JSON.parse(response)[i].idTour  +")' class='showMatch' id="+ JSON.parse(response)[i].idTour +">"+ JSON.parse(response)[i].nomTour + "</a></li>");
        }
        $(".showMatch").first().click();
      }
    })
}

function chargerMatch(id){
  $("table.matchs tbody").empty();

  $.ajax({
    method : "POST",
    url : "/Euro2016/controller/controller.php",
    data : {ws : 'matchs', action : 'getMatchTour', idTour : id,idUser : $("#idUser").val()},
    success : function (response){
      for(var i = 0; i < JSON.parse(response).length;i++){
        $("table.matchs tbody").append("<tr><td>" + JSON.parse(response)[i].equipe1 + " VS " + JSON.parse(response)[i].equipe2
         + "</td><td>"+ JSON.parse(response)[i].dateMatch
         + "</td><td><a class='waves-effect waves-light btn'>Parier</a></td></tr>")
      }
    }
  });
}
