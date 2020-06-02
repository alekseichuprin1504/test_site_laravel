<div class="wrapper container-fluid">
    <div class="blocktext" align="center">
      <h2>{{$title}}</h2>
    </div>
<form action="{{route('admin_store_tour')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        
                            <div class="form-group">
                                <label>Имя</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <div col-xs-8>
                                <label class="col-xs-2 control-label">Описание</label>
                                <input type="text" name="text" class="form-control">
                                </div>
                            </div>
                            <div>
                                <p>Загрузить изображение</p>
                                <input type="file" name="image" placeholder="" value="">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Save">
                        
                    </form>


                    <li><a  href="{{route('admin')}}">
          <h5>Назад к панеле администратора</h5>
          </a>
        </li>
</div>