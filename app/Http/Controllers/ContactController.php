<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\SearchRequest;


class ContactController extends Controller
{
    //
    public function index(Request $request)
    {
        return view ('index');
    }
    public function check(ContactRequest $request)
    {
        $form = $request->only('lastname', 'firstname', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion');

        $request->merge(['fullname' => 'lastname'.'firstname']);

        return view ('check', compact('form'));
    }

    public function create(Request $request) {
        // 戻るボタンが押された場合
        if ($request->get('back')) {
            return redirect('/')->withInput();
        }

        // 登録処理・・・・
        if($request->get('submit')){
            $form = [
                'fullname' => $request->lastname." ".$request->firstname,
                'gender' => $request->gender,
                'email' => $request->email,
                'postcode' => $request->postcode,
                'address' => $request->address,
                'building_name' => $request->building_name,
                'opinion' => $request->opinion,
            ];

            Contact::create($form);
            return view('contact-close');
        }
    }

    public function find()
    {
        $contacts = Contact::Paginate(10);
        return view('search', ['contacts' => $contacts]);
    }

    public function search(Request $request)
    {
        if ($request->get('reset')) {
            $request -> request -> remove('key');
            return redirect()->route('contact.find');
        }
        $name = $request['name'];
        $gender = $request['gender'];
        $date_start = $request -> date('date_start');
        $date_end = $request['date_end'];
        $email = $request['email'];
        
        $contacts = Contact::doSearch($name, $gender, $date_start, $date_end, $email);

        return view('search', ['contacts' => $contacts]);
    }

    public function delete(Request $request)
    {
        $contact = Contact::find($request->id);
        $contact->delete();
        return back();
    }



}
