<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Actions\Contact\ContactValidationRules;
use Illuminate\Foundation\Http\FormRequest;

final class UpdateContactRequest extends FormRequest
{
    use ContactValidationRules;
}
