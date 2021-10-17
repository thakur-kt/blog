<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
@stack('scripts')
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

@php
$message="alert message"
@endphp
<x-alert typeo="error" :message="$message">I am slot</x-alert>
<x-success type="success"></x-success>
</body>
</html>