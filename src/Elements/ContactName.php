<?php

namespace Marknl\Iodef\Elements;

use Marknl\Iodef\IodefElement;

class ContactName extends IodefElement
{
    public $value = '';

    /**
     * Value validation rule
     * @return array
     */
    public function getValueRule()
    {
        return [
            'required' => 'value',
        ];
    }
}
