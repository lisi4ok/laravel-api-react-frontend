<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Actions\Contact\ContactValidationRules;
use Illuminate\Foundation\Http\FormRequest;

final class StoreContactRequest extends FormRequest
{
    use ContactValidationRules;
}
