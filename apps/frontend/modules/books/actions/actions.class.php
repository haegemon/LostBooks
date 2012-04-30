<?php

/**
 * books actions.
 *
 * @package    lostbook
 * @subpackage books
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class booksActions extends sfActions
{
  public function executeAboutus(){;}

  public function executeLink(){;}
  
  public function executeIndex(sfWebRequest $request)
  {

    $this->bookss = Doctrine_Core::getTable('Books')
      ->createQuery()
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->books = Doctrine_Core::getTable('Books')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->books);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new BooksForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new BooksForm();


    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($books = Doctrine_Core::getTable('Books')->find(array($request->getParameter('id'))), sprintf('Object books does not exist (%s).', $request->getParameter('id')));
    $this->form = new BooksForm($books);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($books = Doctrine_Core::getTable('Books')->find(array($request->getParameter('id'))), sprintf('Object books does not exist (%s).', $request->getParameter('id')));
    $this->form = new BooksForm($books);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($books = Doctrine_Core::getTable('Books')->find(array($request->getParameter('id'))), sprintf('Object books does not exist (%s).', $request->getParameter('id')));
    $books->delete();

    $this->redirect('books/index');
  }


  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $books = $form->save();

      $this->redirect('books/edit?id='.$books->getId());
    }
  }
}
