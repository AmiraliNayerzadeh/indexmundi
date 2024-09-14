@extends('home.layout.master')

@section('content')
    <div class="side-body">
        <div class="col-xs-12 col-sm-6 col-lg-8" style="height: auto !important; min-height: 0px !important;">


            <div class="midPanel" style="height: auto !important;">
                <table border="0" style="height: auto !important;">
                    <tbody>
                    <tr style="height: auto !important;">
                        <td style="height: auto !important;">


                            <table class="tblData" cellspacing="0" rules="all" border="1"
                                   style="border-collapse:collapse;">
                                <tbody>
                                <tr>
                                    <th scope="col">Commodity</th>
                                    <th scope="col">Monthly Avg</th>
                                    <th scope="col">1 Month Change</th>
                                    <th scope="col">12 Month Change</th>
                                    <th scope="col">Year to Date Change</th>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=agricultural-raw-materials-price-index">Commodity
                                            Agricultural Raw Materials Index</a></td>
                                    <td align="right">76.39</td>
                                    <td align="right">-2.39%</td>
                                    <td align="right">0.41%</td>
                                    <td align="right">-4.17%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=beverage-price-index">Commodity Beverage Price Index</a>
                                    </td>
                                    <td align="right">200.76</td>
                                    <td align="right" style="background-color:LightGreen;">26.54%</td>
                                    <td align="right" style="background-color:LightGreen;">85.41%</td>
                                    <td align="right" style="background-color:LightGreen;">62.59%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=commodity-price-index">Commodity Price Index</a></td>
                                    <td align="right">170.49</td>
                                    <td align="right">4.48%</td>
                                    <td align="right">-0.16%</td>
                                    <td align="right">7.02%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=energy-price-index">Commodity Fuel (energy) Index</a>
                                    </td>
                                    <td align="right">109.69</td>
                                    <td align="right">5.24%</td>
                                    <td align="right">0.39%</td>
                                    <td align="right">8.42%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=food-and-beverage-price-index">Commodity Food and
                                            Beverage Price Index</a></td>
                                    <td align="right">144.01</td>
                                    <td align="right">3.49%</td>
                                    <td align="right">-0.12%</td>
                                    <td align="right">5.70%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=food-price-index">Commodity Food Price Index</a></td>
                                    <td align="right">116.61</td>
                                    <td align="right">-0.54%</td>
                                    <td align="right" style="background-color:LightPink;">-10.95%</td>
                                    <td align="right">-1.21%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=industrial-inputs-price-index">Commodity Industrial
                                            Inputs Price Index</a></td>
                                    <td align="right">165.99</td>
                                    <td align="right">3.64%</td>
                                    <td align="right">-1.41%</td>
                                    <td align="right">0.24%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=metals-price-index">Commodity Metals Price Index</a>
                                    </td>
                                    <td align="right">110.53</td>
                                    <td align="right">8.93%</td>
                                    <td align="right">2.94%</td>
                                    <td align="right">8.33%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=non-fuel-price-index">Commodity Non-Fuel Price Index</a>
                                    </td>
                                    <td align="right">115.01</td>
                                    <td align="right">5.28%</td>
                                    <td align="right">1.36%</td>
                                    <td align="right">7.43%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=petroleum-price-index">Crude Oil (petroleum), Price
                                            index</a></td>
                                    <td align="right">215.40</td>
                                    <td align="right">5.59%</td>
                                    <td align="right" style="background-color:LightGreen;">10.20%</td>
                                    <td align="right" style="background-color:LightGreen;">15.19%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=coal-australian">Coal, Australian thermal coal</a></td>
                                    <td align="right">134.97</td>
                                    <td align="right">2.65%</td>
                                    <td align="right" style="background-color:LightPink;">-30.53%</td>
                                    <td align="right">8.06%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=coal-south-african">Coal, South African export price</a>
                                    </td>
                                    <td align="right">104.89</td>
                                    <td align="right">0.05%</td>
                                    <td align="right" style="background-color:LightPink;">-21.58%</td>
                                    <td align="right">-1.74%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=crude-oil">Crude Oil (petroleum)</a></td>
                                    <td align="right">88.01</td>
                                    <td align="right">5.34%</td>
                                    <td align="right">6.73%</td>
                                    <td align="right" style="background-color:LightGreen;">13.31%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=crude-oil-brent">Crude Oil (petroleum); Dated Brent</a>
                                    </td>
                                    <td align="right">90.05</td>
                                    <td align="right">5.38%</td>
                                    <td align="right">7.06%</td>
                                    <td align="right" style="background-color:LightGreen;">12.24%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=crude-oil-dubai">Crude Oil (petroleum); Dubai Fateh</a>
                                    </td>
                                    <td align="right">89.39</td>
                                    <td align="right">5.54%</td>
                                    <td align="right">6.63%</td>
                                    <td align="right" style="background-color:LightGreen;">13.35%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=crude-oil-west-texas-intermediate">Crude Oil
                                            (petroleum); West Texas Intermediate</a></td>
                                    <td align="right">84.59</td>
                                    <td align="right">5.09%</td>
                                    <td align="right">6.48%</td>
                                    <td align="right" style="background-color:LightGreen;">14.42%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=diesel">Diesel</a></td>
                                    <td align="right">2.62</td>
                                    <td align="right">-2.02%</td>
                                    <td align="right">1.04%</td>
                                    <td align="right">-2.28%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=gasoline">Gasoline</a></td>
                                    <td align="right">2.75</td>
                                    <td align="right" style="background-color:LightGreen;">10.85%</td>
                                    <td align="right">-0.58%</td>
                                    <td align="right" style="background-color:LightGreen;">22.50%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=heating-oil">Heating Oil</a></td>
                                    <td align="right">2.54</td>
                                    <td align="right">-2.50%</td>
                                    <td align="right">4.62%</td>
                                    <td align="right">-2.08%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=indonesian-liquified-natural-gas">Indonesian Liquified
                                            Natural Gas</a></td>
                                    <td align="right">13.26</td>
                                    <td align="right">0.53%</td>
                                    <td align="right">-7.72%</td>
                                    <td align="right">-7.53%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=jet-fuel">Jet Fuel</a></td>
                                    <td align="right">2.61</td>
                                    <td align="right">0.46%</td>
                                    <td align="right">9.73%</td>
                                    <td align="right">0.77%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=natural-gas">Natural Gas</a></td>
                                    <td align="right">1.60</td>
                                    <td align="right">6.67%</td>
                                    <td align="right" style="background-color:LightPink;">-25.93%</td>
                                    <td align="right" style="background-color:LightPink;">-49.69%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=propane">Propane</a></td>
                                    <td align="right">0.80</td>
                                    <td align="right">-0.37%</td>
                                    <td align="right">-1.36%</td>
                                    <td align="right">-2.56%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=rbob-gasoline">RBOB Gasoline</a></td>
                                    <td align="right">3.19</td>
                                    <td align="right">9.72%</td>
                                    <td align="right" style="background-color:LightGreen;">14.11%</td>
                                    <td align="right" style="background-color:LightGreen;">40.46%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=russian-natural-gas">Russian Natural Gas</a></td>
                                    <td align="right">9.09</td>
                                    <td align="right">6.32%</td>
                                    <td align="right" style="background-color:LightPink;">-32.77%</td>
                                    <td align="right">-4.92%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=cocoa-beans">Cocoa beans</a></td>
                                    <td align="right">9.74</td>
                                    <td align="right" style="background-color:LightGreen;">37.38%</td>
                                    <td align="right" style="background-color:LightGreen;">238.19%</td>
                                    <td align="right" style="background-color:LightGreen;">121.36%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=other-mild-arabicas-coffee">Coffee, Other Mild
                                            Arabicas</a></td>
                                    <td align="right">5.27</td>
                                    <td align="right" style="background-color:LightGreen;">14.32%</td>
                                    <td align="right">4.15%</td>
                                    <td align="right" style="background-color:LightGreen;">17.90%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=robusta-coffee">Coffee, Robusta</a></td>
                                    <td align="right">4.23</td>
                                    <td align="right" style="background-color:LightGreen;">15.57%</td>
                                    <td align="right" style="background-color:LightGreen;">65.88%</td>
                                    <td align="right" style="background-color:LightGreen;">29.75%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=tea">Tea</a></td>
                                    <td align="right">2.31</td>
                                    <td align="right">7.44%</td>
                                    <td align="right">-1.70%</td>
                                    <td align="right">5.00%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=barley">Barley</a></td>
                                    <td align="right">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=canadian-wheat">Canadian Wheat</a></td>
                                    <td align="right">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><a href="{{route('categories','corn')}}">Maize (corn)</a></td>
                                    <td align="right">191.65</td>
                                    <td align="right">0.57%</td>
                                    <td align="right" style="background-color:LightPink;">-34.17%</td>
                                    <td align="right">-3.51%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=rice">Rice</a></td>
                                    <td align="right">592.00</td>
                                    <td align="right">-3.43%</td>
                                    <td align="right" style="background-color:LightGreen;">18.16%</td>
                                    <td align="right" style="background-color:LightPink;">-10.30%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=soft-red-winter-wheat">Soft Red Winter Wheat</a></td>
                                    <td align="right">227.81</td>
                                    <td align="right">-0.30%</td>
                                    <td align="right" style="background-color:LightPink;">-17.81%</td>
                                    <td align="right">-8.09%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=sorghum">Sorghum</a></td>
                                    <td align="right">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=wheat">Wheat</a></td>
                                    <td align="right">272.30</td>
                                    <td align="right">-0.92%</td>
                                    <td align="right" style="background-color:LightPink;">-28.00%</td>
                                    <td align="right">-4.09%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=bananas">Bananas</a></td>
                                    <td align="right">1.63</td>
                                    <td align="right">-0.61%</td>
                                    <td align="right">-1.21%</td>
                                    <td align="right">1.24%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=oranges">Oranges</a></td>
                                    <td align="right">1.95</td>
                                    <td align="right">1.56%</td>
                                    <td align="right" style="background-color:LightGreen;">33.56%</td>
                                    <td align="right" style="background-color:LightGreen;">16.77%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=beef">Beef</a></td>
                                    <td align="right">6.03</td>
                                    <td align="right">8.84%</td>
                                    <td align="right" style="background-color:LightGreen;">13.77%</td>
                                    <td align="right" style="background-color:LightGreen;">24.84%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=chicken">Poultry (chicken)</a></td>
                                    <td align="right">1.44</td>
                                    <td align="right">-5.88%</td>
                                    <td align="right">-8.28%</td>
                                    <td align="right">-8.28%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=lamb">Lamb</a></td>
                                    <td align="right">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=pork">Swine (pork)</a></td>
                                    <td align="right">87.54</td>
                                    <td align="right">8.26%</td>
                                    <td align="right" style="background-color:LightGreen;">25.31%</td>
                                    <td align="right" style="background-color:LightGreen;">30.09%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=fish">Fish (salmon)</a></td>
                                    <td align="right">10.96</td>
                                    <td align="right">7.87%</td>
                                    <td align="right">1.29%</td>
                                    <td align="right">7.35%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=shrimp">Shrimp</a></td>
                                    <td align="right">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=sugar">Sugar</a></td>
                                    <td align="right">0.45</td>
                                    <td align="right">-6.25%</td>
                                    <td align="right" style="background-color:LightPink;">-15.09%</td>
                                    <td align="right">-6.25%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=sugar-european-import-price">Sugar, European import
                                            price</a></td>
                                    <td align="right">0.35</td>
                                    <td align="right">0.00%</td>
                                    <td align="right">-2.78%</td>
                                    <td align="right">-2.78%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=sugar-us-import-price">Sugar, U.S. import price</a></td>
                                    <td align="right">0.87</td>
                                    <td align="right">-1.14%</td>
                                    <td align="right">-4.40%</td>
                                    <td align="right">-1.14%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=coconut-oil">Coconut Oil</a></td>
                                    <td align="right">1,425.23</td>
                                    <td align="right" style="background-color:LightGreen;">10.67%</td>
                                    <td align="right" style="background-color:LightGreen;">32.71%</td>
                                    <td align="right" style="background-color:LightGreen;">26.06%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=fish-meal">Fishmeal</a></td>
                                    <td align="right">1,701.83</td>
                                    <td align="right">-1.36%</td>
                                    <td align="right">-3.05%</td>
                                    <td align="right">-4.79%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=olive-oil">Olive Oil, extra virgin</a></td>
                                    <td align="right">9,069.79</td>
                                    <td align="right">-8.53%</td>
                                    <td align="right" style="background-color:LightGreen;">44.66%</td>
                                    <td align="right" style="background-color:LightPink;">-11.78%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=palm-kernel-oil">Palm Kernel Oil</a></td>
                                    <td align="right">1,290.23</td>
                                    <td align="right">9.63%</td>
                                    <td align="right" style="background-color:LightGreen;">26.89%</td>
                                    <td align="right" style="background-color:LightGreen;">31.99%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=palm-oil">Palm oil</a></td>
                                    <td align="right">935.69</td>
                                    <td align="right">-0.77%</td>
                                    <td align="right">-6.92%</td>
                                    <td align="right" style="background-color:LightGreen;">10.75%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=peanut-oil">Peanut Oil</a></td>
                                    <td align="right">1,820.32</td>
                                    <td align="right">-0.07%</td>
                                    <td align="right" style="background-color:LightPink;">-12.83%</td>
                                    <td align="right">-4.00%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=peanuts">Groundnuts (peanuts)</a></td>
                                    <td align="right">1,850.00</td>
                                    <td align="right">-5.13%</td>
                                    <td align="right">6.47%</td>
                                    <td align="right" style="background-color:LightPink;">-10.02%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=rapeseed-oil">Rapeseed Oil</a></td>
                                    <td align="right">1,058.58</td>
                                    <td align="right">2.87%</td>
                                    <td align="right">3.16%</td>
                                    <td align="right">8.90%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=soybean-meal">Soybean Meal</a></td>
                                    <td align="right">428.86</td>
                                    <td align="right">-2.82%</td>
                                    <td align="right" style="background-color:LightPink;">-21.56%</td>
                                    <td align="right" style="background-color:LightPink;">-13.12%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=soybean-oil">Soybean Oil</a></td>
                                    <td align="right">958.56</td>
                                    <td align="right">-0.66%</td>
                                    <td align="right">-6.93%</td>
                                    <td align="right">-1.33%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=soybeans">Soybeans</a></td>
                                    <td align="right">477.30</td>
                                    <td align="right">-2.09%</td>
                                    <td align="right" style="background-color:LightPink;">-22.38%</td>
                                    <td align="right" style="background-color:LightPink;">-12.80%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=sunflower-oil">Sunflower oil</a></td>
                                    <td align="right">971.27</td>
                                    <td align="right">2.14%</td>
                                    <td align="right">-6.14%</td>
                                    <td align="right">2.96%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=coarse-wool">Coarse Wool</a></td>
                                    <td align="right">882.39</td>
                                    <td align="right">-0.10%</td>
                                    <td align="right">-2.32%</td>
                                    <td align="right">-2.77%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=copra">Copra</a></td>
                                    <td align="right">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=cotton">Cotton</a></td>
                                    <td align="right">1.99</td>
                                    <td align="right">-9.55%</td>
                                    <td align="right">-5.24%</td>
                                    <td align="right">-1.97%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=fine-wool">Fine Wool</a></td>
                                    <td align="right">925.98</td>
                                    <td align="right">-0.81%</td>
                                    <td align="right" style="background-color:LightPink;">-14.78%</td>
                                    <td align="right">-4.54%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=hard-logs">Hard Logs</a></td>
                                    <td align="right">193.69</td>
                                    <td align="right">-2.57%</td>
                                    <td align="right" style="background-color:LightPink;">-13.19%</td>
                                    <td align="right">-4.92%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=hard-sawn-wood">Hard Sawnwood</a></td>
                                    <td align="right">682.72</td>
                                    <td align="right">-1.44%</td>
                                    <td align="right">0.64%</td>
                                    <td align="right">-1.38%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=hides">Hides</a></td>
                                    <td align="right">57.62</td>
                                    <td align="right">-2.14%</td>
                                    <td align="right">-5.00%</td>
                                    <td align="right">-1.49%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=plywood">Plywood</a></td>
                                    <td align="right">355.27</td>
                                    <td align="right">-2.56%</td>
                                    <td align="right" style="background-color:LightPink;">-13.19%</td>
                                    <td align="right">-4.92%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=rubber">Rubber</a></td>
                                    <td align="right">2.28</td>
                                    <td align="right">-4.60%</td>
                                    <td align="right" style="background-color:LightGreen;">48.05%</td>
                                    <td align="right" style="background-color:LightGreen;">26.67%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=soft-logs">Soft Logs</a></td>
                                    <td align="right">204.93</td>
                                    <td align="right">0.00%</td>
                                    <td align="right">-2.91%</td>
                                    <td align="right">-6.47%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=soft-sawn-wood">Soft Sawnwood</a></td>
                                    <td align="right">328.34</td>
                                    <td align="right">0.00%</td>
                                    <td align="right">8.53%</td>
                                    <td align="right">-1.86%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=wood-pulp">Wood Pulp</a></td>
                                    <td align="right">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=aluminum">Aluminum</a></td>
                                    <td align="right">2,506.10</td>
                                    <td align="right" style="background-color:LightGreen;">12.58%</td>
                                    <td align="right">6.95%</td>
                                    <td align="right" style="background-color:LightGreen;">14.29%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=cold-rolled-steel">Cold-rolled steel</a></td>
                                    <td align="right">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=copper">Copper, grade A cathode</a></td>
                                    <td align="right">9,464.43</td>
                                    <td align="right">8.92%</td>
                                    <td align="right">7.44%</td>
                                    <td align="right" style="background-color:LightGreen;">13.50%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=gold">Gold</a></td>
                                    <td align="right">2,331.45</td>
                                    <td align="right">8.04%</td>
                                    <td align="right" style="background-color:LightGreen;">16.59%</td>
                                    <td align="right" style="background-color:LightGreen;">14.62%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=hot-rolled-steel">Hot-rolled steel</a></td>
                                    <td align="right">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=iron-ore">Iron Ore</a></td>
                                    <td align="right">112.75</td>
                                    <td align="right">2.70%</td>
                                    <td align="right">-3.95%</td>
                                    <td align="right" style="background-color:LightPink;">-16.99%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=lead">Lead</a></td>
                                    <td align="right">2,129.46</td>
                                    <td align="right">3.56%</td>
                                    <td align="right">-0.93%</td>
                                    <td align="right">2.08%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=nickel">Nickel</a></td>
                                    <td align="right">18,163.95</td>
                                    <td align="right">4.16%</td>
                                    <td align="right" style="background-color:LightPink;">-23.98%</td>
                                    <td align="right" style="background-color:LightGreen;">12.79%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=rebar">Rebar</a></td>
                                    <td align="right">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=silver">Silver</a></td>
                                    <td align="right">27.49</td>
                                    <td align="right" style="background-color:LightGreen;">12.11%</td>
                                    <td align="right">9.92%</td>
                                    <td align="right" style="background-color:LightGreen;">19.94%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=steel-wire-rod">Steel wire rod</a></td>
                                    <td align="right">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=tin">Tin</a></td>
                                    <td align="right">31,774.50</td>
                                    <td align="right" style="background-color:LightGreen;">15.75%</td>
                                    <td align="right" style="background-color:LightGreen;">23.19%</td>
                                    <td align="right" style="background-color:LightGreen;">26.59%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=uranium">Uranium</a></td>
                                    <td align="right">71.64</td>
                                    <td align="right">-0.24%</td>
                                    <td align="right" style="background-color:LightGreen;">71.55%</td>
                                    <td align="right" style="background-color:LightPink;">-10.85%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=zinc">Zinc</a></td>
                                    <td align="right">2,732.74</td>
                                    <td align="right" style="background-color:LightGreen;">11.04%</td>
                                    <td align="right">-1.26%</td>
                                    <td align="right">8.64%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=dap-fertilizer">DAP fertilizer</a></td>
                                    <td align="right">545.00</td>
                                    <td align="right" style="background-color:LightPink;">-11.74%</td>
                                    <td align="right" style="background-color:LightPink;">-14.44%</td>
                                    <td align="right">-8.60%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=potassium-chloride">Potassium Chloride</a></td>
                                    <td align="right">305.00</td>
                                    <td align="right">1.50%</td>
                                    <td align="right" style="background-color:LightPink;">-25.15%</td>
                                    <td align="right">2.95%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=rock-phosphate">Rock Phosphate</a></td>
                                    <td align="right">152.50</td>
                                    <td align="right">0.00%</td>
                                    <td align="right" style="background-color:LightPink;">-55.80%</td>
                                    <td align="right">0.00%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=triple-superphosphate">Triple Superphosphate</a></td>
                                    <td align="right">442.50</td>
                                    <td align="right">-1.45%</td>
                                    <td align="right" style="background-color:LightPink;">-19.55%</td>
                                    <td align="right">-1.80%</td>
                                </tr>
                                <tr>
                                    <td><a href="?commodity=urea">Urea</a></td>
                                    <td align="right">320.00</td>
                                    <td align="right">-3.03%</td>
                                    <td align="right">2.11%</td>
                                    <td align="right">-4.59%</td>
                                </tr>
                                </tbody>
                            </table>
            </div>


            </td></tr></tbody></table>
        </div>
    </div>
    <div class="col-xs-6 col-lg-4" style="height: auto !important; min-height: 0px !important;">
        <div id="rightpane" style="height: auto !important;">


            <!-- ATF IndexMundi Commodities 300x250, created 10/28/09 -->


            <div style="width:298px;border:1px solid gray;margin-bottom:10px;background-color:#f2f3f5">
                <p style="margin:0.5em"><a href="market/">Commodities Market</a></p>
                <ul>
                    <li>Buyers: Request price quotes</li>
                    <li>Sellers: List your products</li>
                </ul>

            </div>

            <div id="subscribe" style="width:300px;margin-top:5px;">
                <form method="post" action="https://oi.vresp.com?fid=79a9fc7b3b" target="vr_optin_popup"
                      onsubmit="window.open('http://www.verticalresponse.com', 'vr_optin_popup', 'scrollbars=yes,width=600,height=450' ); return true;">
                    <div style="font-family: verdana; font-size: 11px; padding: 10px; border: 1px solid #000000; background: #dddddd">
                        <strong><span style="color: #333333;">Sign up to get an email when we update our commodities data</span></strong><br><br>
                        <label style="color: #333333;">Email Address:</label>&nbsp;
                        <input name="email_address" size="21"
                               style="margin-top: 5px; border: 1px solid #999; padding: 3px;"><br>
                        <input type="submit" value="Join Now"
                               style="margin-top: 5px; border: 1px solid #999; padding: 3px;"><br>
                        <br>Your email will never be shared, sold, nor rented. We hate SPAM as much you do.
                        <!--<span style="color: #333333;"><a href="http://www.verticalresponse.com" title="Email Marketing by VerticalResponse">Email Marketing</a> by VerticalResponse</span>-->
                    </div>
                </form>
            </div>


            <!-- IndexMundi Commodities 300x250 -->


            <div class="sidePanel">
                <div style="padding:10px;">
                    <h5 style="font-size:1em;margin:0px 0px 0.25em">Languages</h5>
                    <ul style="list-style:none none;margin:0px;padding:0.25em 0px">
                        <li><a href="/es/precios-de-mercado/">Español</a></li>
                        <li><a href="/pt/preços-de-mercado/">Português</a></li>
                        <li><a href="/de/rohstoffpreise/">Deutsch</a></li>
                        <li><a href="/fr/matieres-premieres/">Français</a></li>
                    </ul>
                </div>
            </div>


            <!-- IndexMundi Commodities 300x250 -->


        </div>
    </div>
@endsection