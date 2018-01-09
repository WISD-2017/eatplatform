@extends('layouts.app')

@section('content')
<div>
  

    <form action="#" method="post" class="bootstrap-frm">
        {{ csrf_field() }}
        <div id="main" class="container">
            <h2 id="elements">店家</h2>
                 <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th></th>
                            <th>介紹</th>
                            
                            <th>店家</th>
                            <th>時間</th>
                        </tr>
                        </thead>
                        <tbody>




                        @foreach($stores as $store)
                        <tr>
                            <td><a href="{{route('comment.edit',$comment->id)}}" class="button special">修改</a></td>
                            <td>{{ $store->introduction}}</td>
                             
                            
                            <td>{{ $store-> store}}</td>
                           <td>{{ $store->created_at }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>


                   
                </div>
            </div>
        </div>
    </form>
</div>
@endsection