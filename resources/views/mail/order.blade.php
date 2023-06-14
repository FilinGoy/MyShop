<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ваш заказ</title>
</head>

<body>
    <table
        style="border-width: 16px; border-style: solid; border-color: rgb(56, 56, 56) !important; border-image: initial; background-color: rgb(35, 35, 35) !important;"
        border="0" cellpadding="0" cellspacing="0" width="600" align="center" bgcolor="#232323">
        <tbody style="border-color: rgb(35, 35, 35) !important;">
            <tr style="border-color: rgb(35, 35, 35) !important;">
                <td width="568" valign="top" bgcolor="#DC0D2A"
                    style="background-color: rgb(220, 13, 42) !important;">
                    <table border="0" cellpadding="0" cellspacing="0" width="568"
                        style="border-color: rgb(255, 255, 255) !important;">
                        <tbody style="border-color: rgb(255, 255, 255) !important;">
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td colspan="3" height="16" bgcolor="#DC0D2A"
                                    style="background-color: rgb(220, 13, 42) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td width="20" bgcolor="#DC0D2A"
                                    style="background-color: rgb(220, 13, 42) !important;">&nbsp;</td>
                                <td valign="top" bgcolor="#DC0D2A"
                                    style="background-color: rgb(220, 13, 42) !important;">
                                    <h4>Дом Вкуса</h4>
                                </td>
                                <td width="20" bgcolor="#DC0D2A"
                                    style="background-color: rgb(220, 13, 42) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td colspan="3" height="16" bgcolor="#DC0D2A"
                                    style="background-color: rgb(220, 13, 42) !important;">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr style="border-color: rgb(35, 35, 35) !important;">
                <td width="568" valign="top" style="border-color: rgb(35, 35, 35) !important;">

                    <table border="0" cellpadding="0" cellspacing="0" width="568"
                        style="border-color: rgb(255, 255, 255) !important;">
                        <tbody style="border-color: rgb(255, 255, 255) !important;">
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td colspan="3" height="24" style="border-color: rgb(35, 35, 35) !important;">
                                    &nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td width="20" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td valign="top" style="border-color: rgb(35, 35, 35) !important;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="528"
                                        style="border-color: rgb(255, 255, 255) !important;">
                                        <tbody style="border-color: rgb(255, 255, 255) !important;">
                                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                                <td valign="top" height="16"
                                                    style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                            </tr>
                                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                                <td valign="top" style="border-color: rgb(35, 35, 35) !important;">
                                                    <div
                                                        style="font-family: Verdana, sans-serif; font-size: 20px; line-height: 30px; border-color: rgb(35, 35, 35) !important;">
                                                        Здравствуйте,
                                                        {{ $order->first_name }}&nbsp;{{ $order->last_name }}.
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                                <td valign="top" height="32"
                                                    style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                            </tr>
                                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                                <td valign="top" style="border-color: rgb(35, 35, 35) !important;">
                                                    <div
                                                        style="font-family: Verdana, sans-serif; font-size: 14px; line-height: 20px; border-color: rgb(35, 35, 35) !important;">
                                                        Спасибо за ваш заказ в
                                                        <a style="text-decoration: none; border-color: rgb(35, 35, 35) !important;"
                                                            href="{{ asset('/') }}" target="_blank"
                                                            rel=" noopener noreferrer">
                                                            <span
                                                                style="color: rgb(105, 149, 255) !important;">интернет-магазине
                                                                Дом вкуса</span>!
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                                <td valign="top" height="24"
                                                    style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                            </tr>
                                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                                <td valign="top" style="border-color: rgb(35, 35, 35) !important;">
                                                    <div
                                                        style="font-family: Verdana, sans-serif; font-size: 14px; line-height: 20px; border-color: rgb(35, 35, 35) !important;">
                                                        Заказ уже обрабатывается службой комплектации. Вы можете
                                                        отслеживать его статус в <a
                                                            style="text-decoration: none; border-color: rgb(35, 35, 35) !important;"
                                                            href="{{ asset('/profile/orders') }}" target="_blank"
                                                            rel=" noopener noreferrer"><span
                                                                style="color: rgb(105, 149, 255) !important;">Личном
                                                                кабинете</span></a> интернет-магазина.
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                                <td valign="top" height="24"
                                                    style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td width="20" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>

                    <table border="0" cellpadding="0" cellspacing="0" width="100%"
                        style="border-color: rgb(255, 255, 255) !important;">
                        <tbody style="border-color: rgb(255, 255, 255) !important;">
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td height="16" bgcolor="#313131"
                                    style="background-color: rgb(49, 49, 49) !important; border-color: rgb(67, 67, 67) !important;">
                                    <div style="border-color: rgb(35, 35, 35) !important;">&nbsp;</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table border="0" cellpadding="0" cellspacing="0" width="568"
                        style="border-color: rgb(255, 255, 255) !important;">
                        <tbody style="border-color: rgb(255, 255, 255) !important;">
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td colspan="4" height="24"
                                    style="line-height: 24px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td width="24" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td valign="bottom" style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="font-family: Verdana, sans-serif; font-size: 20px; line-height: 30px; border-color: rgb(35, 35, 35) !important;">
                                        Ваш заказ #{{ $order->id }} </div>
                                </td>
                                <td valign="bottom" align="right" style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                        {{ $order->created_at }} </div>
                                </td>
                                <td width="24" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td colspan="4" height="16"
                                    style="line-height: 16px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>

                    <table border="0" cellpadding="0" cellspacing="0" width="568"
                        style="border-color: rgb(255, 255, 255) !important;">
                        <tbody style="border-color: rgb(255, 255, 255) !important;">
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td width="24" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td valign="top" style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="color: rgb(151, 151, 151); font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                        Контактная информация:
                                    </div>
                                </td>
                                <td width="5" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td width="360" valign="top" style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                        {{ $order->first_name }}&nbsp;{{ $order->last_name }}, <span
                                            class="js-phone-number"
                                            style="border-color: rgb(35, 35, 35) !important;">{{ $number }}</span>
                                    </div>
                                </td>
                                <td width="24" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td height="7" width="24"
                                    style="line-height: 7px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td height="7" colspan="3"
                                    style="border-bottom-width: 1px; border-bottom-style: solid; border-color: rgb(35, 35, 35) !important; line-height: 7px;">
                                    &nbsp;</td>
                                <td height="7" width="24"
                                    style="line-height: 7px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td height="8" colspan="4"
                                    style="line-height: 8px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td width="24" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td valign="top" style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="color: rgb(151, 151, 151); font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                        Способ оплаты:
                                    </div>
                                </td>
                                <td width="5" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td width="360" valign="top" style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                        {{ $payment }} </div>
                                </td>
                                <td width="24" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td height="7" width="24"
                                    style="line-height: 7px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td height="7" colspan="3"
                                    style="border-bottom-width: 1px; border-bottom-style: solid; border-color: rgb(35, 35, 35) !important; line-height: 7px;">
                                    &nbsp;</td>
                                <td height="7" width="24"
                                    style="line-height: 7px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td height="8" colspan="4"
                                    style="line-height: 8px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td width="24" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td valign="top" style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="color: rgb(151, 151, 151); font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                        Информация о доставке:
                                    </div>
                                </td>
                                <td width="5" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td width="360" valign="top" style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                        {{ $order->address }} </div>
                                </td>
                                <td width="24" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td height="7" width="24"
                                    style="line-height: 7px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td height="7" colspan="3"
                                    style="border-bottom-width: 1px; border-bottom-style: solid; border-color: rgb(35, 35, 35) !important; line-height: 7px;">
                                    &nbsp;</td>
                                <td height="7" width="24"
                                    style="line-height: 7px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td height="8" colspan="4"
                                    style="line-height: 8px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td width="24" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td valign="top" style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="color: rgb(151, 151, 151); font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                        Дата доставки:
                                    </div>
                                </td>
                                <td width="5" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td width="360" valign="top" style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                        {{ $order->datetime_delivery }} (в течении дня)
                                    </div>
                                </td>
                                <td width="24" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td height="7" width="24"
                                    style="line-height: 7px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td height="7" colspan="3"
                                    style="border-bottom-width: 1px; border-bottom-style: solid; border-color: rgb(35, 35, 35) !important; line-height: 7px;">
                                    &nbsp;</td>
                                <td height="7" width="24"
                                    style="line-height: 7px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td height="8" colspan="4"
                                    style="line-height: 8px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>

                    @if ($order->payment_id == 3)
                        <h4 style="display: block; margin: 0 auto; text-align:center;">QR код для оплаты товара</h4>
                        <img src="https://createqr.ru/api/v1/qr-pay?Name=ООО «Дом Вкуса»&PersonalAcc=00000000000000000000&BankName=ПАО 'СБЕРБАНК' &BIC=044525593&CorrespAcc=30101810200000000593&Sum={{ $order->total_price * 100 }}&Purpose=Оплата заказа №{{ $order->id }}"
                            width="256" height="256" alt="QR-код для оплаты"
                            style="display: block; margin: 0 auto;" />
                    @endif

                    <table border="0" cellpadding="0" cellspacing="0" width="568"
                        style="border-color: rgb(255, 255, 255) !important;">
                        <tbody style="border-color: rgb(255, 255, 255) !important;">
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td height="24" colspan="3"
                                    style="line-height: 24px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td width="24" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td valign="top" style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="font-family: Verdana, sans-serif; font-size: 20px; line-height: 30px; border-color: rgb(35, 35, 35) !important;">
                                        Состав заказа
                                    </div>
                                </td>
                                <td width="24" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td height="16" colspan="3"
                                    style="line-height: 16px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td width="24" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td valign="top" style="border-color: rgb(35, 35, 35) !important;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="520"
                                        style="border-color: rgb(255, 255, 255) !important;">
                                        <tbody style="border-color: rgb(255, 255, 255) !important;">
                                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                                <td valign="top" style="border-color: rgb(35, 35, 35) !important;">
                                                    <div
                                                        style="display: block; width: 20px; height: 20px; color: rgb(255, 94, 90) !important; font-weight: bold;">
                                                        ⓘ</div>
                                                </td>
                                                <td width="18" style="border-color: rgb(35, 35, 35) !important;">
                                                    &nbsp;</td>
                                                <td valign="top" style="border-color: rgb(35, 35, 35) !important;">
                                                    <div
                                                        style="font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                                        Внимание! Резервирование товаров и фиксирование цен
                                                        осуществляется в день, предшествующий дню доставки заказа.
                                                        До этого момента цены и количество товаров являются
                                                        предварительными.
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td width="24" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td height="16" colspan="3"
                                    style="line-height: 16px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>

                    <table border="0" cellpadding="0" cellspacing="0" width="568"
                        style="border-color: rgb(255, 255, 255) !important;">
                        <tbody style="border-color: rgb(255, 255, 255) !important;">
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td height="4" colspan="9"
                                    style="line-height: 4px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td width="1%"
                                    style="padding-left: 24px; border-color: rgb(35, 35, 35) !important;"></td>
                                <td valign="top" align="left" width="220"
                                    style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="color: rgb(151, 151, 151); font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                        Позиция
                                    </div>
                                </td>
                                <td width="5" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td valign="top" align="right" width="105"
                                    style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="color: rgb(151, 151, 151); font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; width: 35px; text-align: left; border-color: rgb(35, 35, 35) !important;">
                                        Цена
                                    </div>
                                </td>
                                <td width="5" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td valign="top" align="right" width="105"
                                    style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="color: rgb(151, 151, 151); font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                        Кол-во
                                    </div>
                                </td>
                                <td width="5" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td valign="top" align="right" width="75"
                                    style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="color: rgb(151, 151, 151); font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                        Сумма
                                    </div>
                                </td>
                                <td width="1%"
                                    style="padding-right: 24px; border-color: rgb(35, 35, 35) !important;"></td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td height="3" width="1%"
                                    style="line-height: 3px; padding-left: 24px; border-color: rgb(35, 35, 35) !important;">
                                </td>
                                <td height="3" colspan="7"
                                    style="line-height: 3px; border-bottom-width: 1px; border-bottom-style: solid; border-color: rgb(35, 35, 35) !important;">
                                    &nbsp;</td>
                                <td height="3" width="1%"
                                    style="line-height: 3px; padding-right: 24px; border-color: rgb(35, 35, 35) !important;">
                                </td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td height="4" colspan="9"
                                    style="line-height: 4px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            @foreach ($products as $product)
                                <tr style="border-color: rgb(255, 255, 255) !important;">
                                    <td width="1%"
                                        style="padding-left: 24px; border-color: rgb(35, 35, 35) !important;"></td>
                                    <td valign="top" align="left" width="330"
                                        style="border-color: rgb(35, 35, 35) !important;">
                                        <div
                                            style="font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                            {{ $product['title'] }} </div>
                                    </td>
                                    <td width="5" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                    <td valign="top" align="right" width="55"
                                        style="border-color: rgb(35, 35, 35) !important;">
                                        <div
                                            style="font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                            {{ $product['price'] }}
                                        </div>
                                    </td>
                                    <td width="5" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                    <td valign="top" align="right" width="55"
                                        style="border-color: rgb(35, 35, 35) !important;">
                                        <div
                                            style="font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                            {{ $product['quantity'] }}
                                        </div>
                                    </td>
                                    <td width="5" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                    <td valign="top" align="right" width="65"
                                        style="border-color: rgb(35, 35, 35) !important;">
                                        <div
                                            style="font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                            {{ number_format($product['price'] * $product['quantity'], 2) }}
                                        </div>
                                    </td>
                                    <td width="1%"
                                        style="padding-right: 24px; border-color: rgb(35, 35, 35) !important;"></td>
                                </tr>
                            @endforeach
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td width="1%"
                                    style="padding-left: 24px; border-color: rgb(35, 35, 35) !important;"></td>
                                <td colspan="5" valign="top" align="right" width="65"
                                    style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="font-family: Verdana, sans-serif; font-size: 12px; font-weight: bold; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                        Сумма заказа:
                                    </div>
                                </td>
                                <td width="5" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td valign="top" align="right" width="75"
                                    style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="font-family: Verdana, sans-serif; font-size: 12px; font-weight: bold; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                        {{ $order->total_price }} ₽
                                    </div>
                                </td>
                                <td width="1%"
                                    style="padding-right: 24px; border-color: rgb(35, 35, 35) !important;"></td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td height="24" colspan="9"
                                    style="line-height: 24px; border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr style="border-color: rgb(35, 35, 35) !important;">
                <td valign="top"
                    style="border-top-width: 1px; border-top-style: solid; border-color: rgb(35, 35, 35) !important;">
                    <table border="0" cellpadding="0" cellspacing="0" width="568"
                        style="border-color: rgb(255, 255, 255) !important;">
                        <tbody style="border-color: rgb(255, 255, 255) !important;">
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td colspan="3" height="24" style="border-color: rgb(35, 35, 35) !important;">
                                    &nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td width="20" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                        Возникли вопросы? Напишите нам
                                        на электронную почту
                                        <a style="text-decoration: none; border-color: rgb(35, 35, 35) !important;"
                                            href="//e.mail.ru/compose/?mailto=mailto%3ainfo@shop.ru" target="_blank"
                                            rel=" noopener noreferrer">
                                            <span style="color: rgb(105, 149, 255) !important;">info@shop.ru</span>
                                        </a>
                                        или позвоните по номеру горячей линии
                                        8&nbsp;800&nbsp;999&nbsp;99&nbsp;99. Мы всегда на связи!
                                    </div>
                                </td>
                                <td width="20" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td width="20" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                                <td height="24" style="border-color: rgb(35, 35, 35) !important;">
                                    <div
                                        style="font-family: Verdana, sans-serif; font-size: 12px; line-height: 16px; border-color: rgb(35, 35, 35) !important;">
                                        С уважением, команда Дом Вкуса.
                                    </div>
                                </td>
                                <td width="20" style="border-color: rgb(35, 35, 35) !important;">&nbsp;</td>
                            </tr>
                            <tr style="border-color: rgb(255, 255, 255) !important;">
                                <td colspan="3" height="24" style="border-color: rgb(35, 35, 35) !important;">
                                    &nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
