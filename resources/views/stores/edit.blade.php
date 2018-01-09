@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">
                    編輯店家介紹
                </h1>
                <form action="/stores/{{$store->id}}" method="POST" role="form">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group">
                        <label>店家名稱：</label>
                        <input name="store" class="form-control" placeholder="請輸入店家名稱" value="{{$store->store}}">
                    </div>
                    <div class="form-group">
                        <label>店家地址：</label>
                        <input name="address" class="form-control" placeholder="請輸入店家地址" value="{{$store->address}}">
                    </div>
                    <div class="form-group">
                        <label>店家電話：</label>
                        <input name="telephone" class="form-control" placeholder="請輸入店家電話" value="{{$store->telephone}}">
                    </div>
                    <div class="form-group">
                        <label>店家介紹：</label>
                        <textarea name="introduction" class="form-control" rows="10">{{$store->introduction}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>美食分類？</label>
                        <select name="type" class="form-control">
                            <option value="0"{{ $store->type?'':'SELECTED' }}>中式</option>
                            <option value="1" {{ $store->type?'SELECTED':'' }}>西式</option>
                        </select>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">更新</button>
                    </div>
                </form>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection