@extends('layouts.master')
 
@section('content')

    <div class="container">
        <div class="card">
            <h1> {{$data['award_name']}}</h1>
            
        </div>
        <div class="comments">
            <div class="comments show">
            </div>
            <div class= "comments write">
                <form name="comment" action="{{'/awards/'}}{{$data->id}}" method="post">
                  <p>
                    <label>Имя:</label>
                    <input type="text" name="name" />
                  </p>
                  <p>
                    <label>Комментарий:</label>
                    <br />
                    <textarea name="text_comment" cols="30" rows="1"></textarea>
                  </p>
                  <p>
                    <input type="hidden" name="page_id" value="150" />
                    <input type="submit" value="Отправить" />
                  </p>
                </form>
            </div>
        </div>


    </div>

@endsection