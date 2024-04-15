<?php

namespace Mobtexting\LaravelComponents\Components;

class FormDate extends Component
{
    use HandlesValidationErrors;
    use HandlesDefaultAndOldValue;

    public string $name;
    public string $label;
    public string $type;
    public string $dateType;
    public bool $floating;

    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $name,
        string $label = '',
        string $type = 'text',
        string $dateType = 'data-datepicker',
        $bind = null,
        $default = null,
        $language = null,
        bool $showErrors = true,
        bool $floating = false
    ) {
        $this->name       = $name;
        $this->label      = $label;
        $this->type       = $type;
        $this->dateType   = $dateType;
        $this->showErrors = $showErrors;
        $this->floating   = $floating && $type !== 'hidden';

        if ($language) {
            $this->name = "{$name}[{$language}]";
        }

        $this->setValue($name, $bind, $default, $language);
    }
}
