@if ($errors->any())
    <ul class="alert alert-danger">
        {{ implode('', $errors->all('<li>:message</li>')) }}
    </ul>
@endif