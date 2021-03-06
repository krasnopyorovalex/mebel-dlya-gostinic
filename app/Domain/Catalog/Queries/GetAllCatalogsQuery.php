<?php

namespace App\Domain\Catalog\Queries;

use App\Catalog;

/**
 * Class GetAllCatalogsQuery
 * @package App\Domain\Catalog\Queries
 */
class GetAllCatalogsQuery
{
    private $excludeCatalog;

    /**
     * GetAllServicesQuery constructor.
     * @param Catalog|null $excludeCatalog
     */
    public function __construct(Catalog $excludeCatalog = null)
    {
        $this->excludeCatalog = $excludeCatalog;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $query = Catalog::with(['catalogs' => function ($query) {
            return $query->with('products');
        }, 'products'])->where('parent_id', null)->orderBy('pos');

        if ($this->excludeCatalog) {
            return $query->where('id', '<>', $this->excludeCatalog->id)->get();
        }

        return $query->get();
    }
}