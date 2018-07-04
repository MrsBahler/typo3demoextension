<?php

namespace BenediktSeurig\ListEverything\Controller;

use BenediktSeurig\ListEverything\Domain\Repository\ListitemRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class ListEverythingController
 *
 * @package BenediktSeurig\ListEverything\Controller
 */
class ListEverythingController extends ActionController
{

    /**
     * @var ListitemRepository
     */
    private $listitemRepository;

    /**
     * Inject the listitem repository
     *
     * @param \BenediktSeurig\ListEverything\Domain\Repository\ListitemRepository $listitemRepository
     */
    public function injectListitemRepository(ListitemRepository $listitemRepository)
    {
        $this->listitemRepository = $listitemRepository;
    }

    /**
     * List Action
     *
     * @return void
     */
    public function listAction()
    {
        $listitems = $this->listitemRepository->findAll();
        $this->view->assign('listitems', $listitems);
    }
}
