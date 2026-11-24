<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- <header>
        <p>Nire bloga</p>
        <nav>
            <a href="/">Hasiera</a>
            <a href="/users">Erabiltzaileak</a>
        </nav>
    </header> --}}

    <main>

        <p> Kaixo {{ $n }} zelan zaude? (Home - froga)</p>

        @if (count($users) === 1)
            Erabiltzaile bakarra dago.
        @elseif(count($users) > 1)
            Erabiltzaile bat baino gehiago
        @else
            Ez daude erabiltzailearik
        @endif

        @unless (count($users) > 0)
            Ez dago erabiltzailearik
        @endunless

        <ul>

            @foreach ($users as $userKey => $userValue)

                <li>{{ $userKey }}</li>

            @endforeach

        </ul>

        @yield('content')
    </main>

    {{-- <footer>
        <p>Webgunearen orri-oina</p>
    </footer> --}}
</body>

</html>