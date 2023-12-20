<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class reservationRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "first_name"    => "required",
            "last_name"     => "required",
            "nationality"   => "required",
            "id_code"       => "required",
            "mobile"        => "required",
            "room_number"   => "required",
            "room_type"     => "required"
        ];
    }
}
