<form method="POST" action="{{ route('confirm') }}">
  @csrf
  @method('POST')
  <div class="form-inner">
    <div class="form-cont">
      <div class="mg-b_40">
        <label for="name" class="required-tag">お名前</label><br>
        <input type="text" placeholder="例) 山田太郎" id="name" name="name" value="{{ old('name') }}">
        @if($errors->has('name'))
        <p class="required">{{ $errors->first('name') }}</p>
        @endif
      </div>
      <div class="mg-b_40">
        <label for="email" class="required-tag lg-label">性別</label><br>
        <input type="gender" id="gender" name="gender" class="mg-b_10" value="{{ old('gender') }}">
      </div>
      <div class="mg-b_40">
        <label for="email" class="required-tag lg-label">メールアドレス</label><br>
        <input type="email" placeholder="例) @example.com" id="mail" name="email" class="mg-b_10" value="{{ old('email') }}">
        @if($errors->has('email'))
        <p class="required">{{ $errors->first('email') }}</p>
        @endif
      </div>
      <div class="mg-b_40">
        <label for="email" class="required-tag lg-label">郵便番号</label><br>
        <input type="email" placeholder="例) 123-4567" id="postcode" name="postcode" class="mg-b_10" value="{{ old('postcode') }}">
        @if($errors->has('postcode'))
        <p class="required">{{ $errors->first('postcode') }}</p>
        @endif
      </div>
      <div class="mg-b_40">
        <label for="email" class="required-tag lg-label">住所</label><br>
        <input type="email" placeholder="例) 東京都渋谷区千駄ヶ谷1-2-3" id="address" name="address" class="mg-b_10" value="{{ old('address') }}">
        @if($errors->has('address'))
        <p class="required">{{ $errors->first('address') }}</p>
        @endif
      </div>
      <div class="mg-b_40">
        <label for="building" class="required-tag lg-label">建物名</label><br>
        <input type="building" placeholder="例) 千駄ヶ谷マンション101" id="building" name="building" class="mg-b_10" value="{{ old('building') }}">
        @if($errors->has('building'))
        <p class="required">{{ $errors->first('building') }}</p>
        @endif
      </div>
      <div class="mg-b_40">
        <label for="content" class="lg-label">ご意見</label><br>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Message">{{ old('content') }}</textarea>
      </div>
    </div>
  </div>