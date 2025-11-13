@extends('admin.layouts.app')

@section('title', 'Заявки')

@section('content-title', 'Заявки')

@section('content-header-menu')
@endsection

@section('content')
    <section class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">

                        <form action="" method="get">
                            <select name="status" autocomplete="off">
                                <option value="">Все статусы</option>
                                <option value="done" @if(($filter['status'] ?? '') === 'done') selected @endif>Выполнено</option>
                                <option value="new" @if(($filter['status'] ?? '') === 'new') selected @endif>Новый</option>
                            </select>
                            <button type="submit">+</button>
                        </form>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Дата</th>
                                    <th>Статус</th>
                                    <th>Клиент</th>
                                    <th>Менеджер</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tasks as $task)
                                    <tr>
                                        <td>{{ $task->id }}</td>
                                        <td>{{ $task->created_at->format('d.m.y') }}</td>
                                        <td>
                                           @include('admin.tasks_demo.task_status')
                                        </td>
                                        <td>
                                            @if(!empty($task->client_id))
                                                <a href="{{ route('admin.clients.edit', [$task->client_id]) }}">{{ $task->client?->full_name }}</a>
                                            @endif
                                        </td>
                                        <td>{{ $task->manager?->full_name }}</td>
                                        <td>
                                            <a href="{{ route('admin.tasks.edit', [$task->id]) }}" class="btn btn-flat-info">Редактировать</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Tables end -->


        </div>
        </div>
        </div>
        </div>
    </section>
@endsection

@section('script')
    <script>

    </script>
@endsection
