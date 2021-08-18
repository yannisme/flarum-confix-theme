<?php

/*
 * This file is part of yannisme/confixtheme.
 *
 * Copyright (c) 2021 yannis.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Yannisme\ConfixTheme;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        
        ->css(__DIR__.'/resources/less/forum.less'),
    (new Extend\Frontend('admin'))
        
        ->css(__DIR__.'/resources/less/admin.less'),
    new Extend\Locales(__DIR__ . '/resources/locale')
];
