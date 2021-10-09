<?php
/**
 * @author : Ibrahim Elsawaf
 * @created Date : 10/8/2021
 * @project : jumia-exercise
 */

namespace App\controller;

use App\helpers\Controller;


class NotFoundPageController extends Controller
{

    public function index(): int
    {
        $pageTitle = "";
        return $this->view('404',compact('pageTitle'));
    }
}
