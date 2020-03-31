@component('mail::message')
    # Introduction to {{ $name }}
    <br>
    {{ $message }}

    This package introduce c3mail package and also for package development in laravel.

    {{--@component('mail::button', ['url' => ''])
    Button Text
    @endcomponent--}}

    Thanks,<br>
    c3mail
@endcomponent
