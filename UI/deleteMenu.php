<?PHP
    include '../menuAction.php';

    $menu_id = $_GET['menu_id'];

    $menu->deleteMenu($menu_id);

?>