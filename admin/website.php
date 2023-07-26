<?php
/**
 * Created by PhpStorm.
 * User: Moussa Bane
 * Date: 15/10/2022
 * Time: 10:41 PM
 */
?>

<?php
    include 'adminHader.php';
    include '../classes/AllCategory.php';

    $allCatObject = new AllCategory();
?>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Eléments du Formulaire</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Aller!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <?php if (($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['update']))  ):  ?>
                    <?php $allCatObject->insertWebsiteInfo($_POST['websiteName'], $_POST['websiteTitle'], $_POST['footerEmail'],  $_POST['footerAddress'], $_POST['footerPhone']);  ?>
                <?php  endif; ?>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>  Information Website </h2>
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
                            <br />
                            <form action="#" method="post" class="form-horizontal form-label-left" novalidate="">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website-name">Nom Website</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="website-name" name="websiteName" class="form-control col-md-7 col-xs-12" type="text" title="Website Name" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title"> Titre Website</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input title="Website Title" id="title" name="websiteTitle" class="form-control col-md-7 col-xs-12" type="text" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="footer-address" class="control-label col-md-3 col-sm-3 col-xs-12">  Address Pied de Page </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="footer-address" class="form-control col-md-7 col-xs-12" name="footerAddress" type="text" title="Footer Address" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="footer-email" class="control-label col-md-3 col-sm-3 col-xs-12">  E-mail Pied de Page </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="footer-email" class="form-control col-md-7 col-xs-12" name="footerEmail" type="email" title="Footer Email" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="footer-phone" class="control-label col-md-3 col-sm-3 col-xs-12"> Téléphone Pied de Page  </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="footer-phone" class="form-control col-md-7 col-xs-12" name="footerPhone" type="text" title="Footer Phone" />
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="reset">Réinitialiser</button>
                                        <button type="submit" name="update" class="btn btn-success">Envoyer</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
    <?php if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['social'])) :  ?>
        <?php $allCatObject->insertSocialIcon($_POST['iconName'], $_POST['link'], $_POST['icon']);  ?>
    <?php  endif; ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Ajouter Médias Sociaux </h2>
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
                            <br />
                            <form action="#" method="post" class="form-horizontal form-label-left" novalidate="">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website-name">Nom Icon</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="website-name" placeholder="Facebook or Twitter and others" name="iconName" class="form-control col-md-7 col-xs-12" type="text" title="Website Name" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Lien</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input title="Website Title" id="link" placeholder="https://facebook.com/" name="link" class="form-control col-md-7 col-xs-12" type="text" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="footer-address" class="control-label col-md-3 col-sm-3 col-xs-12"> Icon Nom Font Awesome </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="footer-address" placeholder="fa-facebook" class="form-control col-md-7 col-xs-12" name="icon" type="text" title="Footer Address" />
                                    </div>
                                </div>

                                <div class="ln_solid"></div>

                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="reset">Réinitialiser</button>
                                        <button type="submit" name="social" class="btn btn-success">Envoyer</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Medias Sociaux </h2>
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
                            <br />
                            <?php $social = $allCatObject->allSocialMediaLinks(); if (!$social) :  ?>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
    <!--                                    -->
                                        <div class="x_content">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Lien</th>
                                                    <th>Icon</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Facebook</td>
                                                    <td>#</td>
                                                    <td><i class="fa fa-facebook"></i></td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            <?php else: $i = 0; ?>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                        <!--                                    -->
                                        <div class="x_content">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">Nom</th>
                                                        <th class="text-center">Lien</th>
                                                        <th class="text-center">Icon</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php while ($links = $social->fetch_assoc()): $i++; ?>
                                                        <tr>
                                                            <th scope="row" class="text-center"><?php echo $i; ?></th>
                                                            <td class="text-center"><?php echo $links['name'] ?></td>
                                                            <td class="text-center"><?php echo $links['link'] ?></td>
                                                            <td class="text-center"><a href="#"> <i class="fa fa-2x <?php echo $links['icon'] ?>"> </i> </a> </td>
                                                        </tr>
                                                    <?php endwhile; ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php
    include 'adminFooter.php';
?>
