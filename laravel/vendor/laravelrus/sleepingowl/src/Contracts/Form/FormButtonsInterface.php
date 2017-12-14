<?php

namespace SleepingOwl\Admin\Contracts\Form;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Renderable;
use SleepingOwl\Admin\Contracts\WithModelInterface;
use SleepingOwl\Admin\Contracts\ModelConfigurationInterface;

interface FormButtonsInterface extends Renderable, Arrayable, WithModelInterface
{
    /**
     * @param ModelConfigurationInterface $modelConfiguration
     *
     * @return $this
     */
    public function setModelConfiguration(ModelConfigurationInterface $modelConfiguration);
}
