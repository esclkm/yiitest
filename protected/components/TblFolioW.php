<?php
/**
 * Yii command line script file.
 *
 * This script is meant to be run on command line to execute
 * one of the pre-defined console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright 2008-2013 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

// fix for fcgi
class TblFolioW extends CWidget {

    public $params = array(
        'parameter 1'=>'value 1',
        'parameter 2'=>'value 2',
        'parameter 3'=>'value 3',
    );
 
    public function run() {
        $About = new TblFolioController(1);

        $posts=TblFolio::model()->findAll('');
        foreach ($posts as $post)
        {
       // 	print_r($post);

        	$this->render('TblFolioV', array('model'=> $post));
        }
    }
}