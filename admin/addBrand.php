<?php
/**
 * Created by PhpStorm.
 * User: Moussa Bane
 * Date: 9/10/2022
 * Time: 3:02 AM
 */
?>

<?php
    include 'adminHader.php';
    include '../classes/Brand.php';
?>
<?php
    $brandObject = new Brand();
?>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Eléments de Formulaire</h3>
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
            <?php
                if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['addBrand']))
                {
                    $brandObject->addBrand($_POST['brand']);
                }

                if (isset($_GET['delBrand']))
                {
                    $brandObject->deleteBrandById($_GET['delBrand']);
                }
            ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Marque <small> Ajouter Marque </small></h2>
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
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="" method="POST">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nom Marque<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" required="required" name="brand" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-app" name="addBrand"><i class="fa fa-save"></i>Enregistres</button>
                                        <button class="btn btn-app" type="reset"><i class="fa fa-repeat"></i>Réinitialiser</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Liste Categories</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                                <li>
                                    <a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <p class="text-muted font-13 m-b-30">
                                Table Categories 
                            </p>
                            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc text-center" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 194px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">N° Série</th>
                                                <th class="sorting text-center" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 298px;" aria-label="Position: activate to sort column ascending">Nom Marque</th>
                                                <th class="sorting text-center" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 151px;" aria-label="Office: activate to sort column ascending">Editer</th>
                                                <th class="sorting text-center" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 53px;" aria-label="Age: activate to sort column ascending">Supprimer</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $allBrand = $brandObject->allBrand();
                                                if (isset($allBrand)) :
                                                    $i = 0;
                                                    while ($res = $allBrand->fetch_assoc()): $i++;
                                            ?>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center"><?php echo $i;?></td>
                                                        <td class="text-center"><?php echo $res['brand']; ?></td>
                                                        <td class="text-center">
                                                            <a class="btn btn-round btn-success" href="brandEdit.php?id=<?php echo $res['id']; ?>">
                                                                <i class="fa fa-pencil"></i> Editer
                                                            </a>
                                                        </td>
                                                        <td class="text-center">
                                                            <!-- <button type="button" class="btn btn-round btn-danger"><i class="fa fa-times"></i> Delete </button>-->
                                                            <a class="btn btn-round btn-danger" onclick="return confirm('Are You Sure You Want to Delete ?');" href="?delBrand=<?php echo $res['id']; ?>">
                                                                <i class="fa fa-times"></i>Supprimer
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endwhile; ?>
                                                <?php else: ?>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1 text-center">Vide</td>
                                                    <td class="text-center">Vide</td>
                                                    <td class="text-center">
                                                        Pas Marque à Editer
                                                    </td>
                                                    <td class="text-center">
                                                    Pas Marque à Supprimer
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include 'adminFooter.php';
?>