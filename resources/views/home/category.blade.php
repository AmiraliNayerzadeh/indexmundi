@extends('home.layout.master')

@section('content')

    <div class="side-body">
        <div class="col-xs-12 col-sm-6 col-lg-8" style="height: auto !important; min-height: 0px !important;">
            <div id="header" style="height: auto !important;">
                <div id="nav">
                    <a href="/">Home</a> &gt; <a href="/commodities/">Commodity Prices</a> &gt; <a
                            href="?commodity=corn">POPCORN</a>
                </div>
            </div>

            <div class="midPanel">
                <table style="width: 100%" border="0">
                    <tbody>
                    <tr>
                        <td>


                            <div id="divDaily">
                                <h1>Popcorn Monthly Price</h1>
                                <div class="dailyText">
                                    <p>
                                        Yellow Popcorn, FOB, any Port of South America, South Africa Price in US$ per
                                        metric ton <br>
                                        As of: May 2024 <br>
                                        Source: South America Market ,South Africa Market
                                    </p>
                                </div>
                            </div>
                            <div id="divMonthly">

                                <h1><span id="lblCaption">Popcorn Monthly Price - US Dollars per Metric Ton</span></h1>
                                <!--<p style="background-color:lightyellow"><b>Announcement:</b> Some historical prices are temporarily unavailable due to methodology changes in our data sources.</p>-->
                                <p></p>

                                <div>


                                    {!! $chart->container() !!}
                                    {!! $chart->script() !!}

                                </div>

                            </div>


                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-xs-6 col-lg-4">
            <div id="rightpane">

                <div style="margin-top:5px;width:300px;border:1px solid #D4D4D4;">

                    <div style="padding:12px">
                        <span class="st_email" st_processed="yes"><span
                                    style="text-decoration: none; color: rgb(0, 0, 0); display: inline-block; cursor: pointer; padding-left: 0px; padding-right: 0px; width: 16px;"
                                    class="stButton"><span class="chicklets email">&nbsp;</span></span></span>
                        <span class="st_facebook" st_processed="yes"><span
                                    style="text-decoration: none; color: rgb(0, 0, 0); display: inline-block; cursor: pointer; padding-left: 0px; padding-right: 0px; width: 16px;"
                                    class="stButton"><span class="chicklets facebook">&nbsp;</span></span></span>
                        <span class="st_twitter" st_processed="yes"><span
                                    style="text-decoration: none; color: rgb(0, 0, 0); display: inline-block; cursor: pointer; padding-left: 0px; padding-right: 0px; width: 16px;"
                                    class="stButton"><span class="chicklets twitter">&nbsp;</span></span></span>
                        <span class="st_stumbleupon" st_processed="yes"><span
                                    style="text-decoration: none; color: rgb(0, 0, 0); display: inline-block; cursor: pointer; padding-left: 0px; padding-right: 0px; width: 16px;"
                                    class="stButton"><span class="chicklets stumbleupon">&nbsp;</span></span></span>
                        <span class="st_reddit" st_processed="yes"><span
                                    style="text-decoration: none; color: rgb(0, 0, 0); display: inline-block; cursor: pointer; padding-left: 0px; padding-right: 0px; width: 16px;"
                                    class="stButton"><span class="chicklets reddit">&nbsp;</span></span></span>
                        <span class="st_sharethis" displaytext="ShareThis" st_processed="yes"><span
                                    style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;"
                                    class="stButton"><span class="chicklets sharethis">ShareThis</span></span></span>
                        <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
                        <script type="text/javascript">stLight.options({publisher: 'a1a99e70-c9fa-49e8-a647-6ed66a0dba95'});</script>
                    </div>

                </div>
                <div style="margin-top:5px;width:300px;border:1px solid #D4D4D4;margin-bottom:5px;">
                    <div style="padding:12px 0 12px 12px;float:left;">
                        <iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.indexmundi.com%2Fcommodities%2F&amp;width=76&amp;layout=button_count&amp;action=like&amp;size=small&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=477929958891399"
                                width="76" height="21" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="0" allowtransparency="true"></iframe>
                    </div>

                    <div style="padding:12px 0 12px 12px;float:left;">
                        <script type="text/javascript" src="//platform.linkedin.com/in.js">lang: en_US</script>
                        <span class="IN-widget" data-lnkd-debug="<script type=&quot;IN/share+init&quot;></script>"
                              style="display: inline-block; line-height: 1; vertical-align: bottom; padding: 0px; margin: 0px; text-indent: 0px; text-align: center;"><span
                                    style="padding: 0px !important; margin: 0px !important; text-indent: 0px !important; display: inline-block !important; vertical-align: bottom !important; font-size: 1px !important;"><button
                                        class="IN-bf195e49-eb86-4856-9b9f-1c8710d456be-1G9ISYhSF8XoOmdcl0yKDu"><xdoor-icon
                                            aria-hidden="true"><svg viewBox="0 0 24 24" width="24px" height="24px" x="0"
                                                                    y="0" preserveAspectRatio="xMinYMin meet">
      <g style="fill: currentColor">
        <rect x="-0.003" style="fill:none;" width="24" height="24"></rect>
        <path style=""
              d="M20,2h-16c-1.1,0-2,0.9-2,2v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2zM8,19h-3v-9h3V19zM6.5,8.8C5.5,8.8,4.7,8,4.7,7s0.8-1.8,1.8-1.8S8.3,6,8.3,7S7.5,8.8,6.5,8.8zM19,19h-3v-4c0-1.4-0.6-2-1.5-2c-1.1,0-1.5,0.8-1.5,2.2V19h-3v-9h2.9v1.1c0.5-0.7,1.4-1.3,2.6-1.3c2.3,0,3.5,1.1,3.5,3.7V19z"></path>
      </g>
    </svg></xdoor-icon>Share</button></span></span></div>
                    <div style="clear:both;"></div>
                </div>

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
                <div class="sidePanel">
                    <div style="padding:10px;">
                        <h5 style="font-size:1em;margin:0px 0px 0.25em">Coming Soon</h5>
                        <ul style="list-style:none none;margin:0px;padding:0.25em 0px">
                            <li><a href="https://www.indexmundi.com/commodities/futures/">Futures</a></li>
                        </ul>
                    </div>
                </div>

                <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- IndexMundi Commodities 300x250 -->
                <ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px"
                     data-ad-client="ca-pub-5592729262323637" data-ad-slot="1476922198" data-adsbygoogle-status="done">
                    <div id="aswift_4_host"
                         style="border: none; height: 250px; width: 300px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block;"></div>
                </ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </div>
@endsection