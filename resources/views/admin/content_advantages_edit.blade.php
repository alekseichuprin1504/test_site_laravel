<div class="wrapper container-fluid">
    <div class="blocktext" align="center">
      
    </div>
<form action="{{ route('admin_store_edit_advantages', ['advantage_id'=>$advantage->id]) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        
                            <div class="form-group">
                                <label>Имя</label>
                                <input type="text" name="name" value="{{$advantage->name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <div col-xs-8>
                                <label class="col-xs-2 control-label">Текст</label>
                                <input type="text" name="text" value="{{$advantage->text}}" class="form-control">
                                </div>
                            </div>
                            
                            
                            
                            <div>
                                <p>Загрузить изображение</p>
                                <input type="file" name="logo" placeholder="" value="">
                            </div>

                        
                            <input type="submit" class="btn btn-primary" value="Save">
                        
                    </form>


                    <li><a  href="{{route('admin')}}">
          <h5>Назад к панеле администратора</h5>
          </a>
        </li>
</div>