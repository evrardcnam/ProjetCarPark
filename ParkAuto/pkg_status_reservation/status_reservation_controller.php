<?php

/**
 * Created by PhpStorm.
 * User: berne
 * Date: 12/06/2017
 * Time: 17:28
 */
class status_reservation_controller
{
    //attribut privé de la classe
    //controller et model de la classe
    private $obj_status_reservation_model;
    private $obj_status_reservation_viewer;
    public function __construct($str_action = "", $roleId)
    {
        $this->obj_status_reservation_model = new status_reservation_model();
        $this->obj_status_reservation_viewer = new status_reservation_viewer();
    }
}