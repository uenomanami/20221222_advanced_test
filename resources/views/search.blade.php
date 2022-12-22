<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

    <link href="{{ asset('css/search.css') }}" rel="stylesheet">

</head>
<body>
  <div class="search__form">
    <h1 class="search__form-title">管理システム</h1>

    <form action="/contact/search" method="get">
      <div class="search__form-container">

        <div class="search__form-item">
          <label for="name">お名前</label><input type="text" name="name" class="search__form-inputbox">
          <label class="search__form-genderlabel">性別</label>
          
          <label>
            <input type="radio" class="search__radio-btn" name="gender"  value="0" checked>
            <span class="search__radio-btn-dummy"></span>全て
          </label>
          <label>
            <input type="radio" class="search__radio-btn" name="gender" value="1">
            <span class="search__radio-btn-dummy"></span>男性
          </label>
          <label>
            <input type="radio" class="search__radio-btn" name="gender" value="2">
            <span class="search__radio-btn-dummy"></span>女性
          </label>
        </div>

        <div class="search__form-item">
          <label for="date_start">登録日</label>
          <input type="date" name="date_start" class="search__form-inputbox">~<input type="date" name="date_end" class="search__form-inputbox">
        </div>
        <div class="search__form-item">
          <label for="email">メールアドレス</label><input type="text" name="email" class="search__form-inputbox">
      </div>

        <div class="search__form-item">
          <button type="submit" class="search__submit-btn">検索</button>
          <div class="search__reset-btn-container">
            <a class="search__reset-btn" href="{{ route('contact.find') }}">リセット</a>
          </div>

        </div>
      </div>
    </form>
    
    <div class="search__paginate">
      <p>全{{ $contacts->total() }}件中&emsp;{{ $contacts->firstItem() }}〜{{ $contacts->lastItem() }} 件</p>
  
      <p>{{ $contacts->links() }}</p>
    </div>

  <table class="search__opinion-table">
    <tr>
      <th>ID</th>
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>ご意見</th>
      <th><br></th>
    </tr>
    @foreach ($contacts as $contact)
    <tr>
      <td>{{$contact->id}}</td>
      <td>{{$contact->fullname}}</td>
      @if($contact->gender == '1')
      <td>男性</td>
      @else
      <td>女性</td>
      @endif
      <td>{{$contact->email}}</td>
      <td class="mouseover-textchange"><span class="search__opinion-table-opinion">{{$contact->opinion}}</span><span>{{$contact->opinion}}</span>
      </td>


      <td>
        <form action="{{ route('contact.delete', ['id' => $contact->id]) }}" method="post">
          @csrf
          <button >削除</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
    </div>
  <script src="{{ asset('js/search.js') }}"></script>
</body>
</html>

