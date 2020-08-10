<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Condition;
use App\Http\Requests\ConditionRequest;

class ConditionController extends Controller
{
    /**
     * @var Condition
     */
    private $condition;

    /**
     * ConditionController constructor.
     * @param Condition $condition
     */
	public function __construct(Condition $condition)
	{
		$this->condition = $condition;
	}

    /**
     * Display a listing of the condition pages.
     *
     */
    public function index()
    {
    	$conditions = $this->condition->get();
        $data = ['title' => 'Условия проката','conditions' => $conditions];

        return view('admin.condition', $data);
    }

    /**
     * Show the form for creating a new condition.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCondition()
    {
    	$data = ['title' =>' Добавить новое условие проката'];

        return view('admin.add_condition', $data);
    }

    /**
     * Store a newly created condition in storage.
     *
     * @param  \App\Http\Requests\ConditionRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConditionRequest $request)
    {
    	$input = $request->except('_token');
        $this->condition->create($input);

        return redirect('admin')->with('status', 'Условие проката добавлена');

    }

    /**
     * @param ConditionRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(ConditionRequest $request)
    {
        $condition = $this->condition->where('id', $request->id)->first();
        $data = ['title' => 'Редактирование страницы - "Условия проката"','condition' => $condition];

        return view('admin.condition_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ConditionRequest $request
     * @return \Illuminate\Http\Response
     */
    public function storeEditCondition(ConditionRequest $request)
    {
        $condition = $this->condition->where('id', $request->id)->first();
        $condition->id = $request->id;
        $condition->time = $request->time;
        $condition->days = $request->days;
        $condition->price = $request->price;
        $condition->save();

        return redirect('admin/conditions')->with('status', 'Условие обновлено');
    }

    /**
     * Delete the specified condition from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function deleteCondition(Request $request)
    {
        $condition = $this->condition->where('id', $request->id)->first();
        $condition->delete();

        return redirect('admin/contacts')->with('status', 'Условие удалено');
    }
}
