@extends('layouts.app')
<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->

    <body>
        @session('success')
        <div class="alert alert-success" role="alert">{!!$value!!}</div>
        @endsession

        @session('error')
         <div class="alert alert-danger" role="alert">{!!$value!!}</div>
        @endsession

        @session('errorMessage')
         <div class="alert alert-danger" role="alert">{!!$value!!}</div>
        @endsession
        ds('success  ruim')

        <div class="grid grid-cols-3 gap-4 h-full p-10">
            <div>
                <a
                button class="bg-yellow-600 rounded-lg shadow px-4 text-slate-900 hover:bg-opacity-80" href="{{ route('listajob') }}">
                    Lista Jobs
                </button>
                </a>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Queue</th>
                            <th scope="col">Payload</th>
                            <th scope="col">Attempts</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jobs as $job )
                            <tr>
                                <th>{{ $job->id }}</th>
                                <td>{{ $job->queue }}</td>
                                <td>{{ $job->payload }}</td>
                                <td>{{ $job->attempts }}</td>
                            </tr>

                            @empty
                            <span style="color: #f00;">Nenhum webhook cadastrado!</span><br>
                            <a href="{{ route('listajob') }}" class="btn btn-warning btn-sm me-1">Contactar administrador</a>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </body>
</div>
