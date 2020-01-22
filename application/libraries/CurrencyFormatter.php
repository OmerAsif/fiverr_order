<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of CurrencyFormatter
 *
 * @author YKSERVER
 */
class CurrencyFormatter {
    

    public function __construct() {
       
    }

    public function formate_currency($param) {
        $fmt = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);
        $data = $fmt->formatCurrency($param, "BRL");
        return $data;
    }

}
