<?php
include "header.php";
include "requete/req_inser_new_participant.php";
?>
<div class="container">
      <div class="row">
        <div class="col-md-3">
            
        </div>
        <div class="col-md-6 alert alert-<?= $couleur; ?> text-center" role="alert">
           <?=  $donnee; ?>
        </div>
        <div class="col-md-3">
            
        </div>
      </div>
</div>

    <!-- Page title-->
    <!-- Page Content-->
    <div class="containerr py-4 py-lg-5 my-4">
      <div class="row">
        <div class="col-md-3">
            
        </div>
        <div class="col-md-6">
          <div class="card border-0 box-shadow">
            <div class="card-body">
              <h2 class="text-center h4 mb-1">PARTICIPANTS</h2>
              <hr>
              <h3 class="font-size-base pt-4 pb-2">Veuillez renseigner les donnèes du participant</h3>
              <form class="needs-validation" method="POST" novalidate>
               <div class="input-group-overlay form-group">
                  <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-user"></i></span></div>
                  <input class="form-control prepended-form-control" type="text" placeholder="Nom" name="nom" required>
                </div>

                <div class="input-group-overlay form-group">
                  <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-user"></i></span></div>
                  <input class="form-control prepended-form-control" type="text" placeholder="Vos Prenoms" name="prenoms" required>
                </div>

                <div class="input-group-overlay form-group">
                  <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-phone"></i></span></div>
                  <input class="form-control prepended-form-control" type="number" placeholder="Tèlephone" name="telephone" required>
                </div>
   
                <div class="input-group-overlay form-group">
                  <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-mail"></i></span></div>
                  <input class="form-control prepended-form-control" type="email" placeholder="Email" name="mail" required>
                </div>

                <hr class="mt-4">
                <div class="text-center pt-4">
                  <button class="btn btn-primary" type="submit" name="valider_donnee" ><i class="czi-sign-in mr-2 ml-n21"></i>Valider</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-3">
            
        </div>
      </div>
    </div>
<?php
   include "fooster.php";
?>