<?php

/**
 * main actions.
 *
 * @package    hamaspyur
 * @subpackage main
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->flowers = FlowerTable::getInstance()->findAll();
  }
}
