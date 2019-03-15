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
    protected $filters = ['sex', 'employment', 'age'];

    /**
     * @param $sex
     *
     * @return mixed
     */
    public function sex($sex)
    {
        return Profile::where('gender', $sex);
    }
}
