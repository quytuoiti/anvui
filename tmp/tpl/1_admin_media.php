<?php 
/**
 * @Project BNC v2 -> Adminuser
 * @File /data/www/superweb/anvui/tmp/tpl/1_admin_media.php 
 * @Author Quang Chau Tran (quangchauvn@gmail.com) 
 */
if(!defined('BNC_CODE')) {
    exit('Access Denied');
}
?>
<!-- 
<script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
-->

<script src="http://anvui.vn/themes/media/jquery/jquery-1.8.1.min.js" type="text/javascript" charset="utf-8"></script>


<!-- <script src="jquery/jquery-ui-1.8.21.custom.min.js"></script> -->
<!-- <script src="jquery/jquery-ui-1.8.23.custom.min.js" type="text/javascript" charset="utf-8"></script> -->
<!-- <link rel="stylesheet" href="jquery/ui-themes/smoothness/jquery-ui-1.8.23.custom.css" type="text/css" media="screen" title="no title" charset="utf-8"> -->

<script src="http://anvui.vn/themes/media/jquery/jquery-ui-1.10.1.custom.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="http://anvui.vn/themes/media/jquery/ui-themes/smoothness/jquery-ui-1.10.1.custom.css" type="text/css" media="screen" title="no title" charset="utf-8">


<!-- <link rel="stylesheet" href="jquery/ui-themes/smoothness/jquery-ui-1.8.21.custom.css" type="text/css"> -->


<link rel="stylesheet" href="http://anvui.vn/themes/media/css/common.css"      type="text/css">
<link rel="stylesheet" href="http://anvui.vn/themes/media/css/dialog.css"      type="text/css">
<link rel="stylesheet" href="http://anvui.vn/themes/media/css/toolbar.css"     type="text/css">
<link rel="stylesheet" href="http://anvui.vn/themes/media/css/navbar.css"      type="text/css">
<link rel="stylesheet" href="http://anvui.vn/themes/media/css/statusbar.css"   type="text/css">
<link rel="stylesheet" href="http://anvui.vn/themes/media/css/contextmenu.css" type="text/css">
<link rel="stylesheet" href="http://anvui.vn/themes/media/css/cwd.css"         type="text/css">
<link rel="stylesheet" href="http://anvui.vn/themes/media/css/quicklook.css"   type="text/css">
<link rel="stylesheet" href="http://anvui.vn/themes/media/css/commands.css"    type="text/css">
<link rel="stylesheet" href="http://anvui.vn/themes/media/css/fonts.css"       type="text/css">
<link rel="stylesheet" href="http://anvui.vn/themes/media/css/theme.css"       type="text/css">

<!-- elfinder core -->
<script src="http://anvui.vn/themes/media/js/elFinder.js"></script>
<script src="http://anvui.vn/themes/media/js/elFinder.version.js"></script>
<script src="http://anvui.vn/themes/media/js/jquery.elfinder.js"></script>
<script src="http://anvui.vn/themes/media/js/elFinder.resources.js"></script>
<script src="http://anvui.vn/themes/media/js/elFinder.options.js"></script>
<script src="http://anvui.vn/themes/media/js/elFinder.history.js"></script>
<script src="http://anvui.vn/themes/media/js/elFinder.command.js"></script>

<!-- elfinder ui -->
<script src="http://anvui.vn/themes/media/js/ui/overlay.js"></script>
<script src="http://anvui.vn/themes/media/js/ui/workzone.js"></script>
<script src="http://anvui.vn/themes/media/js/ui/navbar.js"></script>
<script src="http://anvui.vn/themes/media/js/ui/dialog.js"></script>
<script src="http://anvui.vn/themes/media/js/ui/tree.js"></script>
<script src="http://anvui.vn/themes/media/js/ui/cwd.js"></script>
<script src="http://anvui.vn/themes/media/js/ui/toolbar.js"></script>
<script src="http://anvui.vn/themes/media/js/ui/button.js"></script>
<script src="http://anvui.vn/themes/media/js/ui/uploadButton.js"></script>
<script src="http://anvui.vn/themes/media/js/ui/viewbutton.js"></script>
<script src="http://anvui.vn/themes/media/js/ui/searchbutton.js"></script>
<script src="http://anvui.vn/themes/media/js/ui/sortbutton.js"></script>
<script src="http://anvui.vn/themes/media/js/ui/panel.js"></script>
<script src="http://anvui.vn/themes/media/js/ui/contextmenu.js"></script>
<script src="http://anvui.vn/themes/media/js/ui/path.js"></script>
<script src="http://anvui.vn/themes/media/js/ui/stat.js"></script>
<script src="http://anvui.vn/themes/media/js/ui/places.js"></script>

<!-- elfinder commands -->
<script src="http://anvui.vn/themes/media/js/commands/back.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/forward.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/reload.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/up.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/home.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/copy.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/cut.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/paste.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/open.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/rm.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/info.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/duplicate.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/rename.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/help.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/getfile.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/mkdir.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/mkfile.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/upload.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/download.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/edit.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/quicklook.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/quicklook.plugins.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/extract.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/archive.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/search.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/view.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/resize.js"></script>
<script src="http://anvui.vn/themes/media/js/commands/sort.js"></script>	
<script src="http://anvui.vn/themes/media/js/commands/netmount.js"></script>	

<!-- elfinder languages -->

<script src="http://anvui.vn/themes/media/js/i18n/elfinder.vi.js"></script>

<!-- elfinder dialog -->
<script src="http://anvui.vn/themes/media/js/jquery.dialogelfinder.js"></script>

<!-- elfinder 1.x connector API support -->
<script src="http://anvui.vn/themes/media/js/proxy/elFinderSupportVer1.js"></script>

<!-- elfinder custom extenstions -->
<script src="http://anvui.vn/themes/media/extensions/jplayer/elfinder.quicklook.jplayer.js"></script>



<script type="text/javascript" charset="utf-8">
    // Helper function to get parameters from the query string.
    function getUrlParam(paramName) {
        var reParam = new RegExp('(?:[\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;
        var match = window.location.search.match(reParam) ;

        return (match && match.length > 1) ? match[1] : '' ;
    }

    $().ready(function() {
        var funcNum = getUrlParam('CKEditorFuncNum');

        var elf = $('#finder').elfinder({
            url : 'http://anvui.vn/cdn/code/connector.php',
            lang : 'vi',
            getFileCallback : function(file) {
                window.opener.CKEDITOR.tools.callFunction(funcNum, file.url);
                window.close();
            },
            resizable: false
        }).elfinder('instance');
    });
</script>

<div id="finder"></div>	


