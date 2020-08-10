<div style="margin:0px 50px 0px 50px;">

@if($conditions)

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
                <th>Время</th>
                <th>Дни недели</th>
                <th>Цена</th>
                <th>Дата создания</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>

        @foreach($conditions as $condition)

        	<tr>

        		<td>{{ $condition->id }}</td>
                <td>{{ $condition->time }}</td>
        		<td>{{ $condition->days }}</td>
        		<td>{{ $condition->price }}</td>
        		<td>{{ $condition->created_at }}</td>
                <td><a href="{{route('admin_edit_condition', ['id'=>$condition->id])}}">Редактировать</a></td>
                <td><form action="{{route('admin_delete_condition', ['id'=>$condition->id])}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-danger" type="submit">Удалить</button>
                        @method('DELETE')
                </form></td>
        	</tr>

        @endforeach






        </tbody>
    </table>
@endif

        <a  href="{{route('admin_add_condition')}}">
          <h5>Добавить новое условие проката</h5>
          </a>


</div>
