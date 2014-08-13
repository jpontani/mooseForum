<?php
/**
 * @file Base application class.
 * @author burningmoose
 * @version 12/29/13 4:59 PM
 */

namespace lib\php\classes;


class app {
  private $installed = false;
  private $plugins = array();

  public function __construct() {
    $this->init();
  }

  private function init() {
    if (!$this->installed) {
      $this->install();
    }
    else {
      $this->start();
    }
    // check install status
    // if installed, start and then process any request if there was one
    // otherwise install
  }

  public function install() {

  }

  public function start() {
    $this->scan_plugins();
  }

  private function scan_plugins() {
    $plugins = $this->_scan_helper("../../../plugins");
    if ($plugins !== FALSE) {

    }
  }

  private function _scan_helper($dir) {
    $plugins = array();
    $dir = scandir($dir);
    if ($dir !== FALSE) {
      foreach ($dir as $entry) {
        while (false !== ($item = readdir($entry))) {
          $info = pathinfo($item);
        }
      }
    }
    return $plugins;
  }
} 