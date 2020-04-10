<?php

namespace Application\Models\Formatters;

use Application\Models\Area;
use Application\Models\Company;
use Application\Models\Category;

/**
 * Trait PostFormatter
 */
trait PostFormatter
{
    /**
     * undocumented function
     *
     * @return void
     */
    public function asListingItem()
    {
        $d = $this->toArray();
        $d['postTime'] = date('Y/m/d', $d['postTime']);
        $d['area'] = Area::get($d['areaId']);
        $d['company'] = Company::get($d['companyId']);
        $d['category'] = Category::get($d['categoryId']);

        return $d;
    }
}
