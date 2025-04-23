<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Changelog</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Bootstrap & JS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div>
        <h1>Changelog</h1>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Version</th>
                        <th>Name</th>
                        <th>Released By</th>
                        <th>Release Date</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Placeholder lines. Later we will replace them with @foreach($versions ...) --}}
                    <tr>
                        <td>0.1.0</td>
                        <td>Initial Release</td>
                        <td>Max Mustermann</td>
                        <td>2025-04-21</td>
                        <td>Our first public release with Laravel</td>
                    </tr>
                    <tr>
                        <td>0.1.1</td>
                        <td>Bugfix Release</td>
                        <td>Maxi Musterfrau</td>
                        <td>2025-04-22</td>
                        <td>All known bugs fixed</td>
                    </tr>
                    <tr>
                        <td>0.2.0</td>
                        <td>Feature Update</td>
                        <td>James Hetfield</td>
                        <td>2025-04-23</td>
                        <td>Implemented new filters for search</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>