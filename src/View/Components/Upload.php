<?php

namespace DefStudio\Tools\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Upload extends WiredInputComponent
{
    public function __construct(
        ?string $id = null,
        ?string $label = null,
        bool $defer = false,
        ?string $model = null,
        string $size = 'normal',
        bool $wFull = true,
        string $color = 'indigo',
        bool $showErrors = true,
        string $autocomplete = 'off',
        string $hint = '',
        public bool $multiple = false,
    )
    {
        parent::__construct($id, $label, $defer, $model, $size, $wFull, $color, $showErrors, $autocomplete, $hint);
    }

}
