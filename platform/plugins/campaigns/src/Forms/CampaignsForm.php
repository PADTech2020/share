<?php

namespace Botble\Campaigns\Forms;

use Botble\Base\Facades\AssetsFacade;
use Botble\Base\Forms\FormAbstract;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Supports\Assets;
use Botble\Campaigns\Http\Requests\CampaignsRequest;
use Botble\Campaigns\Models\Campaigns;

class CampaignsForm extends FormAbstract
{

    /**
     * {@inheritDoc}
     */
    public function buildForm()
    {
//        AssetsFacade::addScripts(['input-mask']);

        $this
            ->setupModel(new Campaigns)
            ->setValidatorClass(CampaignsRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('summary', 'textarea', [
                'label'      =>__('Summary'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [

                    'data-counter' => 250,
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
            ->add('donation_total', 'text', [
                'label'      => __('Donation Total'),
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'id'    => 'field_name',
                    'class' => 'form-control input-mask-number',
                ],
            ])
            ->add('donation_goal', 'text', [
                'label'      => __('Donation Goal'),
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'id'    => 'field_name',
                    'class' => 'form-control input-mask-number',
                ],
            ])
            ->add('seo_title', 'text', [
                'label'      => trans('SEO Title'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [

                ],
            ])
            ->add('seo_description', 'textarea', [
                'label'      =>__('SEO Description'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [


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
