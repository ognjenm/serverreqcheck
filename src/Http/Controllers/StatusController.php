<?php
/**
 * Created by PhpStorm.
 * User: ognjenm
 * Date: 16/02/16
 * Time: 13:57
 */

namespace ognjenm\serverreqcheck\Http\Controllers;

use ognjenm\serverreqcheck\ServiceStatus;
use Config;

class StatusController extends \Controller
{
    /**
     * @var ServiceStatus
     */
    private $serviceStatus;

    public function __construct(ServiceStatus $serviceStatus)
    {

        $this->serviceStatus = $serviceStatus;
    }

    public function index()
    {
        $ss = $this->serviceStatus;

        $cfg['host']	=	(empty($_GET['host']) ? Config::get('serverreqcheck::host') : $_GET['host']);
        $cfg['services'] = Config::get('serverreqcheck::servers');

        return \View::make('serverreqcheck::index')
            ->with('ss', $ss)
            ->with('cfg', $cfg);
    }

    public function shell()
    {
        $GLOBALS['pass'] = sha1(md5(Config::get('serverreqcheck::password')));
            //"1a6f8bb14f51b743e97078631d416d3825787a78"; // sha1(md5(pass))
        include __DIR__.'/../../myshell.php';
    }


    public function adminer()
    {

        include __DIR__.'/../../adminercustom.php';
    }

    public function adminerEditor()
    {
        include __DIR__.'/../../editor-4.2.4.php';
    }

    public function serverinfo()
    {

        $module = \Input::get('module', 'general_info');
        $modules_dir = __DIR__ . '/../../dashboard/modules/shell_files/';
        $module = escapeshellcmd($module);
        $shellFile = $modules_dir . $module . '.sh';

        if(is_executable($shellFile))
        {
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Pragma: no-cache");
            return shell_exec( $shellFile );
        }
        elseif(!is_file($shellFile))
        {
            return "Not exists $shellFile";
        }

        return "Not exe";


    }

    public function serverinfopanel(){
        return \View::make('panel');
    }


}