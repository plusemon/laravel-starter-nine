@if (session()->has('errors'))
    @foreach ($errors->all() as $error)
        <x-alert :type="'danger'">
            {{ $error }}
        </x-alert>
    @endforeach
@endif
