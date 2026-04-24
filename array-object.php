<?php

function filterByProperty(array $object, mixed $key, mixed $needle) {
  return array_filter($object, function ($value) use ($key, $needle) {
    return $value[$key] === $needle;
  });
}

function groupBy(array $object, mixed $needle) {
  $return = [];
  foreach ($object as $key => $value) {
    if (!array_key_exists($value[$needle], $return)) {
      $return[$value[$needle]] = [];
    }
    $return[$value[$needle]][] = $value;
  }
  return $return;
}

// NOTE: I wrote the code so the function returns an array of intersections, on the chance that there are more than one
function findIntersection(array $array1, array $array2, mixed $needle) {
  $return = [];
  foreach ($array1 as $value) {
    foreach ($array2 as $value2) {
      if ($value[$needle] === $value2[$needle]) {
        $return[] = $value;
        break;
      }
    }
  }
  return $return;
}

function transformArray(array $object, callable $transform): array {
  return array_map($transform, $object);
}

function aggregateData(array $data, mixed $key, mixed $valueKey): array {
  $return = [];
  foreach ($data as $value) {
    if (!array_key_exists($value[$key], $return)) {
      $return[$value[$key]] = 0;
    }
    $return[$value[$key]] += $value[$valueKey];
  }
  return $return;
}
