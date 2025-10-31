<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Actions\Interaction\InteractionValidationRules;
use Illuminate\Foundation\Http\FormRequest;

final class UpdateInteractionRequest extends FormRequest
{
    use InteractionValidationRules;
}
