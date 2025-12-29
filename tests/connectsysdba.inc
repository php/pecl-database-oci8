<?php

require 'details.inc';

if (!empty($dbase)) {
    $c = @oci_connect($sysuser, $syspassword, $dbase, false, OCI_SYSDBA);
}
else {
    $c = @oci_connect($sysuser, $syspassword,'', false, OCI_SYSDBA);
}

if (!$c) {
    $m = oci_error();
    trigger_error("connect.inc: Failed to connect as '$sysuser' to '$dbase': ". $m['message'], E_USER_ERROR);
}

?>
