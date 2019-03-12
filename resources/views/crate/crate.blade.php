@extends('layout.main')

@section('content')

@endsection
@section('footer')
    @parent
    <script src="{{URL::asset('/js/wechat/chat.js')}}"></script>
@endsection