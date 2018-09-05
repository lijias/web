<?php
header('Content-Type:text/html;charset=utf-8');
include_once 'smarty/Smarty.class.php';
include_once 'dbio/email.php';

$smarty = new Smarty();

$id = $_GET['id'];
$del_tis = $_GET['del_tis'];

$select = Email::getEmails();

if ($id != null && $del_tis == 1) {

    $del = Email::delOneEmails($id);
    if ($del > 0) {
        $smarty->assign("del_tis", json_encode(1));
    } else {
        $smarty->assign("del_tis", json_encode(0));
    }
}
$smarty->assign("select", $select);

$smarty->display("showMails.html");