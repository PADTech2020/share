<?php

namespace Botble\Slider\Forms;

use Botble\Base\Forms\FormAbstract;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Slider\Http\Requests\SliderRequest;
use Botble\Slider\Models\Slider;

class SliderForm extends FormAbstract
{

    /**
     * {@inheritDoc}
     */
    public function buildForm()
    {
        $this
            ->setupModel(new Slider)
            ->setValidatorClass(SliderRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            
            ->add('button_1', 'text', [
                'label'      => trans('plugins/slider::slider.button_1'),
                'label_attr' => ['class' => 'control-label '],
                'attr'       => [
                    'data-counter' => 120,
                ],
            ])
            ->add('button_1_url', 'text', [
                'label'      => trans('plugins/slider::slider.button_1_url'),
                'label_attr' => ['class' => 'control-label '],
                'attr'       => [
                    'data-counter' => 120,
                ],
            ])
            
            ->add('status', 'customSelect', [
                'label'      => trans('core/base::tables.status'),
                'label_attr' => ['class' => 'control-label '],
                'attr'       => [
                    'class' => 'form-control select-full',
                ],
                'choices'    => BaseStatusEnum::labels(),
            ])
            ->add('main_slide', 'mediaImage', [
                'label' => __('Slide'),
                'label_attr' => ['class' => 'control-label'],
            ])
            ->setBreakFieldPoint('status');
    }
}
