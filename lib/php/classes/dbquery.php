<?php
/**
 * Created by PhpStorm.
 * User: joseph.pontani
 * Date: 1/1/14
 * Time: 4:35 PM
 */

namespace lib\php\classes;


class dbquery {
  private $table;
  private $alias;
  private $limit;
  private $where;
  private $group;
  private $results;
  private $query;

  public function select($table, $alias = null) {

  }

  public function condition($field, $value, $op = "=") {

  }

  public function fields($alias, $fields = null) {
    if ($fields === null) {
      $fields = "*";
    }
  }

} 