<?php

class IndexController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
//        echo "<h1>Hello!</h1>";
			$user=new Users();
			$this->view->name="kitiphong";
//			$this->view->items=array(
//						"name1",
//						"name2",
//						"name3"

			$this->view->items=$user->getItems();		
    }

}
?>