<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Dto\Interaction as InteractionDto;
use App\Http\Requests\StoreInteractionRequest;
use App\Http\Requests\UpdateInteractionRequest;
use App\Http\Resources\InteractionResource;
use App\Services\InteractionService;

final class InteractionController extends Controller
{
    public function __construct(protected InteractionService $interactionService)
    {
    }

    public function index()
    {
        return InteractionResource::collection($this->interactionService->getAll());
    }

    public function store(StoreInteractionRequest $request)
    {
        $data = $request->validated();
        $data['timestamp'] = now();
        $dto = InteractionDto::fromArray($data);
        $interaction = $this->interactionService->create($dto);

        return new InteractionResource($interaction);
    }

    public function update(UpdateInteractionRequest $request, $id)
    {
        $data = $request->validated();
        $data['timestamp'] = now();
        $dto = InteractionDto::fromArray($data);
        $interaction = $this->interactionService->update($id, $dto);

        return new InteractionResource($interaction);
    }

    public function destroy($id)
    {
        $deleted = $this->interactionService->delete($id);

        if (! $deleted) {
            response()->json([
                'status' => true,
                'message' => 'Something was wrong',
            ], 500);
        }

        return response()->json([
            'status' => true,
            'message' => 'Interaction deleted successfully',
        ], 204);
    }
}
