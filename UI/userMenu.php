<?php
    include '../menuAction.php';
    include '../categoryAction.php';
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
<body>
    <!-- Page Content -->
    <nav class="navbar nabver-expand-lg navbar-dark bg-dark text-white m-0 p-0 col-md-12">            
        <h2 class="col-md-6">Welcome</h2>                   
        <ul class="nav justify-content-end col-md-6">
        <li class="nav-item col-md-3 text-center">
            <a class="nav-link active form-control bg-danger text-white" href="#">Oder Contents</a>
        </li>
        <li class="nav-item col-md-3 text-center">
            <a class="nav-link form-control bg-danger text-white" href="#">Bill</a>
        </li>
        </ul>                    
    </nav>

    <div class="container">
    <div class="form-row col-md-12 m-0 p-0">
    <!-- Page Heading -->
    <div class="form-group col-md-4 m-0 p-0 ">
    <h1 class="my-2">Food Menu
    </h1>
    </div>
    <div class="form-group col-md-8 m-0 p-0 d-flex align-items-cente">
    <!-- Pagination -->
    <ul class="pagination d-flex align-items-center p-0 m-0 ml-5">
    <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
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
                        <a href='specificMenu.php?category_id=".$category_id."'>".$category_name."</a>
                ";
            }
        ?>
    </li>
    <li class="page-category">
        <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
            </a>
    </li>
    </ul>
    </div>
    </div>
    <form action="../menuAction.php" method="post">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                <?php
                    $allMenu = $category->displayAllMenu();

                    // print_r($specific_category);

                    foreach($allMenu as $all_menu){
                    echo "<div class='card'>
                                <div class='card-header m-0 p-0'>
                                    <h5 class='card-title m-1'>".$all_menu['menu_name']."</h5>
                                    <a href='#'><img class='card-img-top ' src='../upload/".$all_menu['menu_picture']."' alt=''></a>       
                                </div>
                        <div class='card-body m-0 p-1'> 
                            <div class='form-row'> 
                                <div class='form-group col-md-12 p-2 m-0'>                                  
                                    <p class='form-control col-md-12 mx-auto m-0'>Price: ".$all_menu['menu_price']."</p>
                                </div>
                            </div>
                            <div class='form-row'>
                                <div class='form-group form-inline m-0'>
                                <label for='hou_many' class='ml-3'>How Many</label>
                                <input type='number' name='' id='' class='form-control col-md-3 p-0 m-0 mx-auto text-center'>
                                </div>
                            </div>
                        </div>";
                    
                    }
                ?>
                    </div>  
                </div>
            </div>
            
        

    <footer class="form-row col-md-12 " style="position: absolute;bottom: 0;">
        <input type="submit" value="Order" name="order" class="form-control bg-danger text-white col-md-6">
    </footer>
    </form>   

       
</body>
</html>