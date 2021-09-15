<?php

  /**
    Ce fichier permet de comptabiliser une visite supplémentaire
    parmi les visites déjà enregistrées
  **/
  $counterFile;
  $counter = 0;
  if(!file_exists('visitor/total_visitor.txt')) {
      $counterFile = fopen('visitor/total_visitor.txt', 'a+');
  } else {
      $counterFile = fopen('visitor/total_visitor.txt', 'r+');
      $counter = fgets($counterFile);
  }

  $counter++;
  fseek($counterFile, 0);
  fputs($counterFile, $counter);
  fclose($counterFile);

  // Day counter

  $name = date("d_m") . ".txt";
  $counter = 0;
  if(!file_exists('visitor/day/' . $name)) {
      $counterFile = fopen('visitor/day/' . $name, 'a+');
  } else {
      $counterFile = fopen('visitor/day/' . $name, 'r+');
      $counter = fgets($counterFile);
  }

  $counter++;
  fseek($counterFile, 0);
  fputs($counterFile, $counter);
  fclose($counterFile);
