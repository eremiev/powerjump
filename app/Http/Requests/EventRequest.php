<?php

namespace App\Http\Requests;

class EventRequest extends Request
{
    /**
     * Rules used for creating new User.
     *
     * @var array
     */
    protected $storeRules = [
        'date' => 'required|date',
        'projects' => 'exists:projects,id',
        'file' => 'required|image'
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch (true) {
            case $this->wantsToList():
            case $this->wantsToShow():
                $rules['with'] = 'relations:translation,translations,photos';
                break;
            case $this->wantsToStore();
                $rules = $this->storeRules;
                break;
            default:
                $rules = [];
        }

        return $rules;
    }
}
