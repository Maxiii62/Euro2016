 <?php include 'fragment/header.php'; ?>

     <body>

         <?php include 'fragment/menu.php'; ?>

         <div class="row" style="margin-top:10">
             <div class="col s12">
                 <ul class="tabs tour"></ul>
             </div>

             <table class="matchs">
                 <thead>
                   <tr>
                       <th data-field="id">Match</th>
                       <th data-field="name">Date</th>
                       <th data-field="price">Actions</th>
                   </tr>
                 </thead>
                 <tbody>
                 </tbody>
               </table>
         </div>
     </body>

     <?php include 'fragment/footer.php'; ?>


<script>
  chargerTours();
</script>
