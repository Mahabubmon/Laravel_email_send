<!-- resources/views/mail.blade.php -->

<form method="POST" action="{{ route('send.email') }}">
    @csrf

    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <label for="message">Message</label>
    <textarea name="message" id="message"></textarea>

    <button type="submit">Send</button>
</form>
