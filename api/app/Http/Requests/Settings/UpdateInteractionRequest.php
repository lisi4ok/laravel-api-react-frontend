<?php

declare(strict_types=1);

namespace App\Http\Requests\Settings;

use App\Actions\Contact\InteractionValidationRules;
use Illuminate\Foundation\Http\FormRequest;

final class UpdateInteractionRequest extends FormRequest
{
    use InteractionValidationRules;
}
