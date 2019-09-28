@component('mail::message')
# Introduction

Hi , the author {{ $post->user->name }} has a new post
call {{ $post->title }}

@component('mail::button', ['url' => "http://127.0.0.1:8004/post/$post->id"])
See new post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
