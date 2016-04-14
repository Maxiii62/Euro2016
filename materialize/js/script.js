$("#cnxBtn").on('click',function(){
  $("#modalConnexion").openModal();
})

$(".closeModal").on('click',function(){
  $($(".modal").closest()).closeModal();
})
