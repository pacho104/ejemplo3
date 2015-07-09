{!!Form::open(['route'=> ['admin.users.destroy',$user],'method'=>'DELETE'])!!}
{!!Form::submit('Eliminar Usuario',['class'=>'btn btn-danger','style'=>'margin-right: 15px;','onclick'=>'return confirm("Esta Seguro De Eliminar El Registro")']) !!}
{!!Form::close()!!}