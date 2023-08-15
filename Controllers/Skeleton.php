<?php declare(strict_types=1);

namespace Addons\Reports\Skeleton\Controllers;

use Addons\Reports\CannedResponses\Reports\ExampleDashboard;
use App\Modules\Report\Addon\ReportAddon;

class Skeleton extends ReportAddon
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
