@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/add.css')}}">
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center mb-4">商品登録</h2>

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- 商品名 -->
            <div class="form-group">
                <label for="name" class="required-label">商品名 <span class="required">必須</span></label>
                <input type="text" name="name" id="name" class="form-control" placeholder="商品名を入力" required>
            </div>

            <!-- 値段 -->
            <div class="form-group">
                <label for="price" class="required-label">値段 <span class="required">必須</span></label>
                <input type="number" name="price" id="price" class="form-control" placeholder="値段を入力" required>
            </div>

            <!-- 商品画像 -->
            <div class="form-group">
                <label for="image" class="required-label">商品画像 <span class="required">必須</span></label>
                <input type="file" name="image" id="image" class="form-control-file" required>
            </div>

            <!-- 季節選択 -->
            <div class="form-group">
                <label class="required-label">季節 <span class="required">必須</span> <small>（複数選択可）</small></label>
                <div class="season-options">
                    <label><input type="checkbox" name="season[]" value="春"> 春</label>
                    <label><input type="checkbox" name="season[]" value="夏"> 夏</label>
                    <label><input type="checkbox" name="season[]" value="秋"> 秋</label>
                    <label><input type="checkbox" name="season[]" value="冬"> 冬</label>
                </div>
            </div>

            <!-- 商品説明 -->
            <div class="form-group">
                <label for="description" class="required-label">商品説明 <span class="required">必須</span></label>
                <textarea name="description" id="description" class="form-control" rows="4" placeholder="商品の説明を入力"
                    required></textarea>
            </div>

            <!-- ボタン -->
            <div class="form-group button-group">
                <a href="/products" class="btn btn-secondary">戻る</a>
                <button type="submit" class="btn btn-warning">登録</button>
            </div>
        </form>
    </div>
@endsection