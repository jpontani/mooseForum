<?php
/**
 * @file Base database class.
 * @author burningmoose
 * @version 1/1/14 4:30 PM
 */

namespace lib\php\classes;


class db {
  private $connection;
  private $results;

  public function __construct() {

  }

  public function query($query) {
    if (gettype($query) == "object") {

    }
    else {
      mysql_query($query);
    }
  }
} 