<?php

namespace Botble\Campaigns\Http\Controllers;

use Botble\Base\Events\BeforeEditContentEvent;
use Botble\Campaigns\Http\Requests\CampaignsRequest;
use Botble\Campaigns\Repositories\Interfaces\CampaignsInterface;
use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Botble\Campaigns\Tables\CampaignsTable;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Campaigns\Forms\CampaignsForm;
use Botble\Base\Forms\FormBuilder;

class CampaignsController extends BaseController
{
    /**
     * @var CampaignsInterface
     */
    protected $campaignsRepository;

    /**
     * @param CampaignsInterface $campaignsRepository
     */
    public function __construct(CampaignsInterface $campaignsRepository)
    {
        $this->campaignsRepository = $campaignsRepository;
    }

    /**
     * @param CampaignsTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(CampaignsTable $table)
    {
        page_title()->setTitle(trans('plugins/campaigns::campaigns.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/campaigns::campaigns.create'));

        return $formBuilder->create(CampaignsForm::class)->renderForm();
    }

    /**
     * @param CampaignsRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(CampaignsRequest $request, BaseHttpResponse $response)
    {
        $campaigns = $this->campaignsRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(CAMPAIGNS_MODULE_SCREEN_NAME, $request, $campaigns));

        $string = str_replace(' ', '-', $campaigns->name); // Replaces all spaces with hyphens.

        $campaigns->slug = preg_replace('/[^\x{0600}-\x{06FF}A-Za-z\- %^&*()]/u', '', $string);//preg_replace('/[^A-Za-z0-9\-]/', '', $string);


        $campaigns->save();

        return $response
            ->setPreviousUrl(route('campaigns.index'))
            ->setNextUrl(route('campaigns.edit', $campaigns->id))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    /**
     * @param $id
     * @param Request $request
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function edit($id, FormBuilder $formBuilder, Request $request)
    {
        $campaigns = $this->campaignsRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $campaigns));

        page_title()->setTitle(trans('plugins/campaigns::campaigns.edit') . ' "' . $campaigns->name . '"');

        return $formBuilder->create(CampaignsForm::class, ['model' => $campaigns])->renderForm();
    }

    /**
     * @param $id
     * @param CampaignsRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, CampaignsRequest $request, BaseHttpResponse $response)
    {
        $campaigns = $this->campaignsRepository->findOrFail($id);

        $campaigns->fill($request->input());

        $this->campaignsRepository->createOrUpdate($campaigns);

        event(new UpdatedContentEvent(CAMPAIGNS_MODULE_SCREEN_NAME, $request, $campaigns));


        $string = str_replace(' ', '-', $campaigns->name); // Replaces all spaces with hyphens.

        $campaigns->slug = preg_replace('/[^\x{0600}-\x{06FF}A-Za-z\- %^&*()]/u', '', $string);//preg_replace('/[^A-Za-z0-9\-]/', '', $string);


        $campaigns->save();

        return $response
            ->setPreviousUrl(route('campaigns.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    /**
     * @param $id
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function destroy(Request $request, $id, BaseHttpResponse $response)
    {
        try {
            $campaigns = $this->campaignsRepository->findOrFail($id);

            $this->campaignsRepository->delete($campaigns);

            event(new DeletedContentEvent(CAMPAIGNS_MODULE_SCREEN_NAME, $request, $campaigns));

            return $response->setMessage(trans('core/base::notices.delete_success_message'));
        } catch (Exception $exception) {
            return $response
                ->setError()
                ->setMessage($exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     * @throws Exception
     */
    public function deletes(Request $request, BaseHttpResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response
                ->setError()
                ->setMessage(trans('core/base::notices.no_select'));
        }

        foreach ($ids as $id) {
            $campaigns = $this->campaignsRepository->findOrFail($id);
            $this->campaignsRepository->delete($campaigns);
            event(new DeletedContentEvent(CAMPAIGNS_MODULE_SCREEN_NAME, $request, $campaigns));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
