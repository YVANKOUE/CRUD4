@component('mail::message')
#  Cliquez sur le lien si dessous et suivez les instructions pour changer votre MDP

<a href="http://127.0.0.1:8000/password/create">text</a>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
