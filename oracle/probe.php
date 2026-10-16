<?php

declare(strict_types=1);

function toRna($strand)
{
    return strtr($strand, 'CGTA', 'GCAU');
}

$__in = json_decode('["", "C", "G", "T", "A", "ACGTGGTCTTAA"]', true);
$__out = [];
foreach ($__in as $x) {
  try { $__out[] = ["ok" => true, "v" => toRna($x)]; }
  catch (\Throwable $e) { $__out[] = ["ok" => false, "e" => get_class($e)]; }
}
echo json_encode(["out" => $__out]);
