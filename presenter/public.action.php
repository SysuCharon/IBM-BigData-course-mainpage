<?php
    include_once("../model/public.php");
    include_once("../model/actionModel.php");
    function isAdmin() {
        return true;
    }

    function isTeacher($id = 0) {
        return $_SESSION["level"] == 1;
    }

    function getOverview() {
        return ActionModel::getOverview();
    }

    function getInforms() {
        $informs = ActionModel::getInforms();
        return $informs;
    }

    function getInformById($id) {
        $inform = ActionModel::getInformById($id);
        return $inform;
    }

    function redirectErrorPage($errorMsg, $redirectTime, $redirectUrl = "./") {
        setcookie("errorMsg", $errorMsg, time() + 60, "/");
        setcookie("redirectTime", $redirectTime, time() + 60, "/");
        setcookie("redirectUrl", $redirectUrl, time() + 60, "/");
        var_dump($_COOKIE);
        header("Location: ../view/error.php");
    }
?>