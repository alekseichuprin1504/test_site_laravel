<div class="wrapper container-fluid">
    <div class="blocktext" align="center">
      
    </div>
<form action="{{route('admin_store_edit_contact',['id'=>$contact->id])}}" method="post">
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                                <input type="hidden" name="id" value="{{$contact->id}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Имя</label>
                                <input type="text" name="name" value="{{$contact->name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <div col-xs-8>
                                <label class="col-xs-2 control-label">Контакты</label>
                                <input type="text" name="contacts" value="{{$contact->contacts}}" class="form-control">
                                </div>
                            </div>
                        
                            <input type="submit" class="btn btn-primary" value="Save">
                        
                    </form>


                    <li><a  href="{{route('admin')}}">
          <h5>Назад к панеле администратора</h5>
          </a>
        </li>
</div>