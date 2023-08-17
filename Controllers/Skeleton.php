<?php declare(strict_types=1);

namespace Addons\Reports\Skeleton\Controllers;

use Addons\Reports\Skeleton\Reports\ExampleDashboard;
use App\Modules\Report\Addon\Report;

class Skeleton extends Report
{
    public function __construct()
    {
        parent::__construct();

        $this->registerReportDashboards([ExampleDashboard::class]);
    }

    /**
     * @return bool
     */
    public function activate()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function deactivate()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function uninstall()
    {
        return true;
    }
}
