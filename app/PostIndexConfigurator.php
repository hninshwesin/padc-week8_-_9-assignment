<?php

namespace App;

use ScoutElastic\IndexConfigurator;
use ScoutElastic\Migratable;

class PostIndexConfigurator extends IndexConfigurator
{
    use Migratable;

    protected $name = 'padc9_post_index';

    /**
     * @var array
     */
    protected $settings = [
        //
    ];
}
