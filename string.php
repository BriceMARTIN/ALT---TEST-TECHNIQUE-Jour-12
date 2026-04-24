<?php

// NOTE: The result of the example "Bonjour le monde !" is incorrectly expected in the exercise and is 15, not 16
function characterSize(string $message): string {
  $trimmed = preg_replace('/\s+/', '', $message);
  return strlen($trimmed);
}

function greetFirstName(string $name): string {
  $capitalized = ucwords($name);
  return "Bonjour $capitalized";
}

function isSentenceExclamative(string $message): bool {
  return (substr($message, -1) == "!");
}

function reverseWords(string $message): string {
  $split = explode(' ', $message);
  $reversed = array_reverse($split);
  return implode(" ", $reversed);
}

// NOTE: Also works with full strings in $letter, counting the occurrences of whatever string you put
function countOccurrences(string $message, string $letter): int {
  $lowercase = strtolower($message);
  $lowercaseLetter = strtolower($letter);
  return substr_count($lowercase, $lowercaseLetter);
}

function snakeToCamelCase(string $snake): string {
  $split = explode('_', $snake);
  foreach ($split as $index => $word) {
    if ($index != 0) {
      $split[$index] = ucfirst($word);
    }
  }
  return implode('', $split);
}

function countVowels(string $message): int {
  $lowercase = strtolower($message);
  return preg_match_all('/[aeiouy]/i', $lowercase);
}

function alternateCase(string $message): string {
  $lowercase = strtolower($message);
  $return = '';
  foreach (str_split($lowercase) as $index => $letter) {
    $return .= $index % 2 ? strtoupper($letter) : $letter;
  }
  return $return;
}

function removeDuplicates(string $message): string {
  $return = '';
  foreach (str_split($message) as $index => $letter) {
    if ($index == 0 || $letter != $message[$index - 1]) {
      $return .= $letter;
    }
  }
  return $return;
}

function getInitials(string $name): string {
  // This is to make sure that the name is properly capitalized before matching
  $lowercase = strtolower($name);
  $ntui = ucwords($lowercase);

  $matches = [];
  preg_match_all("/[A-Z]/", $ntui, $matches);
  return implode("", $matches[0]);
}

function maskWithOffset(string $message, int $offset): string {
  return substr($message, strlen($message) - $offset);
}

// NOTE: Doesn't work with special letters (i.e.'ç', 'é', ...)
function isPalindrome(string $message): bool {
  $lowercase = strtolower($message);
  $clean = preg_replace( '/[^a-z]/i', '', $lowercase);
  return ($clean == strrev($clean));
}

function findLongestDuplicate(string $message): string {
  $longest = '';
  $current = '';

  foreach (str_split($message) as $index => $letter) {
    if ($letter === ($current[0] ?? null)) {
      $current .= $letter;
    } else {
      $current = $letter;
    }
    if (strlen($current) > strlen($longest)) {
      $longest = $current;
    }
  }
  return $longest;
}

function truncateMessage(string $message, int $length): string {
  // Leave 3 letters for the dots but also add one to account for how substr actually works
  $cut = substr($message, 0, $length - 2);
  return $cut . '...';
}

function capitalizeWords(string $message): string {
  return ucwords($message);
}
