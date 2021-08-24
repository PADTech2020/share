<?php

namespace Botble\Projects\Forms;

use Botble\Base\Forms\FormAbstract;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Blog\Forms\Fields\CategoryMultiField;
use Botble\Gallery\Models\Gallery;
use Botble\Projects\Http\Requests\ProjectsRequest;
use Botble\Projects\Models\Category;
use Botble\Projects\Models\Projects;
use Botble\Services\Models\Services;
use Botble\Projects\Forms\Fields\ServicesMultiField;
class ProjectsForm extends FormAbstract
{

    /**
     * {@inheritDoc}
     */
    public function buildForm()
    {
        $galleries=Gallery::getAll();
        $services=Services::getAllLangServices();//get_services_choices();
        $categories=Category::getALl();
        $selectedServices = [];
//        if ($this->getModel()) {
//            $selectedServices = $this->getModel()->servces()->pluck('service_id')->all();
//        }
        if (!$this->formHelper->hasCustomField('servicesMulti')) {
            $this->formHelper->addCustomField('servicesMulti', ServicesMultiField::class);
        }

        $this
            ->setupModel(new Projects)
            ->setValidatorClass(ProjectsRequest::class)
            ->withCustomFields()
            ->add('image', 'mediaImage', [
                'label' => __('Image'),
                'label_attr' => ['class' => 'control-label'],
            ])


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

                    'data-counter' => 150,
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



            ->setBreakFieldPoint('status');
    }
}
