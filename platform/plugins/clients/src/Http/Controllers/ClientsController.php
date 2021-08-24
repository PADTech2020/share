<?php

namespace Botble\Clients\Http\Controllers;

use Botble\Base\Events\BeforeEditContentEvent;
use Botble\Clients\Http\Requests\ClientsRequest;
use Botble\Clients\Repositories\Interfaces\ClientsInterface;
use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Botble\Clients\Tables\ClientsTable;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Clients\Forms\ClientsForm;
use Botble\Base\Forms\FormBuilder;

class ClientsController extends BaseController
{
    /**
     * @var ClientsInterface
     */
    protected $clientsRepository;

    /**
     * @param ClientsInterface $clientsRepository
     */
    public function __construct(ClientsInterface $clientsRepository)
    {
        $this->clientsRepository = $clientsRepository;
    }

    /**
     * @param ClientsTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(ClientsTable $table)
    {
        page_title()->setTitle(trans('plugins/clients::clients.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/clients::clients.create'));

        return $formBuilder->create(ClientsForm::class)->renderForm();
    }

    /**
     * @param ClientsRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(ClientsRequest $request, BaseHttpResponse $response)
    {
        $clients = $this->clientsRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(CLIENTS_MODULE_SCREEN_NAME, $request, $clients));

        return $response
            ->setPreviousUrl(route('clients.index'))
            ->setNextUrl(route('clients.edit', $clients->id))
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
        $clients = $this->clientsRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $clients));

        page_title()->setTitle(trans('plugins/clients::clients.edit') . ' "' . $clients->name . '"');

        return $formBuilder->create(ClientsForm::class, ['model' => $clients])->renderForm();
    }

    /**
     * @param $id
     * @param ClientsRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, ClientsRequest $request, BaseHttpResponse $response)
    {
        $clients = $this->clientsRepository->findOrFail($id);

        $clients->fill($request->input());

        $this->clientsRepository->createOrUpdate($clients);

        event(new UpdatedContentEvent(CLIENTS_MODULE_SCREEN_NAME, $request, $clients));

        return $response
            ->setPreviousUrl(route('clients.index'))
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
            $clients = $this->clientsRepository->findOrFail($id);

            $this->clientsRepository->delete($clients);

            event(new DeletedContentEvent(CLIENTS_MODULE_SCREEN_NAME, $request, $clients));

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
            $clients = $this->clientsRepository->findOrFail($id);
            $this->clientsRepository->delete($clients);
            event(new DeletedContentEvent(CLIENTS_MODULE_SCREEN_NAME, $request, $clients));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
