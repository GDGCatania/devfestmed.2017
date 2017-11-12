<?php

if (!file_exists("data.json")) {
  die;
}

$data = file_get_contents("data.json");
$data = json_decode($data, true);

function photo_filter($el) {
  return isset($el["photo"]) && !empty($el["photo"]);
}

foreach($data as &$actor) {
  $actor = array_filter($actor, "photo_filter");
}

function get_category($speaker, $field = null) {
  $categories = array(
    "T" => array("name" => "Technology", "class" => "c-speaker__category--technology"),
    "M" => array("name" => "Marketing", "class" => "c-speaker__category--marketing"),
    "D" => array("name" => "Product Design", "class" => "c-speaker__category--product-design")
  );
  $category = $categories[$speaker["category"]];
  if (is_string($field) && isset($category[$field])) {
    return $category[$field];
  }
  return $category;
}

function the_category_name($speaker) {
  echo get_category($speaker, "name");
}

function the_category_class($speaker) {
  echo get_category($speaker, "class");
}

require "template.php";