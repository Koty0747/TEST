<?php
include "header.php";
include "requete/req_affiche_participant.php";
?>
        <!-- Content  -->
        <section class="container py-4 py-lg-5 my-4 ">
          <!-- Payment methods list-->
          <div class="table-responsive font-size-md">
               <h2 class="text-center h4 mb-1 py-4">LISTE DES PARTICIPANTS</h2>
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th>N°</th>
                  <th>Rèf</th>
                  <th>Nom</th>
                  <th>Prénoms</th>
                  <th>Télephone</th>
                  <th>Mail</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                 while($resultat=$req_liste->fetch() )
                  { 
                ?>
                <tr>
                  <td class="py-1 align-middle">
                   <?= $resultat['id_participant'];  ?>
                  </td>
                  <td class="py-3 align-middle">
                   <?= $resultat['ref_participant'];  ?>
                  </td>
                  <td class="py-3 align-middle">
                   <?= $resultat['nom'];  ?>
                  </td>
                  <td class="py-3 align-middle">
                   <?= $resultat['prenoms'];  ?> 
                  </td>
                  <td class="py-3 align-middle">
                   <?= $resultat['telephone'];  ?> 
                  </td>
                  <td class="py-3 align-middle">
                   <?= $resultat['mail'];  ?> 
                  </td>
                  <td class="py-3 align-middle">
                      <a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="Edit"><i class="czi-edit"></i>
                      </a>
                  </td>
                  <td class="py-3 align-middle">
                      <a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="Remove">
                      <div class="czi-trash"></div></a>
                  </td>
                </tr>
                <?php
                  }
                ?>
             </tbody>
            </table>
          </div>
        </section>
<?php
include "fooster.php";
?>