@extends('layouts.master')

{{-- Content --}}
@section('content')
    <div class="_page-header" xmlns="http://www.w3.org/1999/html">
    </div>


    <table id="table" class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>{!! trans("site/sphere.name") !!}</th>
            <th>{!! trans("main.status") !!}</th>
            <th>{!! trans("main.updated_at") !!}</th>
            <th>{!! trans("main.action") !!}</th>
        </tr>
        </thead>
        <tbody>
            @forelse($spheres as $sphere)
                <tr>
                    <td>{!! $sphere->name !!}</td>
                    <td>@if($sphere->status) <span class="label label-success">on</span> @else <span class="label label-danger">off</span> @endif</td>
                    <td>{!! $sphere->updated_at !!}</td>
                    <td><a href="{{ route('agent.sphere.edit',['id'=>$sphere->id]) }}" class="btn btn-default btn-sm" ><span class="glyphicon glyphicon-pencil"></span>  {{ trans("main.edit") }}</a></td>
                </tr>
            @empty
            @endforelse
        </tbody>
    </table>
@stop

{{-- Scripts --}}
@section('scripts')
@stop