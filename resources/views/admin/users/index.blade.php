@extends('layouts.admin')

@section('title')
    {{ trans('menu.users') }}
@endsection

@section('content')
    <table class="table table-striped" id="datatable">
        <thead>
        <tr>
            <th width="5%">#</th>
            <th>{{ trans('columns.name') }}</th>
            <th>{{ trans('columns.email') }}</th>
            <th>{{ trans('columns.role') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $i => $user)
            <tr data-href="/admin/user/{{ $user->id }}" class="clickable-row">
                <td>
                    {{ $i + 1}}
                </td>
                <td>
                    {{ $user->name }}
                </td>
                <td>
                    {{ $user->email }}
                </td>
                <td>
                    {{ trans('columns.roles.' . $user->role->name) }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection