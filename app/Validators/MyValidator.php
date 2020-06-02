<?php

namespace App\Validators;

use Illuminate\Http\Request;
use Validator;
use App\Models\Contact;



class MyValidator{

	private $contacts;

	public function __construct(Contact $contacts)
	{
		$this->contacts = $contacts;
	}


	public function func()
	{
		$input = $this->contacts->ff();
dd($input);
	}

	public function getVal(){


		$input = $this->contacts;
dd($input);
	$messages = [
                        'required' => 'Поле :attribute обязательно к заполнению'
                    ];


        $validator = Validator::make($input, [
            'name' => 'required|max:100',
            'contacts' => 'required'
        ], $messages);

        if($validator->fails()){
            return redirect()->route('admin_add_contacts')->withErrors($validator)->withInput();// withErrors - сохр в сессию инфо об ошибках. withInput - сохр в сессию инфо кот были добавлены в поля формы
        }
    //     if($request->hasFile('logo')){// проверяет загружаетсяя ли файл на сервер
    //             $file = $request->file('logo');//В $file сохраним обьект класса uploaded file, для конкертно загруженного файла. метод файл возвращает обьект спец класса uploaded file, кот исп-ся для работы с загр файлами. 
    //             $input['logo'] = $file->getClientOriginalName();
    //             $file->move(public_path().'/assets/img', $input['logo']);// копирование файлов. move - перемещает файл из временной директории в определенный каталог
    // }

       // $advantage = new Advantage();
       
       //      $advantage->fill($input);

       //      if($advantage->save()){
       //          return redirect('admin')->with('status', 'Страница добавлена');
       //      }
}

}