<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Validators\MyValidator;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    /**
     * @var Contact
     */
	private $contacts;

    /**
     * ContactController constructor.
     * @param Contact $contacts
     */
	public function __construct(Contact $contacts)
	{
		$this->contacts = $contacts;
	}

    /**
     * Display a listing of the contact pages.
     *
     */
    public function index()
    {
    	$contacts = $this->contacts->get();
        $data = ['title' => 'Контакты','contacts' => $contacts];

        return view ('admin.contacts', $data);
    }

    /**
     * Show the form for creating a new contact.
     *
     * @return \Illuminate\Http\Response
     */
    public function addContacts()
    {
    	$data = ['title' =>' Добавить новый контакт'];

        return view('admin.add_contacts', $data);
    }

    /**
     * Store a newly created contact in storage.
     *
     * @param  \App\Http\Requests\ContactRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $input = $request->except('_token');
        $this->contacts->create($input);

        return redirect('admin')->with('status', 'Страница добавлена');

    }

    /**
     * Show the form for editing the specified contact.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $contact = Contact::find($id);
        $data = ['title' => 'Редактирование страницы - '. $contact->name,'contact' => $contact];

        return view('admin.contact_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeEditContact(Request $request)
    {
        $contact = $this->contacts->where('id', $request->id)->first();
        $contact->id=$request->id;
        $contact->name=$request->name;
        $contact->contacts=$request->contacts;
        $contact->save();

        return redirect('admin')->with('status', 'Контакт обновлен');
    }

    /**
     * Delete the specified contact from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteContact(Request $request)
    {
        $contact = $this->contacts->where('id', $request->id)->first();
        $contact->delete();
        return redirect('admin/contacts')->with('status', 'Контакт удален');
    }
}

