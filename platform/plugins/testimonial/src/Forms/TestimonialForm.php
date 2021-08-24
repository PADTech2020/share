<?php

namespace Botble\Testimonial\Forms;

use Botble\Base\Forms\FormAbstract;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Testimonial\Http\Requests\TestimonialRequest;
use Botble\Testimonial\Models\Testimonial;

class TestimonialForm extends FormAbstract
{

    /**
     * {@inheritDoc}
     */
    public function buildForm()
    {
        $this
            ->setupModel(new Testimonial)
            ->setValidatorClass(TestimonialRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('position', 'text', [
                'label'      => trans('Position'),
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
            ->add('image', 'mediaImage', [
                'label' => __('Image'),
                'label_attr' => ['class' => 'control-label'],
            ])
            ->setBreakFieldPoint('status');
    }
}
