@extends('layout')

@section('content')




    <duv class="container">

        <br/>
        <div class="row" style="margin-bottom: 120px;margin-top: 120px">
            <div class="col-sm-4 offset-sm-4">

                <form action="/create/todo" method="post">

                    {{csrf_field()}}
                    <input type="text" class="form-control input-lg" name="todo" placeholder="Create New Todo"></input>
                </form>
            </div>

        </div>


        <div class="row">

            <div class="col-sm-8 offset-sm-2">
                @foreach($todos as $todo)
                    {{$todo->todo}}
                    <a href="{{route('todo.delete',['id' => $todo->id])}}" class="btn btn-danger" style="color: white">
                        x </a>
                    <a href="{{route('todo.update',['id' => $todo->id])}}" class="btn btn-success" style="color: white">update</a>

                    @if(!$todo->completed)
                        <a href="{{route('todo.completed',['id' => $todo->id])}}" class="btn btn-info" style="color: white">mark as completed</a>

                        @else

                        <span style="font-size:21px" class="text-success">Completed</span>

                    @endif

                    <hr/>
                @endforeach
            </div>

        </div>


    </duv>







@stop