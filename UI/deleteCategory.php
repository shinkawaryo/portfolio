<?PHP
    include '../menuAction.php';
    include '../categoryAction.php';

    $category_id = $_GET['category_id'];

    $category->deleteCategory($category_id);

?>