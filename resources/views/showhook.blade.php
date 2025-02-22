<x-layout>
    <div>
        <h2>Teste lista webhooks cadastradas</h2>
        <div>
            @session('success')
                <div class="alert alert-success" role="alert">{!!$value!!}</div>
            @endsession

            @session('error')
                <div class="alert alert-danger" role="alert">{!!$value!!}</div>
             @endsession

            @session('message')
                <div class="alert alert-danger" role="alert">{!!$value!!}</div>
            @endsession

        </div>
        <div>
            <a
            button class="bg-yellow-600 rounded-lg shadow px-4 text-slate-900 hover:bg-opacity-80" href="{{ route('showhook') }}">
                Lista webHook
            </button>
            </a>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Url</th>
                        <th scope="col">Name</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($webhooks as $webhook )

                        <tr>
                        <th>{{ $webhook["id"] }}</th>
                        <td>{{ $webhook["url"] }}</td>
                        <td>{{ $webhook["name"] }}</td>
                        </tr>
                         @empty
                        <span style="color: #f00;">Nenhum webhook cadastrado!</span><br>
                        <a href="{{ route('showhook') }}" class="btn btn-warning btn-sm me-1">Contactar administrador</a>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
   </body>
</x-layout>
