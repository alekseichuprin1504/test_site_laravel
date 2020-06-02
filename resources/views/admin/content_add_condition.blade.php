<div class="wrapper container-fluid">
    <div class="blocktext" align="center">
      <h2>{{$title}}</h2>
    </div>
<form action="{{route('admin_store_condition')}}" method="post">
                        {{ csrf_field() }}
                        
                        
                            <div class="form-group">
                                <label>День проката</label>
                                <input type="text" name="days" class="form-control">
                            </div>
                            <div class="form-group">
                                <div col-xs-8>
                                <label class="col-xs-2 control-label">Время проката</label>
                                <input type="text" name="time" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div col-xs-8>
                                <label class="col-xs-2 control-label">Цена</label>
                                <input type="text" name="price" class="form-control">
                                </div>
                            </div>
                            
                            <input type="submit" class="btn btn-primary" value="Save">
                        
                    </form>


                    <li><a  href="{{route('admin')}}">
          <h5>Назад к панеле администратора</h5>
          </a>
        </li>
</div>