<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{

    public $lastname;
    public $firstname;
    public $gender;
    public $email;
    public $address1;
    public $address2;
    public $opinion;

    protected  $rules = [

        'lastname' => 'required',
        'firstname' => 'required',
        'gender' => 'required',
        'email'=> 'required|email',
        'address1'=> 'required|regex:/^[0-9]{3}-[0-9]{4}$/',
        'address2'=> 'required',
        'opinion'=> 'required|max:120',
    ];

    protected $message = [
        'lastname.required' => '姓を入力してください',
        'firstname.required' => '名を入力してください',
        'email.required' => 'メールアドレスを入力してください',
        'email.email' => 'メールアドレスの形式で入力してください',
        'address1.required' => '郵便番号を入力してください',
        'address1.regex' => '郵便番号の形式で入力してください',
        'address2.required' => '住所を入力してください',
        'opinion.required' => 'ご意見を入力してください',
        'opinion.max' => '120文字以内で入力してください',
    ];


    public function submit()
    {
        $this->validate();

        // バリデーション失敗の場合、ここまで実行されない

        Contact::create([
            'lastname' => $this->lastname,
        ]);
    }


    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function saveContact()  
    {
        $validatedData = $this->validate();

        Contact::create($validatedData);
    }

public function render()
    {
        return view('index');
    }
}
