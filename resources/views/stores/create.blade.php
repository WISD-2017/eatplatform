@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">
                    新增店家介紹
                </h1>
                <form action="{{route('stores.store')}}" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>店家名稱：</label>
                        <input name="store" class="form-control" placeholder="請輸入店家名稱">
                    </div>
                    <div class="form-group">
                        <label>店家地址：</label>
                        <input name="address" class="form-control" placeholder="請輸入店家地址">
                    </div>
                    <div class="form-group">
                        <label>店家電話：</label>
                        <input name="telephone" class="form-control" placeholder="請輸入店家電話">
                    </div>
                    <div class="form-group">
                        <label>店家介紹：</label>
                        <textarea name="introduction" class="form-control" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>美食分類？</label>
                        <select name="type" class="form-control">
                            <option value="0">中式</option>
                            <option value="1">西式</option>
                        </select>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">新增</button>
                    </div>
                </form>

            </div>
        </div>
        <!-- /.row -->
    </div>


@endsection