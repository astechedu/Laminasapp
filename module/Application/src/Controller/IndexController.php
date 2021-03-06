<?php
/**
 * @see       https://github.com/laminas/laminas-mvc-skeleton for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-skeleton/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Application\Controller;

use Application\Model\AlbumTable;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;


class IndexController extends AbstractActionController
{
    //private $table;
  
    public function __construct(AlbumTable $table)
    {         
       $this->table = $table;       
    }

    public function indexAction()
    {    	    	
        return new ViewModel([
          'albums' => $this->table->fetchAll()
        ]);
    }
  
}
