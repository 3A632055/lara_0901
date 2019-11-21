@extends('admin.layouts.master')

@section('title', '新增文章')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            新增文章 <small>請輸入文章內容</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 文章管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<!--單元練習< 練習3-1> 編輯 create.blade.php 及 edit.blade.php-->
<!--單元練習< 練習4-2> 將錯誤訊息區塊做成樣板-->
@include('admin.layouts.partials.validation')
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <!--單元練習< 練習4-5> 開啟 resources/views/admin/posts/create.blade.php將 <form>及 </form>標籤，以HTML的表單改寫-->
        <form action="/admin/posts" method="POST" role="form">
            {{ csrf_field() }}

            <div class="form-group">
                <label>標題：</label>
                <input name="title" class="form-control" placeholder="請輸入文章標題">
            </div>

            <div class="form-group">
                <label>內容：</label>
                <textarea name="content" class="form-control" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label>精選？</label>
                <select name="is_feature" class="form-control">
                    <option value="0">否</option>
                    <option value="1">是</option>
                </select>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success">新增</button>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </form>
    </div>
</div>
<!-- /.row -->
@endsection
