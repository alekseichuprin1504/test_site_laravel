<div style="margin:0px 50px 0px 50px;">   

@if($advantages)
 
    <div class="blocktext" align="center">
      <h2>{{$title}}</h2>
    </div>

        <li><a  href="{{route('admin')}}">
          <h5>Назад к панеле администратора</h5>
          </a>
        </li>


	<table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>№</th>
                <th>Имя</th>
                <th>Текст</th>
                <th>Лого</th>
                <th>Дата создания</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($advantages as $k => $advantage)
        
        	<tr>
        	
        		<td>{{ $advantage->id }}</td>
                
        		<td>{{ $advantage->name }}</td>
        		<td>{{ $advantage->text }}</td>
        		<td>{{ $advantage->logo }}</td>
        		<td>{{ $advantage->created_at }}</td>
                <td><a href="{{route('admin_edit_advantages', ['advantage'=>$advantage->id])}}">Редактировать</a></td>
                <td><form action="{{route('admin_delete_advantages', ['advantage_id'=>$advantage->id])}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-danger" type="submit">Удалить</button>
                </form></td>
        	</tr>
        
        @endforeach


       

        
		
        </tbody>
    </table>
@endif 

        <a  href="{{route('admin_add_advantages')}}">
          <h5>Добавить новое преимущество</h5>
          </a>
        

</div>