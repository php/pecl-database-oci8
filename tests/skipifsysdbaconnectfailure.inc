<?php

require "details.inc";

// the oci_connect parameter corresponding to $dbase defaults to null
if (!isset($dbase)) {
    $dbase = null;
}

if (!isset($sysuser)) {
    die("skip as SYSDBA user is required but not set");
}

$c = @oci_connect($sysuser, $syspassword, $dbase, '', OCI_SYSDBA);

if ($c) {
    oci_close($c);
}
else {
    $msg = "skip Failed to connect to Oracle Database instance ";
    if (is_null($dbase)) {
        $msg .= "<default>";
    }
    else {
        $msg .= "\"$dbase\"";
    }
    $msg .= " as user \"$sysuser\"";
    $e = oci_error();
    $msg .= ": {$e['message']}";
    die($msg);
}

?>
