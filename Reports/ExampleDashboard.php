<?php declare(strict_types=1);

namespace Addons\Reports\CannedResponses\Reports;

use App\Modules\Report\Addon\Dashboards\CardCollection;
use App\Modules\Report\Addon\Dashboards\Dashboard;
use App\Modules\Report\Addon\Dashboards\Filtering\Filter;
use App\Modules\Report\Addon\Dashboards\Filtering\Timeframe;

use function trans;

class ExampleDashboard extends Dashboard
{
    public Timeframe $timeframe = Timeframe::DISABLE;
    public Filter $filter = Filter::NONE;

    public function name(): string
    {
        return trans('Reports#Skeleton::lang.dashboard_name');
    }

    public function description(): string
    {
        return trans('Reports#Skeleton::lang.dashboard_description');
    }

    public function loadCards(CardCollection $collection): void
    {
        // Add your cards here
    }
}
