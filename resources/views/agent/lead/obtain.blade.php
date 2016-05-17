@extends('layouts.master')

{{-- Content --}}
@section('content')
    <div class="_page-header" xmlns="http://www.w3.org/1999/html">
    </div>

            <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-12">
                        <table class="table table-bordered table-striped table-hover dataTable">
                            <thead>
                            <tr>
                                <th>{!! trans("site/lead.count") !!}</th>
                                <th>{!! trans("main.action") !!}</th>
                                <th>{!! trans("main.action") !!}</th>
                                <th>{!! trans("main.status") !!}</th>
                                <th>{!! trans("site/lead.updated") !!}</th>
                                <th>{!! trans("site/lead.name") !!}</th>
                                <th>{!! trans("site/lead.phone") !!}</th>
                                <th>{!! trans("site/lead.email") !!}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($leads as $lead)
                                <tr>
                                    <td>-</td>
                                    <td>[eye]</td>
                                    <td><a href="" class="btn btn-sm" ><img src="/public/icons/list-edit.png" class="_icon pull-left flip"></a></td>
                                    <td>@if($lead->status) <span class="label label-success">on</span> @else <span class="label label-danger">off</span> @endif</td>
                                    <td>{!! $lead->updated_at !!}</td>
                                    <td>{!! $lead->name !!}</td>
                                    <td><span class="text-muted">hidden</span></td>
                                    <td><span class="text-muted">hidden</span></td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                        </div>
                    </div>
            </div>

@stop