<?PHP
    include '../userAction.php';

    $account_id = $_GET['account_id'];

    $user->deleteUser($account_id);

?>