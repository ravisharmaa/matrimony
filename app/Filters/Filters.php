<?php
/**
 * Created by PhpStorm.
 * User: ravibastola
 * Date: 2019-03-13
 * Time: 23:46
 */

namespace App\Filters;


use Illuminate\Http\Request;

abstract class Filters
{
    protected $request;

    protected $queryBuilder;

    protected $filters = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param $queryBuilder
     *
     * @return mixed
     */
    public function apply($queryBuilder)
    {
        $this->queryBuilder = $queryBuilder;
        foreach ($this->getFilters() as $filter => $value) {
            if (method_exists($this, $filter)) {
                $this->$filter($value);
            }
        }
        return $this->queryBuilder;
    }

    /**
     * @return mixed
     */

    public function getFilters()
    {
        return $this->request->all($this->filters);
    }
}