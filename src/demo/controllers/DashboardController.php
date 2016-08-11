<?php
/**
 * DashboardController class file
 * @package AdminLTE\demo\controllers
 * @author Ahmad Priatama <ahmad.priatama@gmail.com>
 * @since 2016.08.14
 */

namespace AdminLTE\demo\controllers;

/**
 * Class DashboardController
 * @package AdminLTE\demo\controllers
 * @author Ahmad Priatama <ahmad.priatama@gmail.com>
 * @since 2016.08.14
 */
class DashboardController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return string
     */
    public function actionIndex2()
    {
        return $this->render('index2');
    }
}
