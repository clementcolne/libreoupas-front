<?php

  /**
    Ce fichier récupère le nombre de visites totales
    et retourne le code php généré
  **/

  function addStatistiques() {
    $data = fopen('./visitor/total_visitor.txt', 'r+');
    $totalVisitor = fgets($data);
    fclose($data);

    $data = @fopen("./visitor/day/" . date("d_m") . ".txt", "r+");
    $toDayVisitor = "0";
    if ($data) {
        $toDayVisitor = fgets($data);
        fclose($data);
    }
    $code =
        '<div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-stats"></span>&#9;Statistiques :</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nombre de visites totales : ' . $totalVisitor . '</li>
                        <li class="list-group-item">Nombre de visites journalières : ' . $toDayVisitor . '</li>
                        <li class="list-group-item">Le compteur de visites a été initialisé le 01/09/2018</li>
                    </ul>
                </div>
            </div>
        </div>';
    echo $code;
  }
