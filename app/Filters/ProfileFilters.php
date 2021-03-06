<?php
/**
 * Created by PhpStorm.
 * User: ravibastola
 * Date: 2019-03-13
 * Time: 23:45.
 */

namespace App\Filters;

use App\Profile;

class ProfileFilters extends Filters
{
    protected $filters = ['gender', 'employment', 'age'];

    /**
     * @param $gender
     * @return mixed
     */
    public function gender($gender)
    {
        return Profile::where('gender', $gender);
    }
}
