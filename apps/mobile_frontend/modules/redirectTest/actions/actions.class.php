<?php

/**
 * redirectTest actions.
 *
 * @package    OpenPNE
 * @subpackage redirectTest
 * @author     Your name here
 */
class redirectTestActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfWebRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    if ($request->isMethod('post'))
    {
      $this->redirect($request['redirectUrl']);
    }
  }

  public function executeUrl(sfWebRequest $request)
  {
  
  }
}
