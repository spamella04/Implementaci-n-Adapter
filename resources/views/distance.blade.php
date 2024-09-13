<!-- resources/views/distance.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Convert Distance</title>
</head>
<body>
    <h1>Convert Distance</h1>

    <form action="{{ route('convert.distance') }}" method="POST">
        @csrf
        <label for="miles">Distance in Miles:</label>
        <input type="number" name="miles" id="miles" step="0.01" required>
        <button type="submit">Convert to Kilometers</button>
    </form>

    @if (isset($distance))
        <h2>Distance in Kilometers: {{ $distance }} km</h2>
    @endif
</body>
</html>



