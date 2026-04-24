<?php

function getValues(array $array): array {
  return array_values($array);
}

function transformValues(array $values, callable $conversion): array {
  return array_map(function ($value) use ($conversion) {
    return $conversion($value);
  }, $values);
}

function mergeObjects(array $array1, array $array2): array {
  $uniqueKeys = array_unique(
    array_merge(
      array_keys($array1), array_keys($array2)
    )
  );

  $return = [];
  foreach ($uniqueKeys as $key) {
    $return[$key] = ($array1[$key] ?? 0) + ($array2[$key] ?? 0);
  }
  return $return;
}

function filterObject(array $objects, callable $filter): array {
  return array_filter($objects, $filter);
}

// NOTE: Only returns up to two layers; needs more complexity to handle n layers
function flatToNested(array $object): array {
  $keys = array_keys($object);

  $return = [];
  foreach ($keys as $key) {
    $split = explode(".", $key);
    if (!array_key_exists($split[0], $return)) {
      $return[$split[0]] = [];
    }
    $return[$split[0]][$split[1]] = $object[$key];
  }
  return $return;
}

function findKeysByValue(array $object, mixed $needle): array {
  $filtered = array_filter($object, function ($value) use ($needle) {
    return $value === $needle;
  });
  return array_keys($filtered);
}

function createObjectFromArrays(array $keys, array $values): array {
  $return = [];
  foreach ($keys as $index => $key) {
    $return[$key] = $values[$index] ?? null;
  }
  return $return;
}

function countValues(array $object): array {
  $return = [];
  foreach ($object as $value) {
    if (!array_key_exists($value, $return)) {
      $return[$value] = 0;
    }
    $return[$value]++;
  }
  return $return;
}

function extractProperties(array $object, array $properties): array {
  $return = [];
  foreach ($properties as $property) {
    $return[$property] = $object[$property] ?? null;
  }
  return $return;
}

// NOTE: Although asort and arsort directly modify the array rather than returning the new value,
//       the original outside of the functions remains unchanged
function sortObjectByValue(array $array): array {
  asort($array);
  return $array;
}

function findMaxValue(array $array): int {
  arsort($array);
  return array_values($array)[0];
}

function createObjectFromPairs(array $pairs): array {
  $return = [];
  foreach ($pairs as $pair) {
    $return[$pair[0]] = $pair[1];
  }
  return $return;
}

// NOTE: returns false if the value doesn't exist in the object
function findValueInObject(array $object, mixed $needle): array|bool {
  foreach ($object as $key => $value) {
    if (is_array($value)) {
      $result = findValueInObject($value, $needle);
      if ($result) {
        return array_merge([$key], $result);
      }
    } else {
      if ($value === $needle) {
        return [$key];
      }
    }
  }

  return false;
}

function groupByProperty(array $array, mixed $property): array {
  $return = [];
  foreach ($array as $value) {
    if (!array_key_exists($value[$property], $return)) {
      $return[$value[$property]] = [];
    }
    $return[$value[$property]][] = $value;
  }
  return $return;
}

function validateObject(array $input, array $schema): bool {
  foreach ($schema as $key => $value) {
    if (!array_key_exists($key, $input)) {
      return false;
    } else if (gettype($input[$key]) !== $value) {
      // Failsafe to account for mock data; may have to be removed if the mock data is in fact wrong
      if (gettype($input[$key]) === "integer" && $value === "number") {
        continue;
      }
      return false;
    }
  }
  return true;
}

// NOTE: no example was given on the expected behavior in the case of same values, I chose to not return them
function compareDifferences(array $old, array $new): array {
  $return = [];
  foreach ($new as $key => $value) {
    if (!array_key_exists($key, $old)) {
      $return[$key] = ["type" => "added", "new" => $value];
    } else if ($value !== $old[$key]) {
      $return[$key] = ["type" => "modified", "old" => $old[$key], "new" => $value];
    }
  }
  return $return;
}

function objectToUrlParams(array $params): string {
  $assignedValues = [];
  foreach ($params as $key => $value) {
    $assignedValues[] = rawurlencode($key) . '=' . rawurlencode($value);
  }
  return implode('&', $assignedValues);
}

function getObjectStats(array $stats): array {
    $values = array_values($stats);
    $count = count($values);

    $total = array_sum($values);
    $average = $total / $count;
    $min = min($values);
    $max = max($values);

    sort($values);
    $middle = intdiv($count, 2);
    $median = ($count % 2 === 0)
        ? ($values[$middle - 1] + $values[$middle]) / 2
        : $values[$middle];

    $squaredDiffs = array_map(function ($v) use ($average) {
      return ($v - $average) ** 2;
    }, $values);
    $variance = array_sum($squaredDiffs) / $count;
    $deviation = round(sqrt($variance), 2);

    return [
        "basic" => [
            "min" => $min,
            "max" => $max,
            "average" => $average,
            "total" => $total,
        ],
        "advanced" => [
            "median" => $median,
            "variance" => $variance,
            "standardDeviation" => $deviation,
        ],
    ];
}
