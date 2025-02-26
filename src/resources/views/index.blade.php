@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="catalog">
        <div class="catalog-top">
            <div>
                <h2>商品一覧</h2>
            </div>
            <div class="create-form__item">
                <button class="create-form__item-button">+商品を追加</button>
            </div>
        </div>
        <div class="catalog-page">
            <div class="catalog-page__navbar">
                <input class="catalog-page__navbar-input" type="text" placeholder="商品名で検索">
                <button class="catalog-page__navbar-button">検索</button>
                <h5>価格順で表示</h5>
                <select name="" id="">
                    <option value="">価格で並び替え</option>
                </select>
            </div>
        </div>
        <div class="catalog-main">
            <div class="catalog-main__item">
                @foreach($products as $product)
                    <div class="catalog-main__item-inner">
                        <div class="catalog-main__item-card">
                            <img src="{{ asset('storage/' . $product['image']) }}" alt="{{ $product['name'] }}"
                                class="img-fluid" style="width: 100%; height: 200px; object-fit: cover;">
                            <h5 class="mt-2">{{ $product['name'] }}</h5>
                            <p>¥{{ number_format($product['price']) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection