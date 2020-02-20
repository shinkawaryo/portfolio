<?php
    include '../userAction.php';
    
?>


<?php include 'menuHeader.php'?>

<div class="container col-md-8" style="margin-top:50px;">
    <div class="row">
        <form action="../billAction.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-8 mt-5">
                        <div class="form-row">
                            <?php
                                $allMenu = $category->displayAllMenu();

                                foreach($allMenu as $all_menu){
                                    echo "
                                    <div class='form-group col-md-4'>
                                    <form action='../orderAction.php' method='post'>
                                            <div class='card mb-4'>                                       
                                                <div class='card-header m-0 p-0'>
                                                    <h4 class='card-title m-1'>".$all_menu['menu_name']."</h4>
                                                    <input type='hidden' class='form-control' name='order_menu' value='".$all_menu['menu_id']."'>
                                                    <img src='../upload/".$all_menu['menu_picture']."' alt='".$all_menu['menu_picture']."' class='card-img-top' width='100%' height='150px'>
                                                </div>

                                                <div class='card-body m-0 p-1'>
                                                    <div class='form-row'>
                                                        <div class='form-group col-md-12 m-0'>
                                                            <h4>Price: ".$all_menu['menu_price']."</h4>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class='form-row'>
                                                        <div class='form-group col-md-5 '>
                                                            <label for='quantity'>Quantity: </label>
                                                        </div>
                                                        <div class='form-group col-md-6 m-0'>
                                                            <input type='number' name='order_quantity' class='form-control text-center'>
                                                            <input type='submit' value='Order' name='order' class='form-control bg-danger text-white mt-2' style='font-size: 15px;'>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            </form>
                                        </div>";                                        
                                }
                            ?>
                        </div>
                </div>
                <?php include 'orderContents.php' ?>
                
            </div>
        </form>
    </div>
</div>

<?php include 'menuFooter.php'?>