    <?php include 'adminHader.php';
    
    function getTotalProducts() {
      global $db;
  
         
  $query = $db->query('SELECT SUM(*) AS total FROM ecom_product');
                 
  $result = $query->fetch();
                  
  return $result['total'];
      
  }
  
  $total_products = getTotalProducts();
    
    ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Utilisateurs</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">4% </i>la semaine dernière</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Temps Moyen</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i>la semaine dernière</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Masculins</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> la semaine dernière</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Feminis</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> la semaine dernière</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> la semaine dernière</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> la semaine dernière</span>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Activités réseau <small>Graphique titre sous-titre</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>Decembre 30, 2020 - Janvier 28, 2023</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div id="chart_plot_01" class="demo-placeholder"></div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Meilleurs Performance <br> de la Compagnie</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Campagnie Facebook </p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                      </diCampaignv>
                    </div>
                    <div>
                      <p>Campagnie Twitter</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p> Médias Conventionnels</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Panneau d'Affichage</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

          <div class="row">


            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Version d'Application</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Paramètres 1</a>
                        </li>
                        <li><a href="#">Paramètres 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <h4>Utilisation de l'Application à Travers les Versions</h4>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.2</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>123k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.3</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>53k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.4</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>23k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.5</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>3k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.6</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>1k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                  <h2>Utilisation de l'Appareil</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Paramètres 1</a>
                        </li>
                        <li><a href="#">Paramètres 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        <p>Top 5</p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p class="">Appareil</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <p class="">Progression</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>IOS </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Android </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Blackberry </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>Symbian </p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Autres </p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>


            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Reglages Rapide</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Paramètres 1</a>
                        </li>
                        <li><a href="#">Paramètres 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">
                    <ul class="quick-list">
                      <li><i class="fa fa-calendar-o"></i><a href="#">Paramètres</a>
                      </li>
                      <li><i class="fa fa-bars"></i><a href="#">Souscription</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#">Auto renouvellement</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#">Réalisations</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#">Auto renouvellement</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#">Réalisations</a>
                      </li>
                      <li><i class="fa fa-area-chart"></i><a href="#">Déconnection</a>
                      </li>
                    </ul>

                    <div class="sidebar-widget">
                        <h4> Complétion Profil</h4>
                        <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
                        <div class="goal-wrapper">
                          <span id="gauge-text" class="gauge-value pull-left">0</span>
                          <span class="gauge-value pull-left">%</span>
                          <span id="goal-text" class="goal-value pull-right">100%</span>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                      <div class="x_title">
                          <h2>Utilisateurs Actifs Quotidiens <small>Sessions</small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                  <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Paramètres 1</a>
                                      </li>
                                      <li><a href="#">Paramètres 2</a>
                                      </li>
                                  </ul>
                              </li>
                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                              </li>
                          </ul>
                          <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                          <div class="row">
                              <div class="col-sm-12">
                                  <div class="temperature"><b>Lundi</b>, 07:30 
                                      <span>F</span>
                                      <span><b>C</b></span>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-4">
                                  <div class="weather-icon">
                                      <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                                  </div>
                              </div>
                              <div class="col-sm-8">
                                  <div class="weather-text">
                                      <h2>Bamako <br><i>Journée Partiellement Nuagueuse</i></h2>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="weather-text pull-right">
                                  <h3 class="degrees">23</h3>
                              </div>
                          </div>

                          <div class="clearfix"></div>

                          <div class="row weather-days">
                              <div class="col-sm-2">
                                  <div class="daily-weather">
                                      <h2 class="day">Lun</h2>
                                      <h3 class="degrees">25</h3>
                                      <canvas id="clear-day" width="32" height="32"></canvas>
                                      <h5>15 <i>km/h</i></h5>
                                  </div>
                              </div>
                              <div class="col-sm-2">
                                  <div class="daily-weather">
                                      <h2 class="day">Mar</h2>
                                      <h3 class="degrees">25</h3>
                                      <canvas height="32" width="32" id="rain"></canvas>
                                      <h5>12 <i>km/h</i></h5>
                                  </div>
                              </div>
                              <div class="col-sm-2">
                                  <div class="daily-weather">
                                      <h2 class="day">Mer</h2>
                                      <h3 class="degrees">27</h3>
                                      <canvas height="32" width="32" id="snow"></canvas>
                                      <h5>14 <i>km/h</i></h5>
                                  </div>
                              </div>
                              <div class="col-sm-2">
                                  <div class="daily-weather">
                                      <h2 class="day">Jeu</h2>
                                      <h3 class="degrees">28</h3>
                                      <canvas height="32" width="32" id="sleet"></canvas>
                                      <h5>15 <i>km/h</i></h5>
                                  </div>
                              </div>
                              <div class="col-sm-2">
                                  <div class="daily-weather">
                                      <h2 class="day">Ven</h2>
                                      <h3 class="degrees">28</h3>
                                      <canvas height="32" width="32" id="wind"></canvas>
                                      <h5>11 <i>km/h</i></h5>
                                  </div>
                              </div>
                              <div class="col-sm-2">
                                  <div class="daily-weather">
                                      <h2 class="day">Sam</h2>
                                      <h3 class="degrees">26</h3>
                                      <canvas height="32" width="32" id="cloudy"></canvas>
                                      <h5>10 <i>km/h</i></h5>
                                  </div>
                              </div>
                              <div class="clearfix"></div>
                          </div>
                      </div>
                  </div>
              </div>

            <div class="col-md-12 col-sm-12 col-xs-12">



              <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Localisation des Visiteurs <small>géo-presentation</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Paramètres 1</a>
                            </li>
                            <li><a href="#">Paramètres 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="dashboard-widget-content">
                        <div class="col-md-4 hidden-small">
                          <h2 class="line_30">125.7k Vues de 60 Pays</h2>

                          <table class="countries_list">
                            <tbody>
                              <tr>
                                <td>Mali</td>
                                <td class="fs15 fw700 text-right">33%</td>
                              </tr>
                              <tr>
                                <td>France</td>
                                <td class="fs15 fw700 text-right">27%</td>
                              </tr>
                              <tr>
                                <td>USA</td>
                                <td class="fs15 fw700 text-right">16%</td>
                              </tr>
                              <tr>
                                <td>Chine</td>
                                <td class="fs15 fw700 text-right">11%</td>
                              </tr>
                              <tr>
                                <td>Sénégal</td>
                                <td class="fs15 fw700 text-right">10%</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height:230px;"></div>
                      </div>
                    </div>
                  </div>
                </div>


                <!-- Start to do list -->

                <!-- End to do list -->
                
                <!-- start of weather widget -->

                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
    <?php include 'adminFooter.php'; ?>