<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet"  href="{{asset("css/myStyles.css")}}" />


    </head>
    <body>

        <div class="container">

            <h1>Currency Converter</h1>


            <form class="form-inline" action="/" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="currencyamount"> Enter Ringgit: </label>
                    <input type="text" name="currencyamount" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="currencytype"> Choose currency to be converted to: </label>
                    <select name="currencytype">
                        @foreach ($form_currencylist as $ratetype => $ratevalue)
                            <option value={{$ratevalue}}>{{$ratetype}}</option>
                        @endforeach
                    </select>

                </div>


                <input type="submit" value="convert" />
                
            </form>
            <br/>
            <span>
                <h5>Answer: <i>
                    @if (isset($converted))
                        {{$converted}}
                    @endif


                </i></h5>
                
            </span>

        </div>
    </body>
</html>
