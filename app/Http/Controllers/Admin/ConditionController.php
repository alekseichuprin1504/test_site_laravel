<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Condition;
use App\Http\Requests\ConditionRequest;

class ConditionController extends Controller
{

	private $condition;

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
        $condition = new Condition();
        $condition->fill($input);

        if($condition->save()){
            return redirect('admin')->with('status', 'Условие проката добавлена');
        }
    }

    /**
     * Show the form for editing the specified condition.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
    	$condition = Condition::find($id);
        $data = ['title' => 'Редактирование страницы - "Условия проката"','condition' => $condition];
        return view('admin.condition_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ConditionRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store_edit_condition(ConditionRequest $request)
    {
        $condition = $this->condition->where('id', $request->id)->first();
        $condition->id=$request->id;
        $condition->time=$request->time;
        $condition->days=$request->days;
        $condition->price=$request->price;
        $condition->save();
        return redirect('admin/conditions')->with('status', 'Условие обновлено');
    }

    /**
     * Delete the specified condition from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete_condition(Request $request)
    {  
        $condition = $this->condition->where('id', $request->id)->first();
        $condition->delete();
        return redirect('admin/contacts')->with('status', 'Условие удалено');
    }
}
