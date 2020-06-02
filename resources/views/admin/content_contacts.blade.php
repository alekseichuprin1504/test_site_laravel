<div style="margin:0px 50px 0px 50px;">   

@if($contacts)
 
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
                <th>Контакты</th>
                <th>Дата создания</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($contacts as $contact)
        
        	<tr>
        	
        		<td>{{ $contact->id }}</td>
                
        		<td>{{ $contact->name }}</td>
        		<td>{{ $contact->contacts }}</td>
        		<td>{{ $contact->created_at }}</td>
                <td><a href="{{route('admin_edit_contact', ['id_contact'=>$contact->id])}}">Редактировать</a></td>
                <td><form action="{{route('admin_delete_contact',['id'=>$contact->id])}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-danger" type="submit">Удалить</button>
                </form></td>
        	</tr>
        
        @endforeach


       

        
		
        </tbody>
    </table>
@endif 

        <a  href="{{route('admin_add_contacts')}}">
          <h5>Добавить новый контакт</h5>
          </a>
        

</div>