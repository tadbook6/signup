@extends('layouts.app')
@section('content')
  <div class="page-header">
    <h1>{{$action->title}}</h1>
  </div>
  <div class="text-center">
    {{$action->user->name}} ({{$action->user->email}})
    發布於 {{$action->created_at->format("Y年m月d日 H:i:s")}} /
    最後更新： {{$action->updated_at->format("Y年m月d日 H:i:s")}} /
    計數器： {{$action->counter}}
  </div>
  <hr>
  <p style="font-size: 1.5em; line-height: 2;">
    {!!$action->content!!}
  </p>
  <hr>
  <div class="text-center">
    @if (Auth::check() && Auth::user()->id == $action->user_id)
      {!!BootForm::inline([
        'route' => ['action.destroy', $action->id],
        'method'=>'delete',
        'style'=>'display:inline',
      ]);!!}
      {!!BootForm::submit('刪除',['class'=>'btn btn-danger']);!!}
      {!!BootForm::close()!!}
      <a href="{!!route('action.edit' , $action->id)!!}" class="btn btn-warning">編輯</a>
    @endif
    <a href="{!!route('action.index')!!}" class="btn btn-info">回首頁</a>
  </div>

@stop
