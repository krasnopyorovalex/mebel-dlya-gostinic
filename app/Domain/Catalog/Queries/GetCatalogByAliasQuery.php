<?php

namespace App\Domain\Catalog\Queries;

use App\Catalog;

/**
 * Class GetCatalogByIdQuery
 * @package App\Domain\Catalog\Queries
 */
class GetCatalogByAliasQuery
{
    /**
     * @var string
     */
    private $alias;

    /**
     * GetCatalogByAliasQuery constructor.
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
        return Catalog::with(['image', 'catalog' => function ($query) {
            return $query->with(['image']);
        }, 'catalogs' => function ($query) {
            return $query->with(['image']);
        }])
            ->where('alias', $this->alias)
            ->where('is_published', '1')
            ->firstOrFail();
    }
}