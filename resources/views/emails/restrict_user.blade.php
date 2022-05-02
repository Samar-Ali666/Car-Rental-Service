@component('mail::message')
# Hi {{$user->name}}
# You account has been blocked!

Hi {{$user->name}} your account has been blocked by the Issem Car Rental team as you may have violated the company terms and conditions. We are reviewing your account and will notify you about your account activation.

@component('mail::button', ['url' => 'http://issem-rent-a-ride.test'])

Visit Website

@endcomponent

Thanks,<br>
Issem Car Rentals
@endcomponent