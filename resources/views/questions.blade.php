@extends('layouts.studentApp')

@section('content')


  <test-component  ref="foo" :low="{{ json_encode($easy) }}" :med="{{ json_encode($med) }}" :high="{{ json_encode($hard) }}" :curr_ques='{{json_encode($curr_ques)}}'>

  </test-component>


@endsection