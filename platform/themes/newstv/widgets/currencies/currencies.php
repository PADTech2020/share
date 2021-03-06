<?php

use Botble\Widget\AbstractWidget;

class CurrenciesWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * @var string
     */
    protected $frontendTemplate = 'frontend';

    /**
     * @var string
     */
    protected $backendTemplate = 'backend';

    /**
     * @var string
     */
    protected $widgetDirectory = 'currencies';

    /**
     * PopularPostsWidget constructor.
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function __construct()
    {
        parent::__construct([
            'name'           => 'Currencies',
            'description'    => 'This is a sample widget',
            'number_display' => 5,
            'currency'=>'USD'
        ]);
    }
}
