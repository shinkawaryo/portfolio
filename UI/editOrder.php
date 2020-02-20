<?php include 'menuHeader.php'?>
<?php
    $order_id = $_GET['order_id'];
    $row = $order->getSpecificOrder($order_id);
?>
<div class="container">
    
        <div class="form-row">
            <div class="form-group">
             <br><br><br><br><h1>CHANGE QUANTITY</h1>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label class="form-control border-0" for="">Menu Name: </label>
            </div>
            <div class="form-group">
                <h2 class="form-control border-0"><?php echo $row['menu_name']?></h2>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label class="form-control border-0" for="">Menu Price: </label>
            </div>
            <div class="form-group">
                <h2 class="form-control border-0"><?php echo $row['menu_price']?></h2>
            </div>
        </div>
        <form action="../orderAction.php" method="post">
        <div class="form-row">
            <div class="form-group">
                <label class="form-control border-0" for="">Quantity: </label>
            </div>
            <div class="form-group">
                <input type="number" name="new_quantity" value="<?php  echo $row['order_quantity'] ?>" class="form-control col-md-3" id="">
            </div>
        </div>
        
        <div class="form-row">
                    <div class="form-group">
                        <input type="hidden" name="order_id" value="<?php  echo $row['order_id'] ?>"> 
                        <input type="submit" name="change_quantity" value="Change" class="btn btn-primary btn btn-lg text-uppercase form-control" id="">
                    </div>
                </div>
    </form>
</div>

</body>

</html>