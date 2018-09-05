<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Current extends CI_Controller
{

    function index()
    {
        $array = [0, 1, 2];

        foreach ($array as &$val) {

            var_dump(current($array));

        }
    }

}