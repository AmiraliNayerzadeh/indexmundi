<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexMundi - Country Facts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="//www.indexmundi.com/img/logo-sm.gif" alt="IndexMundi Dashboard" width="159" height="40"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Search</a></li>
            </ul>
        </div>
    </div>
</nav>



<div class="container mt-5 pt-5">

    <div class="jumbotron">
        <h1 id="worldpop">8,153,012,128</h1>
        <p class="lead">Current world population has already passed the 8 billion mark. Our world population clock shows our estimate based on UN numbers.</p>
        <p><a href="/clocks/" class="btn btn-primary btn-lg">View more »</a></p>
    </div>

    <div class="row">
        <div class="col-md-4">
            <h2>Welcome</h2>
            <p>IndexMundi contains detailed country statistics, charts, and maps compiled from multiple sources.</p>
            <p>You can explore and analyze thousands of indicators organized by region, country, topic, industry sector, and type.</p>

            <h2>Sectors</h2>
            <ul>
                <li><a href="{{route('commodities')}}">Commodities</a></li>
                <li><a href="#">Exchange Rates</a></li>
                <li><a href="#">Agriculture</a></li>
                <li><a href="#">Energy</a></li>
                <li><a href="#">Mining</a></li>
                <li><a href="#">Trade</a></li>
            </ul>

            <h2>Charts & Maps</h2>
            <ul>
                <li><a href="#">Comparative world maps</a></li>
                <li><a href="#">Country rankings</a></li>
                <li><a href="#">Country comparisons and historical data</a></li>
            </ul>

            <h2>Spotlight</h2>
            <ul>
                <li><a href="#">Compare countries side by side</a></li>
                <li><a href="#">US Quick Facts</a></li>
                <li><a href="#">State comparisons</a></li>
                <li><a href="#">County comparisons</a></li>
                <li><a href="#">City comparisons</a></li>
                <li><a href="#">Tax revenues by state</a></li>
                <li><a href="#">Revenues and expenditures by state</a></li>
                <li><a href="#">Wholesale prices of agricultural products</a></li>
                <li><a href="#">Live population clocks</a></li>
                <li><a href="#">Global surveys</a></li>
                <li><a href="#">US unemployment dashboard</a></li>
                <li><a href="#">US weekly deaths by state</a></li>
                <li><a href="#">Population pyramids by country</a></li>
            </ul>
        </div>

        <div class="col-md-4">
            <h2>Countries</h2>
            <ul>
                <li><a href="#">United States</a></li>
                <li><a href="#">China</a></li>
                <li><a href="#">Germany</a></li>
                <li><a href="#">India</a></li>
                <li><a href="#">Japan</a></li>
                <li><a href="#">Brazil</a></li>
                <li><a href="#">Mexico</a></li>
                <li><a href="#">Australia</a></li>
                <li><a href="#">Russia</a></li>
                <li><a href="#">More...</a></li>
            </ul>

            <h2>Regions</h2>
            <ul>
                <li><a href="#">Africa</a></li>
                <li><a href="#">Asia</a></li>
                <li><a href="#">Central America and the Caribbean</a></li>
                <li><a href="#">Europe</a></li>
                <li><a href="#">Middle East</a></li>
                <li><a href="#">North America</a></li>
                <li><a href="#">Oceania</a></li>
                <li><a href="#">South America</a></li>
                <li><a href="#">Southeast Asia</a></li>
                <li><a href="#">Arctic Region</a></li>
                <li><a href="#">Antarctic Region</a></li>
                <li><a href="#">The World</a></li>
            </ul>

            <h2>Country Facts Explorer</h2>
            <p>Explore, visualize, and compare <a href="#">over 1200 indicators</a> published by the World Bank. The indicators are grouped under the following <a href="#">topics</a>:</p>
            <ul>
                <li><a href="#">Economic Policy & Debt</a></li>
                <li><a href="#">Education</a></li>
                <li><a href="#">Environment</a></li>
                <li><a href="#">Financial Sector</a></li>
                <li><a href="#">Health</a></li>
                <li><a href="#">Infrastructure</a></li>
                <li><a href="#">Labor & Social Protection</a></li>
                <li><a href="#">Poverty</a></li>
                <li><a href="#">Private Sector & Trade</a></li>
                <li><a href="#">Public Sector</a></li>
            </ul>
            <p>World Bank indicators are also available in <a href="#">Spanish</a>.</p>
        </div>

        <div class="col-md-4">
            <h2>Topics</h2>
            <ul>
                <li><a href="#">Introduction</a></li>
                <li><a href="#">Geography</a></li>
                <li><a href="#">Demographics</a></li>
                <li><a href="#">Government</a></li>
                <li><a href="#">Economy</a></li>
                <li><a href="#">Energy</a></li>
                <li><a href="#">Telecommunications</a></li>
                <li><a href="#">Transportation</a></li>
                <li><a href="#">Military</a></li>
                <li><a href="#">Transnational Issues</a></li>
            </ul>

            <h2>Visualizations</h2>
            <ul>
                <li><a href="#">Age distributions</a></li>
                <li><a href="#">Electricity production</a></li>
                <li><a href="#">Income distribution</a></li>
                <li><a href="#">Merchandise exports</a></li>
                <li><a href="#">Merchandise imports</a></li>
                <li><a href="#">Treemap of World indicators</a></li>
            </ul>

            <h2>Gazetteer</h2>
            <p>Maps and elevation data of all the world's <a href="#">cities</a>, <a href="#">lakes</a>, and <a href="#">mountains</a>.</p>

            <h2>Languages</h2>
            <ul>
                <li><a href="#">Spanish</a></li>
                <li><a href="#">French</a></li>
                <li><a href="#">German</a></li>
                <li><a href="#">Portuguese</a></li>
                <li><a href="#">Italian</a></li>
                <li><a href="#">Dutch</a></li>
                <li><a href="#">Russian</a></li>
                <li><a href="#">Chinese</a></li>
                <li><a href="#">Japanese</a></li>
                <li><a href="#">Korean</a></li>
                <li><a href="#">Turkish</a></li>
            </ul>
        </div>
    </div>
</div>


<footer class="footer bg-dark text-white text-center py-3">
    <div class="container">
        <p>&copy; 2024 IndexMundi, Inc. All Rights Reserved.</p>
        <p><a href="#" class="text-white">Privacy Policy</a> | <a href="#" class="text-white">Terms of Use</a></p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
