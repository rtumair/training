<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:46 AM
 */

require_once ('../core/controllers/Controller.php');


class ActorController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = $this->setModel('Actor');
        $this->controllerName = 'actor';
    }
}