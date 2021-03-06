@extends('layouts.sidenav')
@section('title', 'cash')

@section('head-css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="css/custom/cash/style.css" id="factor">

@endsection
@section('head-js')
    <script type="text/javascript" src="js/custom/cash/JsBarcode.all.min.js"></script><!-- jsBarcode -->
    <script type="text/javascript" src="js/custom/cash/moment.js"></script>
    <script type="text/javascript" src="js/custom/cash/persian-date-0.1.8b.min.js"></script>
    <script type="text/javascript" src="js/custom/cash/main.js"></script>
@endsection
@section('body')
    <div class="cashFactor">
    <section class="cash-factor">
        {{csrf_field()}}
        <header class="cash-factor-header">
            <h1 class="cash-factor-title">نام رستوران</h1>
            <h5 class="cash-factor-number">شماره فاکتور:</h5>
            {{--<h5 class="cash-factor-date">تاریخ:</h5>--}}
            <p id="date2"></p>
        </header>
        <table class="performance-facts__table">

            <thead>
            <tr>
                <th></th>
                <th>ردیف</th>
                <th>نام کالا</th>
                <th>تعداد</th>

            </tr>
            </thead>

            <tbody>
            <tr>
                <td><a class="delete"><img class="deleteIcon" src="assets/home/close-cross.png"></a></td>
                <td>1</td>
                <td>پیتزا</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a class="delete"><img class="deleteIcon" src="assets/home/close-cross.png"></a></td>
                <td>2</td>
                <td>پیتزا</td>
                <td>2</td>
            </tr>
            {{--<tr class="thick-row">--}}
            {{--<td colspan="3" class="small-info">--}}
            {{--<b>% Daily Value*</b>--}}
            {{--</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<th colspan="2">--}}
            {{--<b>Total Fat</b>--}}
            {{--14g--}}
            {{--</th>--}}
            {{--<td>--}}
            {{--<b>22%</b>--}}
            {{--</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td class="blank-cell">--}}
            {{--</td>--}}
            {{--<th>--}}
            {{--Saturated Fat--}}
            {{--9g--}}
            {{--</th>--}}
            {{--<td>--}}
            {{--<b>22%</b>--}}
            {{--</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td class="blank-cell">--}}
            {{--</td>--}}
            {{--<th>--}}
            {{--Trans Fat--}}
            {{--0g--}}
            {{--</th>--}}
            {{--<td>--}}
            {{--</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<th colspan="2">--}}
            {{--<b>Cholesterol</b>--}}
            {{--55mg--}}
            {{--</th>--}}
            {{--<td>--}}
            {{--<b>18%</b>--}}
            {{--</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<th colspan="2">--}}
            {{--<b>Sodium</b>--}}
            {{--40mg--}}
            {{--</th>--}}
            {{--<td>--}}
            {{--<b>2%</b>--}}
            {{--</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<th colspan="2">--}}
            {{--<b>Total Carbohydrate</b>--}}
            {{--17g--}}
            {{--</th>--}}
            {{--<td>--}}
            {{--<b>6%</b>--}}
            {{--</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td class="blank-cell">--}}
            {{--</td>--}}
            {{--<th>--}}
            {{--Dietary Fiber--}}
            {{--1g--}}
            {{--</th>--}}
            {{--<td>--}}
            {{--<b>4%</b>--}}
            {{--</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td class="blank-cell">--}}
            {{--</td>--}}
            {{--<th>--}}
            {{--Sugars--}}
            {{--14g--}}
            {{--</th>--}}
            {{--<td>--}}
            {{--</td>--}}
            {{--</tr>--}}
            {{--<tr class="thick-end">--}}
            {{--<th colspan="2">--}}
            {{--<b>Protein</b>--}}
            {{--3g--}}
            {{--</th>--}}
            {{--<td>--}}
            {{--</td>--}}
            {{--</tr>--}}
            </tbody>
        </table>

        <table class="performance-facts__table--grid">
            <thead>

            </thead>
            <tbody>
            <tr class="thin-end">
                <td colspan="2">مالیات بر ارزش افزوده :</td>

            </tr>
            <tr>
                <td colspan="2">تخفیف :</td>

            </tr>
            <tr class="thick-end">
                <td colspan="2">جمع کل :</td>

            </tr>
            </tbody>
        </table>

        {{--<p class="small-info">* Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs:</p>--}}

        <div class="barcode">
            <svg id="barcode2"></svg>
        </div>
        <table class="performance-facts__table--small small-info">
            {{--<thead>--}}
            {{--<tr>--}}
            {{--<td colspan="2"></td>--}}
            {{--<th>Calories:</th>--}}
            {{--<th>2,000</th>--}}
            {{--<th>2,500</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            <tbody>
            <tr>
                <td>مستور و مست هر دو چو از یک قبیله اند
                    <br>ما دل به عشوه ی که دهیم اختیار چیست
                </td>
            </tr>

            {{--<tr>--}}
            {{--<td class="blank-cell"></td>--}}
            {{--<th>Saturated Fat</th>--}}
            {{--<td>Less than</td>--}}
            {{--<td>20g</td>--}}
            {{--<td>25g</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<th colspan="2">Cholesterol</th>--}}
            {{--<td>Less than</td>--}}
            {{--<td>300mg</td>--}}
            {{--<td>300 mg</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<th colspan="2">Sodium</th>--}}
            {{--<td>Less than</td>--}}
            {{--<td>2,400mg</td>--}}
            {{--<td>2,400mg</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<th colspan="3">Total Carbohydrate</th>--}}
            {{--<td>300g</td>--}}
            {{--<td>375g</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
            {{--<td class="blank-cell"></td>--}}
            {{--<th colspan="2">Dietary Fiber</th>--}}
            {{--<td>25g</td>--}}
            {{--<td>30g</td>--}}
            {{--</tr>--}}
            </tbody>
        </table>

        {{--<p class="small-info">--}}
        {{--Calories per gram:--}}
        {{--</p>--}}
        {{--<p class="small-info text-center">--}}
        {{--Fat 9--}}
        {{--&bull;--}}
        {{--Carbohydrate 4--}}
        {{--&bull;--}}
        {{--Protein 4--}}
        {{--</p>--}}

    </section>
    </div>
    <button class="btn btn-primary" id="click">her</button>

@endsection