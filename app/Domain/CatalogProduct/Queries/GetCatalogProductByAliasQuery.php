<?php

namespace App\Domain\CatalogProduct\Queries;

use App\CatalogProduct;

/**
 * Class GetCatalogProductByAliasQuery
 * @package App\Domain\CatalogProduct\Queries
 */
class GetCatalogProductByAliasQuery
{
    /**
     * @var string
     */
    private $alias;

    /**
     * GetCatalogProductByAliasQuery constructor.
     * @param string $alias
     */
    public function __construct(string $alias)
    {
        $this->alias = $alias;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        return CatalogProduct::where('alias', $this->alias)->with(['images' => function ($query) {
            return $query->where('is_published', '1');
        }, 'originTabs', 'relativeProducts' => function ($query) {
            return $query->where('is_published', '1')->with(['images']);
        }, 'catalog' => function ($query) {
            return $query->with(['catalog']);
        }])->where('is_published', '1')->firstOrFail();
    }
}