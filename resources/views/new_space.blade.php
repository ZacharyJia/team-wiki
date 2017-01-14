@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">创建新空间</div>

                <div class="panel-body">
                    <form role="form" action="/space/create" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="space-name">名称</label>
                            <input type="text" class="form-control" id="space-name" placeholder="请输入空间名称" name="name">
                        </div>
                        <button type="submit" class="btn btn-primary">创建</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection