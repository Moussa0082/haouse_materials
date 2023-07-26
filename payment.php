<?php
/**
 * Created by PhpStorm.
 * User: Moussa Bane
 * Date: 9/10/2022
 * Time: 5:50 PM
 */
?>

<?php
    include 'header.php';
    global $total;
?>

    <!--banner-->
    <div class="banner banner10">
        <div class="container">
            <h2>Paiement</h2>
        </div>
    </div>
    <!--//banner-->
    <!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Accueil</a> <i>/</i></li>
                <li>Paiement</li>
            </ul>
        </div>
    </div>
    <?php if (isset($_GET['orderNow']) && $_GET['orderNow'] == 'order' ):  ?>
        <?php $productObject->orderProductByCustomerId(Session::get("userId")); $cartObject->deleteCart(); ?>
    <?php endif; ?>
    <!-- //breadcrumbs -->
    <div class="single">
        <div class="container">
            <div class="row">
                <?php $allCartProduct = $cartObject->allProductBySessionId(); if ($allCartProduct): $emptyCart = true; $i = 0; ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cart-table">
                            <table class="table">
                                <thead class="table table-bordered">
                                <tr>
                                    <th class="text-center" style="width: 16.66%;">#</th>
                                    <th class="text-center" style="width: 16.66%;">Nom</th>
                                    <th class="text-center" style="width: 16.66%;">Prix</th>
                                    <th class="text-center" style="width: 16.66%;">Quantité</th>
                                    <th class="text-center" style="width: 16.66%;">Total Prix</th>
                                    <th class="text-center" style="width: 16.66%;">Image</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php while ( $allCart = $allCartProduct->fetch_assoc() ): $i++; ?>
                                    <tr>
                                        <th scope="row" class="text-center"><?php echo $i; ?></th>
                                        <td class="text-center"><?php echo $allCart['proname']; ?></td>
                                        <td class="text-center"><?php echo $allCart['price']; ?> <em>F</em></td>
                                        <td class="text-center"><?php echo $allCart['quantity']; ?></td>
                                        <td class="text-center"><?php echo $allCart['quantity']*$allCart['price']; $total += $allCart['quantity']*$allCart['price']; ?> <em>F</em></td>
                                        <td class="text-center">
                                            <img src="admin/<?php echo $allCart['image']; ?>" title="<?php echo $allCart['proname']; ?>" alt="" class="img-rounded img-responsive" style="height: 65%;width: 70%;" />
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php else: ?>
                    <?php
                    echo "<div class='alert alert-danger alert-dismissable'>
                              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                              <strong> Avis !</strong>La Carte est Vide...!
                          </div>";
                    ?>
                <?php endif; ?>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 pull-right hover">
                        <div class="cart-info" style="background-color: #d9edf7; padding: 15%;box-shadow: 5px 4px 18px #888888;border-radius: 3%; font-weight: 700">
                            <p> Total Prix :  <?php echo $total; Session::set("total", $total); ?> <em>FCFA</em>  </p>
                            <!-- <p> Vat :  5% </p>  //With Vat  //+(($total*5)/100)-->
                            <p>Total  :  <?php echo ($total); ?> <em>FCFA</em></p>
                        </div>
                        <div class="checkout-button" style="box-shadow: 5px 4px 18px #888888;">
                            <a class="btn btn-block btn-warning text-capitalize" href="?orderNow=order">Commander</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
<?php
    include 'footer.php';
?>
