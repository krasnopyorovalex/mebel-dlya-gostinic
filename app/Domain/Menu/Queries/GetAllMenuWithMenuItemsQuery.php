<?php

namespace App\Domain\Menu\Queries;

use App\Menu;

/**
 * Class GetAllMenuWithMenuItemsQuery
 * @package App\Domain\Menu\Queries
 */
class GetAllMenuWithMenuItemsQuery
{
    /**
     * Execute the job.
     */
    public function handle()
    {
        return Menu::with(['menuItems' => function ($query) {
            return $query->with(['menuItems' => function ($query) {
                return $query->with(['menuItems']);
            }]);
        }])->get();
    }
}