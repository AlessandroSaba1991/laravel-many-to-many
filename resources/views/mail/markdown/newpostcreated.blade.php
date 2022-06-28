@component('mail::message')
# Introduction

Congratulations!!! Your Post "{{$postTitle}}" was created Successfully.

@component('mail::button', ['url' => $postUrl ])
Click Here for show the Post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
