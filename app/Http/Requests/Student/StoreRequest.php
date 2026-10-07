<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function attributes()
{
    return [
        'nis'    => 'Nomor Induk Siswa',
        'name'   => 'Nama Lengkap',
        'gender' => 'Jenis Kelamin',
        'class'  => 'Kelas',
        'major'  => 'Jurusan'
    ];
}

    public function rules(): array
    {
        return [
            'nis'    => ['required', 'string', 'size:4', 'unique:students,nis'],
            'name'   => ['required', 'string'],
            'gender' => ['required', 'string', 'in:Laki-laki,Perempuan'],
            'major'  => ['required', 'string', 'in:AKL,TKJ,BiD'],
            'class'  => ['required', 'string']
        ];
    }

    public function messages()
    {
        return [
            'nis.required' => 'Nomor Induk Siswa wajib diisi',
            'nis.size'     => 'Nomor Induk Siswa harus terdiri dari 4 karakter'
        ];
    }
}

