<?php
include("template/header.php");
?>

<div class="max-size-screen mx-auto row pt-5">
  <div class="col-12">
    <div class="col-10 mb-5 mx-auto alert alert-info">
      <p>Voici un article conseiller ! Venez donc le lire: <a href="" class="text-info">Tournoi Sub x Solary, inscription et déroulement</a></p>
      <a href="">-> Accèder à l'article</a>
    </div>
  </div>

  <div class="col-2">
    <ul class="list-group pt-0 mt-0">
      <li class="pb-3 pl-3 pr-3 pt-0 mt-0"><a class="text-color-dark font-weight-bold li-link" href=""><i class="fas fa-search d-none d-lg-inline text-dark-blue"></i> Rechercher</a></li>
      <li class="p-3"><a class="text-color-dark font-weight-bold li-link" href=""><i class="fas fa-book d-none d-lg-inline text-dark-blue"></i> Actualité</a></li>
      <li class="p-3"><a class="text-color-dark font-weight-bold li-link" href=""><i class="fas fa-archway d-none d-lg-inline text-dark-blue"></i> Tournois</a></li>
      <li class="p-3"><a class="text-color-dark font-weight-bold li-link" href=""><i class="fas fa-trophy d-none d-lg-inline text-dark-blue"></i> Classement</a></li>
      <li class="p-3"><a class="text-color-dark font-weight-bold li-link" href=""><i class="fas fa-hands-helping d-none d-lg-inline text-dark-blue"></i> Guides</a></li>
    </ul>
    <p class="pt-5 pb-0 pl-3 pr-3 text-color-grey font-weight-bold">AUTRE</p>
    <ul class="list-group">
      <li class="p-3 pt-0"><a class="text-color-dark font-weight-bold li-link" href=""><i class="fas fa-cog d-none d-lg-inline text-dark-blue"></i> Paramètres</a></li>
      <li class="p-3"><a class="text-color-dark font-weight-bold li-link" href=""><i class="fas fa-moon d-none d-lg-inline text-dark-blue"></i> Mode Nuit</a></li>
      <li class="p-3"><a class="text-color-dark font-weight-bold li-link" href=""><i class="fab fa-discord d-none d-lg-inline text-dark-blue"></i> Discord</a></li>
      <li class="p-3"><a class="text-color-dark font-weight-bold li-link" href=""><i class="fab fa-twitter d-none d-lg-inline text-dark-blue"></i> Twitter</a></li>
    </ul>
  </div>

  <div class="col-7">
    <span class="text-color-dark font-weight-bold"><i class="fas fa-hand-point-right text-dark-blue"></i> RECHERCHER UN COÉQUIPIER</span>

    <div class="col-12 mx-auto radius-card bg-light mt-3 p-2 row pt-3 pb-3">
      <div class="col-2 d-flex">
        <img src="https://picsum.photos/id/237/75/75" alt="" class="rounded-image my-auto mx-auto">
      </div>
      <div class="col-10">
        <textarea name="" id="" rows="3" class="col-12 text-area-search" placeholder="Décris toi en 180 caractères, ton style de jeu, ton état d'esprit..."></textarea>
      </div>
      <div class="col-12 mt-2 d-flex flex-row-reverse">
        <input type="submit" value="CRÉER" class="button-submit-search ml-2">
        <select name="pets" id="pet-select" class="ml-2 select-search">
          <option value="">AJOUTER UN TYPE</option>
          <option value="dog">Aram</option>
          <option value="cat">Ranked</option>
          <option value="hamster">Flex</option>
          <option value="parrot">Clash</option>
          <option value="spider">Normal</option>
        </select>
        <select name="pets" id="pet-select" class="select-search">
          <option value="">AJOUTER UN ROLE</option>
          <option value="dog">Top</option>
          <option value="cat">Jungle</option>
          <option value="hamster">Mid</option>
          <option value="parrot">ADC</option>
          <option value="spider">Support</option>
        </select>
      </div>
    </div>

    <span class="text-color-dark font-weight-bold"><i class="fas fa-hand-point-right text-dark-blue mt-5"></i> LES DERNIÈRES RECHERCHES</span>

    <div class="col-12 mx-auto radius-card bg-light mt-3 p-2 row pt-3 pb-3">

    </div>
  </div>

  <div class="col-3">
    <span class="text-color-grey font-weight-bold">LES PROCHAINS TOURNOIS</span>

    <ul class="list-group pt-0 mt-4">
      <li class="pb-3 pl-0 pr-3 pt-0 mt-0"><a class="text-color-dark font-weight-bold li-link" href=""><i class="fas fa-trophy d-none d-lg-inline text-dark-blue"></i> Tournois Narkus Système</a></li>
      <li class="pb-3 pl-0 pr-3 pt-3 mt-0"><a class="text-color-dark font-weight-bold li-link" href=""><i class="fas fa-trophy d-none d-lg-inline text-dark-blue"></i> Tournois Acer Predator</a></li>
    </ul>

    <span class="text-color-grey font-weight-bold">LES DERNIERS ARTICLES</span>

    <ul class="list-group pt-0 mt-4">
      <li class="pb-3 pl-0 pr-3 pt-0 mt-0"><a class="text-color-dark font-weight-bold li-link" href=""><i class="fas fa-book d-none d-lg-inline text-dark-blue"></i> Tournoi Sub x Solary, inscription et déroulement</a></li>
      <li class="pb-3 pl-0 pr-3 pt-3 mt-0"><a class="text-color-dark font-weight-bold li-link" href=""><i class="fas fa-book d-none d-lg-inline text-dark-blue"></i> Comment utiliser Brave ?</a></li>
    </ul>
  </div>

</div>

<?php
include("template/footer.php");
