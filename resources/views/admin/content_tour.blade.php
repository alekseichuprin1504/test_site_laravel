<div style="margin:0px 50px 0px 50px;">

@if($tours)

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
                <th>Фото</th>
                <th>Дата создания</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>

        @foreach($tours as $k => $tour)

        	<tr>

        		<td>{{ $tour->id }}</td>
                <td>{{ $tour->name }}</td>
        		<td>{{ $tour->text }}</td>
        		<td>{{ $tour->image }}</td>
        		<td>{{ $tour->created_at }}</td>
                <td><a href="{{route('admin_edit_tour', ['id'=>$tour->id])}}">Редактировать</a></td>
                <td><form action="{{route('admin_delete_tour', ['tour_id'=>$tour->id])}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-danger" type="submit">Удалить</button>
                        @method('DELETE')
                </form></td>
        	</tr>

        @endforeach






        </tbody>
    </table>
@endif

        <a  href="{{route('admin_add_tour')}}">
          <h5>Добавить новый тур</h5>
          </a>


</div>
