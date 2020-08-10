<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Http\Requests\AdvantageRequest;
use Validator;

class AdvantageController extends Controller
{
    /**
     * @var Advantage
     */
	private $advantages;

    /**
     * AdvantageController constructor.
     * @param Advantage $advantages
     */
	public function __construct(Advantage $advantages)
	{
		$this->advantages = $advantages;
	}

    /**
     * Display a listing of the advantage pages.
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
    public function deleteAdvantages(int $id)
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
     * @param AdvantageRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(AdvantageRequest $request)
    {
        $data = $request->all();
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $data['logo'] = $file->getClientOriginalName();
            $file->move(public_path().'/assets/img', $data['logo']);
        }
        $this->advantages->create($data);

        return redirect('admin')->with('status', 'Преимущество добавлено');
}

    /**
     * @param AdvantageRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeEdit(AdvantageRequest $request)
    {
        $input = $request->except('_token');
        $advantage = $this->advantages->where('id', $request->id)->first();
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $file->move(public_path() . '/assets/img', $file->getClientOriginalName());
            $input['logo'] = $file->getClientOriginalName();
        }
        $advantage->fill($input);
        if ($advantage->update()) {
            return redirect('admin')->with('status', 'Преимущество обновлено');
        }
    }

}
