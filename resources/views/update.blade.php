@extends('layout')

@section('content')


    <duv class="container">

        <br/>
        <div class="row" style="margin-bottom: 120px;margin-top: 120px">
            <div class="col-sm-4 offset-sm-4"  >

                <form action="{{route('todo.save',['id'=>$todo->id])}}" method="post">

                    {{csrf_field()}}
                    <input type="text" class="form-control input-lg" name="todo" value="{{$todo->todo}}" placeholder="Update Todo"></inpu>
                </form>
            </div>

        </div>








    </duv>







@stop