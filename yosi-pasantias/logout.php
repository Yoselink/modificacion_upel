    <? session_start();
    if(!isset($_SESSION[algo])){
    header("location:/yosi-pasantias/index.php");
    } else {
    session_unset();
    session_destroy();
    header("location:/yosi-pasantias/index.php");
    }
    ?>