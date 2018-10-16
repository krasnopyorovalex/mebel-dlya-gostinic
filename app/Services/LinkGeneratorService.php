<?php

namespace App\Services;

/**
 * Class LinkGeneratorService
 * @package App\Services
 */
class LinkGeneratorService
{
    /**
     * @var array
     */
    private $models = [
        'App\Page' => 'Страницы',
        'App\Service' => 'Услуги',
        'App\Article' => 'Статьи',
        'App\Catalog' => 'Категории каталога',
        'App\ReadySolution' => 'Готовые решения',
    ];

    /**
     * @var array
     */
    private $result = [];

    /**
     * @return array
     */
    public function getCollection(): array
    {
        foreach ($this->models as $key => $value) {

            try {
                $reflectionClass = (new \ReflectionClass($key))->newInstance();
                $module = snake_case(class_basename($reflectionClass));
                if ($module == 'catalog') {
                    $collection = $reflectionClass::where('parent_id', null)->with(['catalogs'])->get();
                } else {
                    $collection = $reflectionClass::get();
                }


                $this->result[$value] = [
                    'module' => $module,
                    'collections' => $collection
                ];
            } catch (\Exception $exception) {
                \Log::error($exception->getMessage());
            }
        }

        return $this->result;
    }

    /**
     * @param string $modelName
     * @param string $alias
     * @param bool $parentAlias
     * @return string
     */
    public function createLink(string $modelName, string $alias, $parentAlias = false): string
    {
        $route = $parentAlias
            ? route($modelName . '.sub', ['catalog' => $parentAlias, 'alias' => $alias], false)
            : route($modelName . '.show', ['alias' => $alias], false);

        return str_replace(['index'], '', urldecode($route));
    }

}