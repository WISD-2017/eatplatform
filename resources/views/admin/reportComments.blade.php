@extends('layouts.app')

@section('content')
<div>
  

    <form action="#" method="post" class="bootstrap-frm">
        {{ csrf_field() }}
        <div id="main" class="container">
            <h2 id="elements">評論</h2>
                 <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th></th>
							<th>會員</th>
                            <th>評論</th>
                            
                            <th>店家</th>
                            <th>時間</th>
                        </tr>
                        </thead>
                        <tbody>




                        @foreach($comments as $comment)
                        <tr>
                            <td><a href="{{route('comment.edit',$comment->id)}}" class="button special">修改</a></td>
                            <td>{{ $comment->content}}</td>
                             <td>{{ $comment->member_id}}</td>
                            
                            <td>{{ $comment-> store_id}}</td>
                           <td>{{ $comment->created_at }}</td>
						   
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