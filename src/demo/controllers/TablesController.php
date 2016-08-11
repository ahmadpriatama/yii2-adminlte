<?php
/**
 * Tables class file
 * @package AdminLTE\demo\controllers
 * @author Ahmad Priatama <ahmad.priatama@gmail.com>
 * @since 2016.08.14
 */

namespace AdminLTE\demo\controllers;

/**
 * Class Tables
 * @package AdminLTE\demo\controllers
 * @author Ahmad Priatama <ahmad.priatama@gmail.com>
 * @since 2016.08.14
 */
class TablesController extends Controller
{
    /**
     * @return string
     */
    public function actionSimple()
    {
        return $this->render('simple');
    }

    /**
     * @return string
     */
    public function actionData()
    {
        return $this->render('data');
    }
}