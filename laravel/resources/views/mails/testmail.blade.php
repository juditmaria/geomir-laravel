<<<<<<< HEAD
@component('mail::message')
# Hello {{$content['name']}},


{{$content['body']}}


@component('mail::button', ['url' => $content['url']])
Click Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
=======
<x-mail::message>
@component('mail::message')
# Hello {{$content['name']}},
 
{{$content['body']}}
 
@component('mail::button', ['url' => $content['url']])
Click Here
@endcomponent
 
Thanks,<br>
{{ config('app.name') }}
@endcomponent

//# Introduction

//The body of your message.

//<x-mail::button :url="''">
//Button Text
//</x-mail::button>

//Thanks,<br>
//{{ config('app.name') }}
//</x-mail::message>
>>>>>>> d1e2229e85fa2d1352d814a202308706b5e2603a
