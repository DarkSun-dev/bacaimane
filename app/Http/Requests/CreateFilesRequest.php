<?php

namespace App\Http\Requests;

use App\FileType;
use App\Repositories\CustomFieldRepository;
use Illuminate\Foundation\Http\FormRequest;

class CreateFilesRequest extends FormRequest
{
    /** @var CustomFieldRepository $customFieldRepository */
    private $customFieldRepository;

    /**
     * CreateFilesRequest constructor.
     * @param CustomFieldRepository $customFieldRepository
     */
    public function __construct(CustomFieldRepository $customFieldRepository)
    {
        parent::__construct();
        $this->customFieldRepository = $customFieldRepository;
    }

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
        $customFields = $this->customFieldRepository->getForModel('files');
        $filesTypes = FileType::all();
        $filesData = $this->all('files')['files'] ?? [];
        $rules = [
            'files' => 'required|array|min:1',
            'files.*.name' => 'required',
            'files.*.file' => 'required',
            'files.*.file_type_id' => 'required|numeric',
        ];
        //custom fields validation.
        foreach ($customFields as $customField) {
            $rules["files.*.custom_fields.$customField->name"] = $customField->validation ?? 'nullable';
        }
        //file validation based on type
        foreach ($filesData as $i => $fileData) {
            $fileType = $filesTypes->where('id',$fileData['file_type_id'])->first();
            if($fileType)
                $rules["files.$i.file"] = "required|" . $fileType->file_validations . "|max:" . ($fileType->file_maxsize * 1024);
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'required' => 'Este campo é obrigatório.',
            'numeric' => 'Este campo deve ser um número.',
            'max' => [
                'file' => 'Arquivo grande, este arquivo deve ser menor que: maximo em kilobytes.',
            ],
            'size' => [
                'file' => 'Arquivo grande, este arquivo deve ser menor que: tamanho em kilobytes.',
            ],
            'mimes' => 'Este arquivo deve ser do tipo: :valores.',
            'uploaded' => 'Falha ao enviar este ficheiro.',
        ];
    }
}
