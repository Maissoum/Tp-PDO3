<div id="modalSuppression" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation de suppression</h5>
      </div>
      <div class="modal-body">  
        <p>Voulez vous supprimer cette nationalité ?</p>
      </div>
      <div class="modal-footer">
        <a id='btnSuppr' href="" class="btn btn-primary">Supprimer</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ne pas supprimer</button>
      </div>
    </div>
  </div>
</div>

<footer class="container">
  <p>&copy; TP3 Maiss 2023-2025</p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script type="text/javascript">

  $("a[data-suppression]").click(function(){
    var lien = $(this).attr("data-suppression"); // On récupère le du bonton "poubelle"
    var message = $(this).attr("data-message"); 
    console.log(lien);
    $("#btnSuppr").attr("href",lien); //On écrit ce lien sur le bouton "supprimer" de la modale
    $(".modal-body").text(message); 
  });


</script>
</body>
</html>
