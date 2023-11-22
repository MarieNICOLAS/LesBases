<?php
namespace WPABC;

// TODO: Snake case
class Main
{
  private static $_instance = null;
  private static $_instances = array();

  /**
   * Create and memoize instance of Main
   *
   * @return Main
   */
  public static function get_instance()
  {
    if(self::$_instance === null)
      self::$_instance = new Main();
    return self::$_instance;
  }

  /**
   * Main class constructor
   *
   * @constructor
   */
  public function __construct()
  {
    add_action('init', array($this, 'init_function'));
  }

  /**
   * Initialize function
   * 
   * @param {int} a - uidadhauida
   * @param {mixed} b
   * @return void
   */
  public function init_function()
  {
    self::$_instances["MonPremierService"] = new \WPABC\Class();
  }

}
