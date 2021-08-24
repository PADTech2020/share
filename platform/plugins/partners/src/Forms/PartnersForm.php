<?php

namespace Botble\Partners\Forms;

use Botble\Base\Forms\FormAbstract;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Partners\Http\Requests\PartnersRequest;
use Botble\Partners\Models\Partners;

class PartnersForm extends FormAbstract
{

    /**
     * {@inheritDoc}
     */
    public function buildForm()
    {
       
        $this
            ->setupModel(new Partners)
            ->setValidatorClass(PartnersRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('logo', 'mediaImage', [
                'label' => __('Logo'),
                'label_attr' => ['class' => 'control-label'],
            ])
            ->add('url', 'text', [
                'label'      => trans('URL'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'data-counter' => 120,
                ],
            ])
            ->add('summary', 'editor', [
                'label' => __('Summary'),
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
            ->setBreakFieldPoint('status');
    }
}
