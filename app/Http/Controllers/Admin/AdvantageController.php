<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advantage;
use Validator;

class AdvantageController extends Controller
{

	private $advantages;

	public function __construct(Advantage $advantages)
	{
		$this->advantages = $advantages;
	}

    /**
     * Display a listing of the advantage pages.
     *
     */
    public function index()
    {
    	$advantages = $this->advantages->get();
        $data = ['title' => 'Преимущества','advantages' => $advantages];
        return view ('admin.advantages', $data);
    }

    /**
     * Show the form for editing the specified advantage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $advantages = $this->advantages->where('id', $id)->first();
        $data = ['title' => 'Редактирование страницы - '. $this->advantages->name,'advantage' => $advantages];
        return view('admin.advantage_edit', $data);
    }

    /**
     * Delete the specified advantage from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_advantages(int $id)
    {
        $advantages = $this->advantages->where('id', $id)->first();
        $advantages->delete();
        return redirect('admin')->with('status', 'преимущество удалено');
    }

    /**
     * Show the form for creating a new advantage.
     *
     * @return \Illuminate\Http\Response
     */
    public function addAdvantages()
    {
        $data = ['title' =>' Добавить новое преимущество'];
        return view('admin.add_advantages', $data);
    }

    /**
     * Store a newly created advantage in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $messages = ['required' => 'Поле :attribute обязательно к заполнению'];
        $validator = Validator::make($data, [
            'name' => 'required|max:255',
            'text' => 'required'
        ], $messages);

        if($validator->fails()){
            return redirect()->route('admin_add_advantages')->withErrors($validator)->withInput();
        }
        if($request->hasFile('logo')){
            $file = $request->file('logo'); 
            $data['logo'] = $file->getClientOriginalName();
            $file->move(public_path().'/assets/img', $data['logo']);
        }

       $advantage = new Advantage();
       $advantage->fill($data);

       if($advantage->save()){
            return redirect('admin')->with('status', 'Преимущество добавлено');
        }
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_edit(Request $request)
    {
        $input = $request->except('_token');
        $advantage = $this->advantages->where('id', $request->id)->first();
        $messages = ['required' => 'Поле :attribute обязательно к заполнению' ];
        $validator = Validator::make($input, [
            'name' => 'required|max:100',
            'text' => 'required'
        ], $messages);

            if($validator->fails()){
            return redirect()->back()->withErrors($validator);
            }
            if($request->hasFile('logo')){
            $file = $request->file('logo');
            $file->move(public_path().'/assets/img', $file->getClientOriginalName());
            $input['logo'] = $file->getClientOriginalName();
            }

        $advantage->fill($input);
            if($advantage->update()){
            return redirect('admin')->with('status', 'Преимущество обновлено');
        }
    }

}