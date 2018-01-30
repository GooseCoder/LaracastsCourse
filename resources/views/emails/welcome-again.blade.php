@component('mail::message')
# Introduction

Thanks so much for registering!

@component('mail::button', ['url' => 'https://laracasts.com'])
Inspirational quote !!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
