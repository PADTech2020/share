<?php

$client = new GuzzleHttp\Client();
$res = $client->get('https://api.currencyfreaks.com/latest?apikey=9c2b0c997e8f4812b3ea6106f1bbdaa2&symbols=TRY,GBP,EUR,LBP,SYP,BHD,QAR,OMR,KWD,SAR,TND');
if ($res->getStatusCode()) // 200
    $res= json_decode($res->getBody());
$date= $res->date;
$date = strtotime($date);
$date =date('Y-M-d', $date);
$rates= $res->rates;
$base= $res->base;


?>


    <div class="aside-box currencies-widget">
        <div class="aside-box-header">
            <h4>{{$date}}</h4>
        </div>
        <div class="aside-box-content">
            <table>


            @foreach($rates as $currency=>$val)


                    <tr>
                        <td width="50px">
                            <img width="25" src="/themes/newstv/images/flags/{!! strtolower($currency)  !!}.png">
                        </td>
                        <td width="80px">
                            {{$currency}}
                        </td>
                        <td width="80px">
                            {{$val}}
                        </td>
                    </tr>
            @endforeach
            </table>
        </div>
    </div>

