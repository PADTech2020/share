<?php

namespace Botble\Projects\Forms\Fields;

use Kris\LaravelFormBuilder\Fields\FormField;

class ServicesMultiField extends FormField
{

    /**
     * {@inheritDoc}
     */
    protected function getTemplate()
    {
       // return view('plugins.projects::services-multi');
        return 'plugins/blog::services.services-multi';
    }
}
