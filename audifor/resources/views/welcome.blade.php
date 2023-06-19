<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/audi-type-2" rel="stylesheet">
    <style>
    @import url('https://fonts.cdnfonts.com/css/audi-type-2');
    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav>
        <label class="logo">Audi Forum</label>
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">About</a>
            </li>

            @if (Route::has('login'))

                @auth
                <li>
                    <a href="{{ url('/home') }}" class="btn btn-success">{{Auth::user()->name}}</a>
                </li>

                @else

                    <li>
                        <a href="{{ route('register') }}" class="btn btn-success">Registration</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    </li>
                @endauth
            @endif
        </ul>
    </nav>
    <div class="audi_foto">
        <img src="a5.jpg" alt="Audi A5" width=100%>
    </div>
    
    <div class="dev_deg">
        <label>Audi</label>
        <p>Audi AG (Audi) a subsidiary of Volkswagen AG, is an automobile manufacturer. 
            It designs, develops, manufactures, and commercializes premium cars, and motorcycles globally. 
            The company is recognized as one of the leading car manufacturers in the premium and supercar segment. 
            It focuses on innovation through its research and development activities and has partnerships with national and international academic partners. 
            Audi also offers financial services such as leasing and borrowings through cooperation with Volkswagen Financial Services AG. The company operates production facilities together with its subsidiaries in Americas, Europe. 
            The Middle East and Asia-Pacific. Audi is headquartered in Ingolstadt, Bayern, Germany.</p>
    </div>

</body>
</html>