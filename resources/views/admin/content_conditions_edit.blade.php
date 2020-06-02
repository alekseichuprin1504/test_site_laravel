<div class="wrapper container-fluid">
    <div class="blocktext" align="center">
      
    </div>
<form action="{{route('admin_store_edit_condition',['id'=>$condition->id])}}" method="post">
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                                <input type="hidden" name="id" value="{{$condition->id}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Время</label>
                                <input type="text" name="time" value="{{$condition->time}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <div col-xs-8>
                                <label class="col-xs-2 control-label">День</label>
                                <input type="text" name="days" value="{{$condition->days}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div col-xs-8>
                                <label class="col-xs-2 control-label">Цена</label>
                                <input type="text" name="price" value="{{$condition->price}}" class="form-control">
                                </div>
                            </div>
                        
                            <input type="submit" class="btn btn-primary" value="Save">
                        
                    </form>


                    <li><a  href="{{route('admin')}}">
          <h5>Назад к панеле администратора</h5>
          </a>
        </li>
</div>