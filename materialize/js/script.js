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
                     Materialize.toast('Mauvaises informations de connexions', 4000);
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

$(".filterMatch").on("change",function(){
  $("table.paris tbody").empty();

  $.ajax({
    method : "POST",
      url : "/Euro2016/controller/controller.php",
      data : {ws : 'paris',action : $("select.filterMatch").val(),idUser : $("#idUser").val()},
      success : function(response){
        for(var i = 0; i < JSON.parse(response).length;i++){
          $("table.paris tbody").append("<tr><td><a href='pariDetails.php'>" + JSON.parse(response)[i].Equipe1 + " VS " + JSON.parse(response)[i].Equipe2
           + "</a></td><td>"+ JSON.parse(response)[i].Score1 + " - " + JSON.parse(response)[i].Score2
           + "</td><td><a class='waves-effect waves-light btn'>" + JSON.parse(response)[i].Points + "</a></td></tr>")
        }
      }

  })
})

$(".creerUser").on("click",function(){
    $.ajax({
      method : "POST",
        url : "/Euro2016/controller/controller.php",
        data : {ws : 'users', action : 'subscribe',Nom : $("#last_name").val() ,Prenom : $("#first_name").val(), MotDePasse : $("#password").val(),Mail : $("#email").val() , DateNaissance : $("#date").val() , Pseudo : $("#pseudo").val(), estAdmin : $("#admin").is(":checked")},
        success : function(response){
          Materialize.toast('Utilisateur a bien été ajouté !', 4000);
        },error : function(err){
          Materialize.toast(err, 4000);
        }
    })
})

function chargerUser(){
  var check = ";"
  $("table.users tbody").empty();
  $.ajax({
    method : "POST",
      url : "/Euro2016/controller/controller.php",
      data : {ws : 'users', action : 'list'},
      success : function(response){
        for(var i = 0; i < JSON.parse(response).length;i++){
          if (JSON.parse(response)[i].estAdmin == 1){
            $("table.users tbody").append("<tr id='"+ JSON.parse(response)[i].id +"'><td>" + JSON.parse(response)[i].nom + " " + JSON.parse(response)[i].prenom + "</td><td>" + JSON.parse(response)[i].mail + "</td><td> "+ JSON.parse(response)[i].pseudo + "</td><td><i class='material-icons'>done</i></td>"
            + "<td><button class='waves-effect waves-teal btn-flat' onClick='updateUser()'><i class='large material-icons'>mode_edit</i></button><button class='waves-effect waves-teal btn-flat' onClick='removeUser(" + JSON.parse(response)[i].id  +")'><i class='material-icons'>delete_forever</i></button></td></tr>");

          }else{
            $("table.users tbody").append("<tr id='"+ JSON.parse(response)[i].id +"'><td>" + JSON.parse(response)[i].nom + " " + JSON.parse(response)[i].prenom + "</td><td>" + JSON.parse(response)[i].mail + "</td><td> "+ JSON.parse(response)[i].pseudo + "</td><td>" +
            "<td><button class='waves-effect waves-teal btn-flat'><i class='large material-icons EditUser mode_edit</i></button><button class='waves-effect waves-teal btn-flat' onClick='removeUser("+ JSON.parse(response)[i].id +")'><i class='material-icons removeUser'>delete_forever</i></button></td></tr>");
          }
        }
      }
  })
}

function removeUser(id){
  $.ajax({
    method : "POST",
      url : "/Euro2016/controller/controller.php",
      data : {ws : 'users', action : 'removeUser',idUser : id},
      success : function(response){
          Materialize.toast('Utilisateur a bien été supprimé !', 4000);
          chargerUser();
      }
  })
}
