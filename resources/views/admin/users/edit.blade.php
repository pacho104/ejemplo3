@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Usuario: {{$user->first_name}}</div>
                    <div class="panel-body">
                        @include('admin.partials.messages')
                        {!!Form::model($user,['route' => ['admin.users.update', $user],'method'=>'PUT'])!!}
                        @include('admin.users.partials.fields')
                        {!!Form::submit('Editar Usuario',['class'=>'btn btn-primary','style'=>'margin-right: 15px;'])
                        !!}
                        {!!Form::close()!!}
                    </div>
                </div>
                @include('admin.users.partials.delete')
            </div>
        </div>
    </div>
@endsection
