<?php 

require_once('./version.php');

$x = new stdClass();

$x->cli_version = CLI_VERSION . ": " . CLI_CODENAME;
$x->gui_version = GUI_VERSION . ": " . GUI_CODENAME;

$x->linux = LINUX_CLI_LINK;
$x->mac = MAC_CLI_LINK;
$x->windows = WINDOWS_CLI_LINK;

$x->linux_gui = LINUX_GUI_LINK;
$x->mac_gui = MAC_GUI_LINK;
$x->windows_gui = WINDOWS_GUI_LINK;

$x->ledger = LEDGER_LINK;
$x->quicksync = QUICKSYNC_LINK;

echo json_encode($x, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>
