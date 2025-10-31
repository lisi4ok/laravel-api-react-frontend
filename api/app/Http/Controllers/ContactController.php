<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Dto\Contact as ContactDto;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Http\Resources\ContactResource;
use App\Services\ContactService;

final class ContactController extends Controller
{
    public function __construct(protected ContactService $contactService)
    {
    }

    public function index()
    {
        return ContactResource::collection($this->contactService->getAll());
    }

    public function store(StoreContactRequest $request)
    {
        $dto = ContactDto::fromArray($request->validated());
        $contact = $this->contactService->create($dto);

        return new ContactResource($contact);
    }

    public function update(UpdateContactRequest $request, $id)
    {
        $dto = ContactDto::fromArray($request->validated());
        $contact = $this->contactService->update($id, $dto);

        return new ContactResource($contact);
    }

    public function destroy($id)
    {
        $deleted = $this->contactService->delete($id);

        if (! $deleted) {
            response()->json([
                'status' => true,
                'message' => 'Something was wrong',
            ], 500);
        }

        return response()->json([
            'status' => true,
            'message' => 'Contact deleted successfully',
        ], 204);
    }
}
