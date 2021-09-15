<?php

  /**
    Ce fichier gère la bare de navigation
  **/

  /**
   * Add the navigation bar
   */
  function addNavigationBar() {
      $code =
      '<nav class="navbar navbar-default">
          <div class="container-fluid">
              <div class="navbar-header">
                  <a id="navDate" class="navbar-brand" hred="index.php">' . date('H:i') . '</a>
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" data-label-expanded="Close" aria-expanded="false">
                      <span class="sr-only">(toggle)</span>
                      <span class="navbar-toggle-icon glyphicon glyphicon-menu-hamburger"></span>
                  </button>
              </div>
              <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                      ';
      $code = $code . addNavigationHome();
      $code = $code . '
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options <b class="caret"></b></a>
                          <ul class="dropdown-menu" id="optionsList">
                              <li class="form-group">
                                  <input type="checkbox" id="onlyLinux"   onclick="addOnlyLinux()"   autocomplete="off"/>
                                  <label for="onlyLinux">Uniquement Linux</label>
                              </li>
                              <li class="form-group">
                                  <input type="checkbox" id="onlyWindows" onclick="addOnlyWindows()" autocomplete="off"/>
                                  <label for="onlyLinux">Uniquement Windows</label>
                              </li>
                              <li class="form-group">
                                  <input type="checkbox" id="onlyFree"    onclick="addOnlyFree()"    autocomplete="off"/>
                                  <label for="onlyLinux">Uniquement Libres</label>
                              </li>
                              <li class="form-group">
                                  <input type="checkbox" id="grid"        onclick="addGrid()"        autocomplete="off"/>
                                  <label for="grid">Afficher la grille</label>
                              </li>
                          </ul>
                      </li>
                  </ul>
                  <div class="navbar-collapse collapse">
                      <ul class="nav navbar-nav navbar-right">';
      $code = $code . addNavigationItem("Statistiques");
      $code = $code . '
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thèmes <b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                  <li><a href="#" data-theme="light" class="theme-link">Light</a></li>
                                  <li><a href="#" data-theme="dark"  class="theme-link">Dark</a></li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </nav>';
      echo $code;
  }

  /**
   * Add the navigation home item
   */
  function addNavigationHome() {
      $code = '<li';
      if (!isset($_GET["tab"]) || $_GET["tab"] == "") {
          $code = $code . ' class="active"';
      }
      $code = $code . '><a class="nav-link" href="index.php">Accueil</a></li>';
      return $code;
  }

  /**
   * Add an item in the navigation bar
   * @param String $item the item's name
   */
  function addNavigationItem($item) {
      $code = '<li';
      if (isset($_GET["tab"]) && $_GET["tab"] == $item) {
          $code = $code . ' class="active"';
      }
      $code = $code . '><a class="nav-link" href="index.php?tab=' . $item . '">' . $item . '</a></li>';
      return $code;
  }
