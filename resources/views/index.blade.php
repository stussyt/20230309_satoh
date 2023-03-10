@extends('layouts.app')

@section('title')
Todo
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container">
  <div class="card">
    <p class="title">Todo List</p>
  
  <div class="todo">
    <form class="input-form" method="POST" action="/todos/create">
    @csrf
    <input type="text" class="input-add" name="content">
    <input type="submit" class="button-add" value="追加">
    </form>

    <table>
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
      </tr>
      @foreach ($todolists as $author)
      <tr>
        <td>{{$author->created_at}}</td>
        <form method="POST" action="/todos/update">
        @csrf
        <td>
          <input type="text" class="input-update" name="content" value={{$author->content}}>
          <input type="hidden" name="id" value={{$author->id}}>
        </td>
        <td><input type="submit" class="button-update" value="更新"></td>
        </form>
        <form method="POST" action="/todos/delete">
        @csrf
        <td>
          <input type="hidden" name="id" value={{$author->id}}>
          <input type="submit" class="button-delete" value="削除">
        </td>
        </form>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection
