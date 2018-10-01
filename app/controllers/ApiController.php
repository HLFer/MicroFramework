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

class ApiController extends BaseController
{
    public function __construct()
    {
        header('Content-Type: application/json');
    }

    public function novasafra()
    {
        if ($this->login()) {
            header('X-PHP-Response-Code: 200', true, 200);
        }
    }

    public function login()
    {
        $header_recebido = getallheaders();
        $xml_api = new \Smartdragon\Api\Xml;
        if (isset($header_recebido['magento']) || isset($header_recebido['usuario']) || isset($header_recebido['senha'])) {
            if ($xml_api->login($header_recebido['magento'], $header_recebido['usuario'], $header_recebido['senha'])) {
                return true;
            } else {
                header('X-PHP-Response-Code: 404', true, 404);
                return false;
            }
        }
    }
}
