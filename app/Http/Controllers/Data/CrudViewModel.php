<?php

namespace App\Http\Controllers\ViewModels;

/**
 * Class CRUDViewModel
 * @package App\Http\Controllers\Data
 */
class CRUDViewModel
{
    /** @var string */
    public string $name;

    /** @var bool */
    public bool $editable = true;

    /** @var bool  */
    public bool $viewable = true;

    /** @var bool */
    public bool $destroyable = true;

    /** @var bool */
    public bool $creatable = true;

    /** @var string[] */
    public array $routes;

    /** @var null|Model[]|Model */
    public $data;

    /** @var string[] */
    public array $views;

    /**
     * Module constructor.
     * @param string $name
     * @param null $data
     */
    public function __construct(string $name, $data = null)
    {
        $this->name = ucfirst($name);
        $this->data = $data;
        $this->routes = [
            'create' => "{$name}.create",
            'store' => "{$name}.store",
            'index' => "{$name}.index",
            'show' => "{$name}.show",
            'update' => "{$name}.update",
            'edit' => "{$name}.edit",
            'destroy' => "{$name}.destroy"
        ];
        $this->views = [
            'index' => "crud.{$name}.index",
            'show' => "crud.{$name}.show",
            'create' => "crud.{$name}.create",
            'edit' => "crud.{$name}.edit",
            'forms' => "crud.{$name}.forms"
        ];
    }
}
