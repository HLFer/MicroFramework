<?php

/**
 * SmartDragon Framework
 *---------------------------------------------------------------
 * OBSERVAÇÕES DO CONTROLLER
 *---------------------------------------------------------------
 * OBRIGATORIAMENTE O CONTROLLER DEVE CONTER OS SEGUINTE ITENS
 * namespace App\Controller;
 * use Core\BaseController;
 *
 *
 * - UTILIZANDO MODELS E/OU CLASSES EXTERNAS:
 * classes externas do controller podem ser declaradas como
 * $model = new \App\Model\IndexModel;
 * ou
 * use \App\Model\IndexModel;
 * $model = new IndexModel();
 */

namespace App\Controller;

use Core\BaseController;

class IndexController extends BaseController
{
    private $bathroom;

    public function __construct()
    {
    }
    public function index()
    {

        /* UTILIZANDO O BLADE COM PARAMETROS PASSADOS PELO CONTROLLER
         * $array = ['msg' => 'teste2'];
         * echo $this->view('index', $array);
         */
        //$array = ['msg' => 'Bem vindo(a) ao SmartDragon Framework, seu gerenciador de e-commerce!'];
        //echo $this->view('index', $array);

        $bathroom = new Libraries\Bathroom\EasyBathroom();

        /* UTILIZANDO O BLADE SEM PARAMETROS
         * echo $this->view('index');
         */

        //echo $this->view('index');
        /*
         * PEGA O PARAMETRO DA URL PASSADO.(FUNCAO NATIVA DO FRAMEWORK)
         * echo $this->url_get(1);
         */
    }
}
