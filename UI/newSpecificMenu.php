<?php include 'menuHeader.php';?>
    
    <div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-md-8 mt-5">
                <form action="" method="post">
                    <div class="form-row">
                        <?php
                           $specific_category_id = $_GET['category_id'];

                           $specific_category = $category->specificCategory($specific_category_id);

                           foreach($specific_category as $spec_cat){
                            echo "<div class='form-group col-md-4'>
                                    <div class='card mb-4'>
                                        <div class='card-header m-0 p-0'>
                                            <h4 class='card-title m-1'>".$spec_cat['menu_name']."</h4>
                                            <input type='hidden' class='form-control' name='order_menu' value='".$spec_cat['menu_id']."'>
                                            <img src='../upload/".$spec_cat['menu_picture']."' alt='".$spec_cat['menu_picture']."' class='card-img-top' width='100%' height='150px'>
                                        </div>
                                        <div class='card-body m-0 p-1'>
                                            <div class='form-row'>
                                                <div class='form-group col-md-12 m-0'>
                                                    <h4>Price: ".$spec_cat['menu_price']."</h4>
                                                </div>
                                            </div>
                                            <div class='form-row'>
                                                <div class='form-group col-md-6'>
                                                    <label for='quantity'>Quantity: </label>
                                                </div>
                                                <div class='form-group col-md-6 m-0'>
                                                    <input type='number' name='order_quantity' class='form-control text-center'>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                </div>";
                           }
                        ?>
                    </div>
                </form>
            </div>
            <div class="form-group col-md-2 mt-5 mx-auto">
                <input type="submit" value="Order" class="form-control btn btn-lg btn-danger">
            </div>
        </div>
    </div>

<?php include 'menuFooter.php'?>