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

        return \View::make('sc.index')
            ->with('ss', $ss)
            ->with('cfg', $cfg);
    }
}