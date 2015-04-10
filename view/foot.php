        
            </div>
        </div>
    </body>
    <script type="text/javascript" src="../lib/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="../lib/ueditor/ueditor.all.min.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        if(document.getElementById("container")) {
            var editor = UE.getEditor('container', {
                "autoHeightEnabled": true
            });
        }
    </script>
    <script type="text/javascript"></script>
    <script type="text/javascript" src="<?=$DIR['JS']?>public.js"></script>
    <script type="text/javascript" src="<?=$DIR['JS']?>head.js"></script>
</html>