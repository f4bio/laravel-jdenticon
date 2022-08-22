<?php

namespace F4bio\LaravelJdenticon\Http\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Jdenticon\Identicon;

class JdenticonComponent extends Component
{
    /**
     * The icon.
     */
    public Identicon $icon;

    /**
     * The value.
     */
    public string $value;

    /**
     * The size.
     */
    public string $size;

    /**
     * Create a new component instance.
     *
     * @param  string  $value
     * @param  int  $size
     */
    public function __construct(string $value, int $size = 256)
    {
        $this->value = $value;
        $this->size = min(max($size, 20), 500);

        // Set icon
        $this->icon = new Identicon();
        $this->icon->setValue($this->value);
        $this->icon->setSize($this->size);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.jdenticon', ['icon' => $this->icon]);
    }
}
