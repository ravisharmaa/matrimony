<?php
/**
 * Created by PhpStorm.
 * User: ravibastola
 * Date: 2019-03-13
 * Time: 23:45
 */

namespace App\Filters;


class ProfileFilters extends Filters
{
    protected $filters = ['sex','employment','age'];

    public function sex()
    {
        dd('hello');
    }
}