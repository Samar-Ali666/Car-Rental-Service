<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">
    <title>Invoice</title>
    
    <!--[if mso]>
    <style type="text/css">
      .f-fallback  {
        font-family: Arial, sans-serif;
      }
    </style>
<![endif]-->
</head>
<body style="font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif; margin-top: 60px">
    <span class="preheader" style="visibility: hidden;mso-hide: all;font-size: 1px;line-height: 1px;max-height: 0;max-width: 0;opacity: 0;overflow: hidden;display: none !important;">This is a receipt for your recent purchase on [purchased_date]. No payment is due with this receipt.</span>
    <table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
      <tr>
        <td align="center" style="word-break: break-word;font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px;">
          <table class="email-content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
              <td class="email-masthead" style="word-break: break-word;font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px; text-align: left">
              </td>
          </tr>
          <!-- Email Body -->
          <tr>
              <td class="email-body" width="100%" cellpadding="0" cellspacing="0" style="word-break: break-word;font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px;">
                <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                  <!-- Body content -->
                  <tr>
                    <td class="content-cell" style="word-break: break-word;font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px;">
                      <div class="f-fallback">
                        <h1 style="margin-top: 0;color: #333333;font-size: 22px;font-weight: bold;text-align: left;">Hi {{$booking->user->name}},</h1>
                        <p style="margin: .4em 0 1.1875em;font-size: 16px;line-height: 1.625;">Thanks for using <span style="color: #F44c67"><b>issem car rentals</b></span>. This email is the receipt for your booking. payment is on delivery.</p>
                        <table class="purchase" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                          <tr>
                            <td style="word-break: break-word;font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px;">
                              <h3 style="margin-top: 0;color: #333333;font-size: 14px;font-weight: bold;text-align: left;">Receipt ID # {{$booking->id}}</h3></td>
                              <td style="word-break: break-word;font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px;">
                                  <h3 class="align-right" style="margin-top: 0;color: #333333;font-size: 14px;font-weight: bold;text-align: right;">Date: {{$booking->created_at}}</h3></td>
                              </tr>
                              <tr>
                                <td colspan="2" style="word-break: break-word;font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px;">
                                  <table class="purchase_content" width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <th class="purchase_heading" align="left" style="font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px;">
                                        <p class="f-fallback" style="margin: .4em 0 1.1875em;font-size: 16px;line-height: 1.625;">Car</p>
                                    </th>
                                    <th class="purchase_heading" align="right" style="font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px;">
                                        <p class="f-fallback" style="margin: .4em 0 1.1875em;font-size: 16px;line-height: 1.625;">Rent</p>
                                    </th>
                                </tr>
                                <tr>
                                  <td width="80%" class="purchase_item" style="word-break: break-word;font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px; color: #f44c67"><span class="f-fallback">{{$booking->car->name}}</span></td>
                                  <td class="purchase_item" width="20%" style="word-break: break-word;font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px;"><span class="f-fallback">{{$booking->car->rent}} PKR</span></td>
                              </tr>
                              <tr>
                                  <td width="80%" class="purchase_footer" valign="middle" style="word-break: break-word;font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px;">
                                    <p class="f-fallback purchase_total purchase_total--label" style="margin: .4em 0 1.1875em;font-size: 16px;line-height: 1.625; color: #f44c67"><b>Total</b></p>
                                </td>
                                <td width="20%" class="purchase_footer" valign="middle" style="word-break: break-word;font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px;">
                                    <p class="f-fallback purchase_total" style="margin: .4em 0 1.1875em;font-size: 16px;line-height: 1.625;">{{$booking->total}} PKR</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <p style="margin: .4em 0 1.1875em;font-size: 16px;line-height: 1.625;">If you have any questions about this receipt, simply reply to this email or reach out to our <a href="http://issem-rent-a-ride.test/contact" style="color: #f44c67;">support team</a> for help.</p>
            <p style="margin: .4em 0 1.1875em;font-size: 16px;line-height: 1.625;">Cheers,
              <br>The Issem Car Rental's Team</p>
              <!-- Action -->
              <table class="body-action" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                  <tr>
                    <td align="center" style="word-break: break-word;font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px;">
                              <!-- Border based button
                                 https://litmus.com/blog/a-guide-to-bulletproof-buttons-in-email-design -->
                                 <table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation">
                                    <tr>
                                      <td align="center" style="word-break: break-word;font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px;">
                                        <a href="http://issem-rent-a-ride.test" class="f-fallback button button--blue" target="_blank" style="color: #FFF;background-color: #f44c67;border-top: 10px solid #f44c67;border-right: 18px solid #f44c67;border-bottom: 10px solid #f44c67;border-left: 18px solid #f44c67;display: inline-block;text-decoration: none;border-radius: 3px;box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16);-webkit-text-size-adjust: none;box-sizing: border-box;">Visit Issen Rentals</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <!-- Sub copy -->
            </div>
        </td>
    </tr>
</table>
</td>
</tr>
<tr>
  <td style="word-break: break-word;font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px;">
    <table class="email-footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
      <tr>
        <td class="content-cell" align="center" style="word-break: break-word;font-family: &quot;Nunito Sans&quot;, Helvetica, Arial, sans-serif;font-size: 16px;">
          <p class="f-fallback sub align-center" style="margin: .4em 0 1.1875em;font-size: 13px;line-height: 1.625;text-align: center;">&copy; 2021 issem-rent-a-ride.com. All rights reserved.</p>
          <p class="f-fallback sub align-center" style="margin: .4em 0 1.1875em;font-size: 13px;line-height: 1.625;text-align: center;">
            [Issem Car Rentals, LLC]
            <br>Shahpur stop adyala road.
            <br>Rawalpindi
        </p>
    </td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>