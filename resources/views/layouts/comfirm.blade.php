<form method="POST" action="{{ route('send') }}" class="confirm__ar">
  @csrf
  {{ method_field('POST') }}
  <dt class="confirm__tag">お名前</dt>
  <dd>{{ $inputs['fullname'] }}</dd>
  <input type="hidden" name="fullname" value="{{ $inputs['fullname'] }}">
  </dl>
  <dl>
    <dt class="confirm__tag">性別</dt>
    <dd>{{ $inputs['gender'] }}</dd>
    <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">
  </dl>
  <dl>
    <dt class="confirm__tag">メールアドレス</dt>
    <dd>{{ $inputs['email'] }}</dd>
    <input type="hidden" name="email" value="{{ $inputs['email'] }}">
  </dl>
  <dl>
    <dt class="confirm__tag">郵便番号</dt>
    <dd>{{ $inputs['postcode'] }}</dd>
    <input type="hidden" name="postcode" value="{{ $inputs['postcode'] }}">
  </dl>
  <dl>
    <dt class="confirm__tag">住所</dt>
    <dd>{{ $inputs['address'] }}</dd>
    <input type="hidden" name="address" value="{{ $inputs['address'] }}">
  </dl>
  <dl>
    <dt class="confirm__tag">建物名</dt>
    <dd>{{ $inputs['building'] }}</dd>
    <input type="hidden" name="building" value="{{ $inputs['building'] }}">
  </dl>
  <dl>
    <dt class="confirm__tag">ご意見</dt>
    <dd>
      {!! nl2br(e($inputs['content'])) !!}
      <input type="hidden" name="content" value="{{ $inputs['content'] }}">
    </dd>
  </dl>
  <div class="confirm_bk">
    <a href="{{ route('index') }}" class="back_btn"><span class="f-bold">戻る</span></a>
    <input onclick="submit();" type="button" value="この内容で送信する" class="confirm_btn">
  </div>
</form>