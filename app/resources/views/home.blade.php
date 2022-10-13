@extends('welcome')

@section('main-section')
    
    <h1>Hello {{$name??"User"}} to home page</h1>
    <h2>{{date('d/m/y')}}</h2>
    <h3>{{time()}}</h3>
    {!!"<h1>KSS</h1>"!!}
    
    @php    $i=0; @endphp 
    @while($i<=10)
    <span>{{$i}} <span>
    @php $i=$i+1; @endphp
    @endwhile
    <br/>

    @php
    $arr=array("CKT","HYD","LKO");
    @endphp
    <select>
    @foreach ($arr as $i)
        <option>{{$i}}</option>
    @endforeach
    </select>
@endsection