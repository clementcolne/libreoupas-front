<?php

  /**
    Ce fichier permet d'ajouter des éléments à la
    barre de navigation
  **/

  include "assets/php/edt.php";
  include "assets/php/statistiques.php";

  function addContent($edt, $free, $type) {
      if (isset($_GET["tab"])) {
          switch ($_GET["tab"]) {
              case "Statistiques": {
                  addStatistiques();
                  break;
              }
              default: {
                  addEdt($edt, $free, $type);
              }
          }
      } else {
          addEdt($edt, $free, $type);
      }
  }
