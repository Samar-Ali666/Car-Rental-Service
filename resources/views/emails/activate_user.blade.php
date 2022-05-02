@component('mail::message')
# Hi {{$user->name}} hope you are doing well
# You account has been activated again!

Hi {{$user->name}} your account has been activated again as our team reviewed your account please make sure in future you will not violate our terms and policies. For more information please read our terms and policies.

@component('mail::button', ['url' => 'http://issem-rent-a-ride.test'])

Visit Website

@endcomponent

Thanks,<br>
Issem Car Rentals
@endcomponent