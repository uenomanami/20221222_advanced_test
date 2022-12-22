@extends('layouts.default')

@push('css')
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
  <link href="{{ asset('css/check.css') }}" rel="stylesheet">
@endpush

@section('title', '内容確認')

@section('contactform')
<form action="/create" method="post">
@csrf
  <table class="contact__table">
    <tr><!-- 項目１ -->
      <th >お名前</th>
      <td>{{ $form['lastname'] }}&emsp;{{ $form['firstname'] }}</td>
      <input name="lastname" value="{{ $form['lastname'] }}" type="hidden">
      <input name="firstname" value="{{ $form['firstname'] }}" type="hidden">
    </tr> 
    <tr><!-- 項目２ -->
      <th>性別</th>
      <!-- <td>{{ $form['gender'] }}</td> -->
      @if($form['gender'] == '1')
      <td>男性</td>
      @else
      <td>女性</td>
      @endif
      <input name="gender" value="{{ $form['gender'] }}" type="hidden">
    </tr>

    <tr><!-- 項目３ -->
      <th >メールアドレス</th>
      <td>{{ $form['email'] }}</td>
      <input name="email" value="{{ $form['email'] }}" type="hidden">
    </tr>

    <tr><!-- 項目４ -->
      <th>郵便番号</th>
      <td>{{ $form['postcode'] }}</td>
      <input name="postcode" value="{{ $form['postcode'] }}" type="hidden">
    </tr>

    <tr><!-- 項目５ -->
      <th>住所</th>
      <td>{{ $form['address'] }}</td>
      <input name="address" value="{{ $form['address'] }}" type="hidden">
    </tr>

    <tr><!-- 項目６ -->
      <th>建物名</th>
      <td>{{ $form['building_name'] }}</td>
      <input name="building_name" value="{{ $form['building_name'] }}" type="hidden">
    </tr>

    <tr><!-- 項目７ -->
      <th>ご意見</th>
      <td class="contact__table-check-opinion">{{ $form['opinion'] }}</td>
      <input name="opinion" value="{{ $form['opinion'] }}" type="hidden">
    </tr>

  </table>  
  <input name="submit" type="submit" class="contact__submit-btn" value="送信">
  <input name="back" type="submit" class="contact__back-btn" value="修正する">
</form>
@endsection