<?php

namespace App\Domain\CatalogProduct\Queries;

use App\Catalog;
use App\CatalogProduct;

/**
 * Class GetAllCatalogsQuery
 * @property Catalog catalog
 * @package App\Domain\CatalogProduct\Queries
 */
class GetAllCatalogProductsQuery
{
    private $catalog;

    private $excludedId;

    private $isPublished;

    /**
     * GetAllCatalogProductsQuery constructor.
     * @param null $catalog
     * @param null $excludedId
     * @param bool $isPublished
     */
    public function __construct($catalog = null, $excludedId = null, bool $isPublished = false)
    {
        $this->catalog = $catalog;
        $this->excludedId = $excludedId;
        $this->isPublished = $isPublished;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $query = CatalogProduct::with(['catalog'])->orderBy('pos');

        if ($this->catalog) {
            $query->where('catalog_id', $this->catalog);
        }

        if ($this->excludedId) {
            $query->where('id', '<>', $this->excludedId);
        }

        if ($this->isPublished) {
            $query->where('is_published', '1');
        }

        return $query->get();
    }
}