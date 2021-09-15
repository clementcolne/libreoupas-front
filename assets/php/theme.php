<?php

  /**
   * Fonction qui permet de définir le thème visuel choisi par l'utilisateur
   */
  function addCorrectTheme() {
      $code = "";
      if (!isset($_COOKIE["theme"]) || $_COOKIE["theme"] == "dark") {
          $code = '<link href="assets/css/dark/bootstrap.css" rel="stylesheet">';
          $code = $code . '<link href="assets/css/dark/logo.css" rel="stylesheet">';
      } else {
          $code = '<link href="assets/css/light/bootstrap.css" rel="stylesheet">';
          $code = $code . '<link href="assets/css/light/logo.css" rel="stylesheet">';
      }
      echo $code;
  }
