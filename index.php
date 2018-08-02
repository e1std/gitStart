<?php
require_once("sett.php");
require_once("conf/env_conf.php");
require_once("classes/basic.php");
require_once("classes/sec.php");
require_once("include/db_open.php");

$sec=new sec();
$basic=new basic();

require_once("include/ini_vars.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8">
        <link rel='shortcut icon' type='image/x-icon' href='<?php echo DIR_WWW_ROOT; ?>favicon.ico' />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <link rel="stylesheet" type="text/css" href="<?php echo DIR_WWW_ROOT; ?>bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo DIR_WWW_ROOT; ?>css/jquery-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo DIR_WWW_ROOT; ?>css/jquery-nicelabel.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo DIR_WWW_ROOT; ?>css/square/square.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo DIR_WWW_ROOT; ?>css/prettydropdowns.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo DIR_WWW_ROOT; ?>css/ah.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo DIR_WWW_ROOT; ?>css/style.css?v=<?php echo filemtime('css/style.css'); ?>" />
        <script type="text/javascript" language="javascript">
            var g_www_root = "<?php echo DIR_WWW_ROOT; ?>";
        </script>
        <script src="<?php echo DIR_WWW_ROOT; ?>js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo DIR_WWW_ROOT; ?>bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo DIR_WWW_ROOT; ?>js/jquery-ui.min.js"></script>
        <script src="<?php echo DIR_WWW_ROOT; ?>js/fontawesome-all.min.js"></script>
        <script src="<?php echo DIR_WWW_ROOT; ?>js/jquery.nicelabel.js"></script>
        <script src="<?php echo DIR_WWW_ROOT; ?>js/icheck.min.js"></script>
        <script src="<?php echo DIR_WWW_ROOT; ?>js/jquery.prettydropdowns.js"></script>
        <script src="<?php echo DIR_WWW_ROOT; ?>js/ah.js?v=<?php echo filemtime('js/ah.js'); ?>"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;subset=latin-ext" rel="stylesheet">
    </head>
    <body>
        <?php
        if ($_SESSION["site"]["auth_status"]==0)
        {
            switch($pg)
            {
                case "info":
                    include('include/inc_info.php');
                    break;
                default:
                    include('include/inc_login.php');
                    break;
            }
            
        }
        else
        {
            switch($pg)
            {
                case "info":
                    include('include/inc_info.php');
                    break;
                case "home":
                default:
                    include('include/inc_main.php');
                    break;
            }
        }
        ?>
    </body>
</html>