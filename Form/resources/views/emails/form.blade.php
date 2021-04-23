@component('mail::message')
Dit is de ingevulde informatie

dit is de ingevulde rechtsvorm: {{ $formInformation['legal-form'] }}

dit is het ingevulde huisnummer: {{ $formInformation['House-number'] }}

dit is de ingevulde postcode: {{ $formInformation['postal-code-number'] }}  {{ $formInformation['postal-code-text'] }}

dit is de ingevulde klanten email: {{ $formInformation['E-mail-client'] }}

dit is het ingevulde financiële correspondentie email adres: {{ $formInformation['E-mail-financial-correspondence'] }}


Thanks,
Dion Klaassen
@endcomponent
