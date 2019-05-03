<?php 
require_once('./content/version.php');

$x = new stdClass();
$x->cli_version = CLI_VERSION . ": " . CLI_CODENAME;
$x->gui_version = GUI_VERSION . ": " . GUI_CODENAME;
$x->binary_url = "https://getnerva.org/content/";
$x->windows = "nerva-" . CLI_VERSION . "_windows-x64.zip";
$x->linux = "nerva-" . CLI_VERSION . "_linux-x64.zip";
$x->mac = "nerva-" . CLI_VERSION . "_osx-x64.zip";
$x->linux_gui = "nerva-gui-" . GUI_VERSION . "_linux.zip";
$x->windows_gui = "nerva-gui-" . GUI_VERSION . "_windows.zip";
$x->mac_gui = "nerva-gui-" . GUI_VERSION . "_mac.zip";
$x->ledger = "nerva-" . LEDGER_VERSION . "_ledger.zip";

echo json_encode($x, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>
