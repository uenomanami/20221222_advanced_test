@extends('layouts.default')

@push('css')
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endpush

@section('title', 'お問い合わせ')

@section('contactform')
<form  action="/check" method="post" class="h-adr">
@csrf
  <table class="contact__table">
    <tr><!-- 項目１ -->
      <th rowspan="2">お名前<span>※</span></th>
      <td><input type="text" class="contact__input-box-name" name="lastname" value="{{ old('lastname') }}"></td>
      <td><input type="text" class="contact__input-box-name" name="firstname" value="{{ old('firstname') }}"></td>
    </tr>
    <tr>
      <td class="contact__example">&emsp;例）山田</td>
      <td class="contact__example">&emsp;例）太郎</td>
    </tr>
    <tr>
      <th></th>
      <td class="err-msg-name contact__error-message" colspan="2"></td>
    </tr>
    @error('lastname')
    <tr>
      <th><br></th>
      <td class="contact__error-message" colspan="2">エラー：{{$message}}</td>
    </tr>
    @enderror

    @error('firstname')
    <tr>
      <th><br></th>
      <td class="contact__error-message" colspan="2">エラー：{{$message}}</td>
      </tr>
    @enderror

    <tr>
      <th rowspan="2">性別<span>※</span></th>
      <td colspan="2"><label class="margin-r10"><input type="radio" class="contact__radio-btn" name="gender" checked value="1" {{ (old('gender') == '1') ? "checked" : "" }}><span class="contact__radio-btn-dummy"></span>男性</label><label class="margin-r10"><input type="radio" class="contact__radio-btn" name="gender" value="2"{{ (old('gender') == '2') ? "checked" : "" }}><span class="contact__radio-btn-dummy"></span>女性</label></td>
    </tr>
    <tr> 
      <td colspan="2"><br></td>
    </tr>

    <tr><!-- 項目３ -->
      <th rowspan="2">メールアドレス<span>※</span></th>
      <td colspan="2"><input type="email" class="contact__input-box" name="email" value="{{ old('email') }}"></td>
    </tr>
    <tr>
      <td colspan="2" class="contact__example">&emsp;例）test@example.com</td>
    </tr>
    <tr>
      <th></th>
      <td class="err-msg-email contact__error-message" colspan="2"></td>
    </tr>

    @error('email')
    <tr>
      <th><br></th>
      <td colspan="2" class="contact__error-message">エラー：{{$message}}</td>
    </tr>
    @enderror      

    <tr><!-- 項目４ -->
      <th rowspan="2">郵便番号<span>※</span></th>
      <td colspan="2">&nbsp;〒&nbsp;<input type="text" class="contact__input-box-address p-postal-code" name="postcode" value="{{ old('postcode') }}"></td>
    </tr>
    <tr>
      <td colspan="2" class="contact__example">&emsp;&emsp;&emsp;例）123-4567</td>
    </tr>
      <th></th>
      <td class="err-msg-postcode contact__error-message" colspan="2"></td>
    </tr>

    @error('postcode')
    <tr>
      <th><br></th>
      <td colspan="2" class="contact__error-message">エラー：{{$message}}</td>
    </tr>
    @enderror      

    <tr><!-- 項目５ -->
      <th rowspan="2">住所<span>※</span></th>
      <td colspan="2"><input type="text" class="address contact__input-box p-region p-locality p-street-address p-extended-address" name="address" value="{{ old('address') }}"></td>
    </tr>
    <tr>
      <td colspan="2" class="contact__example">&emsp;例）東京都渋谷区千駄ヶ谷1-2-3</td>
    </tr>
      <th></th>
      <td class="err-msg-address contact__error-message" colspan="2"></td>
    </tr>

    @error('address')
    <tr>
      <th><br></th>
      <td colspan="2" class="contact__error-message">エラー：{{$message}}</td>
    </tr>
    @enderror      

    <tr><!-- 項目６ -->
      <th rowspan="2">建物名</th>
      <td colspan="2"><input type="text" class="contact__input-box" name="building_name" value="{{ old('building_name') }}"></td>
    </tr>
    <tr>
      <td class="contact__example" colspan="2">&emsp;例）千駄ヶ谷マンション101</td>
    </tr>

    <tr class="contact__input-opinion"><!-- 項目７ -->
      <th>ご意見<span>※</span></th>
    <td  colspan="2"><textarea type="textarea" name="opinion" class="contact__input-textarea">{{ old('opinion') }}</textarea></td>
    </tr>
      <th></th>
      <td class="err-msg-opinion contact__error-message" colspan="2"></td>
    </tr>

    @error('opinion')
    <tr>
      <th><br></th>
      <td colspan="2" class="contact__error-message">エラー：{{$message}}</td>
    </tr>
    @enderror 

  </table>  
  <input type="submit" class="contact__submit-btn" value="確認">
  </form>
@endsection

@section('script')
  <script src="{{ asset('js/form.js') }}"></script>
@endsection
