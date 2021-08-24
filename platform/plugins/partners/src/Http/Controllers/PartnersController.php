<?php

namespace Botble\Partners\Http\Controllers;

use Botble\Base\Events\BeforeEditContentEvent;
use Botble\Partners\Http\Requests\PartnersRequest;
use Botble\Partners\Repositories\Interfaces\PartnersInterface;
use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Botble\Partners\Tables\PartnersTable;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Partners\Forms\PartnersForm;
use Botble\Base\Forms\FormBuilder;

class PartnersController extends BaseController
{
    /**
     * @var PartnersInterface
     */
    protected $partnersRepository;

    /**
     * @param PartnersInterface $partnersRepository
     */
    public function __construct(PartnersInterface $partnersRepository)
    {
        $this->partnersRepository = $partnersRepository;
    }

    /**
     * @param PartnersTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(PartnersTable $table)
    {
        page_title()->setTitle(trans('plugins/partners::partners.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/partners::partners.create'));

        return $formBuilder->create(PartnersForm::class)->renderForm();
    }

    /**
     * @param PartnersRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(PartnersRequest $request, BaseHttpResponse $response)
    {
        $partners = $this->partnersRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(PARTNERS_MODULE_SCREEN_NAME, $request, $partners));

        return $response
            ->setPreviousUrl(route('partners.index'))
            ->setNextUrl(route('partners.edit', $partners->id))
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
        $partners = $this->partnersRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $partners));

        page_title()->setTitle(trans('plugins/partners::partners.edit') . ' "' . $partners->name . '"');

        return $formBuilder->create(PartnersForm::class, ['model' => $partners])->renderForm();
    }

    /**
     * @param $id
     * @param PartnersRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, PartnersRequest $request, BaseHttpResponse $response)
    {
        $partners = $this->partnersRepository->findOrFail($id);

        $partners->fill($request->input());

        $this->partnersRepository->createOrUpdate($partners);

        event(new UpdatedContentEvent(PARTNERS_MODULE_SCREEN_NAME, $request, $partners));

        return $response
            ->setPreviousUrl(route('partners.index'))
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
            $partners = $this->partnersRepository->findOrFail($id);

            $this->partnersRepository->delete($partners);

            event(new DeletedContentEvent(PARTNERS_MODULE_SCREEN_NAME, $request, $partners));

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
            $partners = $this->partnersRepository->findOrFail($id);
            $this->partnersRepository->delete($partners);
            event(new DeletedContentEvent(PARTNERS_MODULE_SCREEN_NAME, $request, $partners));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
