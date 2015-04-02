<?php
    include_once("./head.php");
    if(!isTeacher()) {
        redirectErrorPage("您的权限不够", 5);
    }
    if(isset($_GET['id'])) {
        $inform = getInformById($_GET['id']);
    }
?>
    <form action="../presenter/admin.action.php" method="post">
        <input type="hidden" name="func" value="updateInform" />
        <input type="hidden" name="id" value="<?= isset($_GET['id']) ? $_GET['id'] : '' ?>">
        标题：<input type="text" name="title" value="<?= isset($_GET['id']) ? $inform['title'] : "" ?>" />
        <script id="container" name="content" type="text/plain"><?= isset($_GET['id']) ? $inform['content'] : "" ?></script>
        <input type="submit" value="提交" />
    </form>
<?php include_once("./foot.php"); ?>