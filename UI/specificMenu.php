<?php
    // include '../menuAction.php';
    include '../categoryAction.php';

    $specific_category_id = $_GET['category_id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="padding-top: 120px; ">
    <!-- Page Content -->
    <nav class="navbar nabver-expand-lg navbar-dark bg-dark text-white m-0 p-0 col-md-12 fixed-top">            
    <h2 class="display-4 col-md-3 "><a class="text-white" href="userMenu.php">Menu</a></h2>
        <div class="form-group col-md-3 m-0 p-0 d-flex align-items-cente">
    <!-- Pagination -->
    <ul class="pagination d-flex align-items-center p-0 m-0 ml-5">
    <li class="page-item">
        <a class="page-link bg-dark border-0 text-white" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
            </a>
    </li>
    <li class="page-category">
        <?php
            $allCategories = $category->displayCategory();

            foreach($allCategories as $all_category){
                $category_id = $all_category['category_id'];
                $category_name = $all_category['category_name'];
                echo "
                        <a class='text-white' href='specificMenu.php?category_id=".$category_id."'>".$category_name."</a>
                ";
            }
        ?>
    </li>
    <li class="page-category">
        <a class="page-link bg-dark border-0 text-white" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
            </a>
    </li>
    </ul>
    </div>

        <ul class="nav justify-content-end col-md-6">
        <input type="submit" value="Order" name="order" class="form-control bg-danger text-white col-md-3">
        <li class="nav-item col-md-3 text-center">
            <a class="nav-link active form-control bg-danger text-white" href="#">Oder Contents</a>
        </li>
        <li class="nav-item col-md-3 text-center">
            <a class="nav-link form-control bg-danger text-white" href="#">Bill</a>
        </li>
        </ul>                    
    </nav>
    
    <div class="container col-md-10">
    <form action="../menuAction.php" method="post">
    <div class="card-columns col-md-12" style="column-count: 4;">
                <div class="col-md-12">
                <?php
                    $specific_category = $category->specificCategory($specific_category_id);

                    // print_r($specific_category);

                    foreach($specific_category as $spec_cat){
                    echo "<div class='card'>
                                <div class='card-header m-0 p-0'>
                                    <h5 class='card-title m-1'>".$spec_cat['menu_name']."</h5>
                                </div>
                                <a href='#'><img class='card-img-top' width='100%' height='150' src='../upload/".$spec_cat['menu_picture']."' alt=''></a>       
                                <div class='card-body m-0 p-1'> 
                                    <div class='form-row'> 
                                        <div class='form-group col-md-12 p-2 m-0'>                                  
                                            <p class='form-control col-md-12 mx-auto m-0 text-center'>Price: ".$spec_cat['menu_price']."</p>
                                        </div>
                                        <div class='form-group form-inline m-0'>
                                            <label for='hou_many' class='ml-3'>How Many</label>
                                            <input type='number' name='order_amount' id='' class='form-control col-md-3 p-0 m-0 mx-auto text-center'>
                                        </div>
                                    </div>
                                </div>
                        </div>";
                    
                    }
                ?>
                    </div>  
                </div>
            
    </form>   

       
</body>
</html>