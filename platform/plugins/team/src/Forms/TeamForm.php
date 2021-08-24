<?php

namespace Botble\Team\Forms;

use Botble\Base\Forms\FormAbstract;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Team\Http\Requests\TeamRequest;
use Botble\Team\Models\Team;

class TeamForm extends FormAbstract
{

    /**
     * {@inheritDoc}
     */
    public function buildForm()
    {
        $this
            ->setupModel(new Team)
            ->setValidatorClass(TeamRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label' => trans('plugins/team::team.fname'),
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [

                    'data-counter' => 120,
                ],
            ])
            ->add('position', 'text', [
                'label' => trans('plugins/team::team.position'),
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [

                    'data-counter' => 120,
                ],
            ])
            ->add('phone', 'text', [
                'label' => trans('plugins/team::team.phone'),
                'label_attr' => ['class' => 'control-label '],
                'attr' => [

                    'data-counter' => 120,
                ],
            ])
            ->add('email', 'text', [
                'label' => trans('plugins/team::team.email'),
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [

                    'data-counter' => 120,
                ],
            ])
            ->add('summary', 'editor', [
                'label' => __('summary'),
                'label_attr' => ['class' => 'control-label'],
                'attr' => [
                    'with-short-code' => false, // if true, it will add a button to select shortcode
                    'without-buttons' => false, // if true, all buttons will be hidden
                ],
            ])
            ->add('facebook', 'text', [
                'label' => trans('plugins/team::team.facebook'),
                'label_attr' => ['class' => 'control-label '],
                'attr' => [
                    'data-counter' => 120,
                ],
            ])
            ->add('twitter', 'text', [
                'label' => trans('plugins/team::team.twitter'),
                'label_attr' => ['class' => 'control-label '],
                'attr' => [
                    'data-counter' => 120,
                ],
            ])
            ->add('instagram', 'text', [
                'label' => trans('plugins/team::team.instagram'),
                'label_attr' => ['class' => 'control-label '],
                'attr' => [
                    'data-counter' => 120,
                ],
            ])
            ->add('status', 'select', [
                'label' => trans('plugins/team::team.status'),
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'class' => 'form-control select-full',
                ],
                'choices' => [
                    1 => trans('plugins/team::team.activated'),
                    0 => trans('plugins/team::team.deactivated'),
                ],
            ])
            ->add('text_bg', 'mediaImage', [
                'label' => __('Text Background'),
                'label_attr' => ['class' => 'control-label'],
            ])
            ->add('image', 'mediaImage', [
                'label' => __('Image'),
                'label_attr' => ['class' => 'control-label'],
            ])
            ->setBreakFieldPoint('status');
    }
}
