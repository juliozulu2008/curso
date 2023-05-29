<x-mail::message>
# Voçe Recebou um Novo lead

<p>
    Nome: {{ $data['name'] }}</br>
    Telefone:{{ $data['tel'] }}</br>
    E-mail:{{ $data['email'] }}</br>
</p>

<x-mail::button :url="'https://jcdsoft.com.br'">
Acesse o site clicando aqui
</x-mail::button>
{{ date('d/m/Y') }}<br>
{{ config('app.name') }}
</x-mail::message>
