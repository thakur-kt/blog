<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $selected=1;
    public $type=9;

    protected $except = ['type'];
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    
public function isSelected($option)
{
    return $option === $this->selected;
}
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // return function (array $data) {
        //     // $data['componentName'];
        //     // $data['attributes'];
        //     // $data['slot'];
    
        //     return '<div>Name: '.$data['componentName'].'</br>Components content</br>'.$data['slot'].'</div>';
        // };
        return view('components.alert',['data'=>'print any string']);
    }
}
