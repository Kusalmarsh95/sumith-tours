<p>Dear Sumith,</p>
<p>Request your service by {{ $reservation->name }}. Contact him from the following details</p>
<p><strong>Reservation Details:</strong></p>
<ul>
    <li>Name: {{ $reservation->name }}</li>
    <li>Country: {{ $reservation->country }}</li>
    <li>WhatsApp No: {{ $reservation->number }}</li>
    <li>Email: {{ $reservation->email }}</li>
    <li>Requesting Category: {{ $reservation->category }}</li>
    <li>Date: {{ $reservation->date }}</li>
</ul>
<p>Thank you!</p>
<p>Best regards,<br>Sumith Tours</p>
