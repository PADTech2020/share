<?php

namespace Botble\Clients\Forms;

use Botble\Base\Forms\FormAbstract;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Clients\Http\Requests\ClientsRequest;
use Botble\Clients\Models\Clients;

class ClientsForm extends FormAbstract
{

    /**
     * {@inheritDoc}
     */
    public function buildForm()
    {
        $this
            ->setupModel(new Clients)
            ->setValidatorClass(ClientsRequest::class)
            ->withCustomFields()
            ->add('company', 'text', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('company_link', 'text', [
                'label'      => trans('company_link'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('content', 'editor', [
                'label' => __('content'),
                'label_attr' => ['class' => 'control-label'],
                'attr' => [
                    'with-short-code' => false, // if true, it will add a button to select shortcode
                    'without-buttons' => false, // if true, all buttons will be hidden
                ],
            ])
            ->add('status', 'customSelect', [
                'label'      => trans('core/base::tables.status'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'class' => 'form-control select-full',
                ],
                'choices'    => BaseStatusEnum::labels(),
            ])
            ->add('company_logo', 'mediaImage', [
                'label' => __('Company Logo'),
                'label_attr' => ['class' => 'control-label'],
            ])
            ->setBreakFieldPoint('status');
    }
}
