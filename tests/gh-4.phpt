--TEST--
Bug GH-4 (Memory leak with long query/CLOB)
--EXTENSIONS--
oci8
--SKIPIF--
<?php
require_once 'skipifconnectfailure.inc';
?>
--FILE--
<?php

require __DIR__.'/connect.inc';

$expectedStr = str_repeat('a', 1_001);
$sql = 'select concat(TO_CLOB(\'' . str_repeat('a', 1_000) . '\'), TO_CLOB(\'a\')) AS "v" from "DUAL"';

$memUsages = array_flip(range(0, 100 - 1));
foreach (array_keys($memUsages) as $k) {
    $stid = oci_parse($c, $sql);
    oci_execute($stid);
    $row = oci_fetch_array($stid, \OCI_ASSOC);
    $res = $row['v']->load();
    if ($res !== $expectedStr) {
        var_dump([$expectedStr, $res]);
        throw new \Exception('unexpected result');
    }

    $memUsages[$k] = memory_get_usage();
}

$memUsages = array_slice($memUsages, 1, null, true);
$memUsages = array_unique($memUsages);

if (count($memUsages) !== 1) {
    var_dump($memUsages);
    throw new \Exception('memory leak detected');
}

echo "ok\n";

?>
--EXPECTF--
ok
