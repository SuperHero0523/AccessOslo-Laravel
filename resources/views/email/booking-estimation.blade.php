<html>
  <head>
    <title>Aircraft Chaters- Booking Estimation</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body bgcolor="#f8f6f0">
  <table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="3">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_01.jpg" width="500" height="226" alt=""></td>
    </tr>
    <tr>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_02.jpg" width="76" height="30" alt=""></td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_03.jpg" width="345" height="30" alt=""></td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_04.jpg" width="79" height="30" alt=""></td>
    </tr>
    <tr>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_05.jpg" width="76" height="73" alt=""></td>
      <td valign="top" style="background: #FFF;padding: 0px; margin: 0px; outline: none; border: none;" width="345" height="73">
        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" background="#FFF">
          <tr>
            <td valign="top" style="background: #fff;">
              <p style="font-family: 'Arial'; text-transform: uppercase; font-size: 18px; color: #c59d3d; line-height: 35px; margin: 0px;">Booking</p>
            </td>
            <td valign="top">
              <p style="font-family: 'Arial'; font-size: 14px; color: #5f6062; line-height: 25px; margin: 0px; text-align: right;">{{$booking_charter->updated_at}}</p>
            </td>
          </tr>
          <tr>
            <td valign="top" style="background: #fff;">
              <p style="font-family: 'Arial'; text-transform: uppercase; font-size: 18px; color: #515c9f; line-height: 25px; margin: 0px;">Estimation</p>
            </td>
            <td valign="top">
              <p style="font-family: 'Arial'; font-size: 14px; color: #5f6062; line-height: 25px; margin: 0px; text-align: right;"></p>
            </td>
          </tr>
        </table>
      </td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_07.jpg" width="79" height="73" alt=""></td>
    </tr>
    <tr>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_23.jpg" width="76" height="34" alt=""></td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_24.jpg" width="345" height="34" alt=""></td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_25.jpg" width="79" height="34" alt=""></td>
    </tr>
    <tr>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_08.jpg" width="76" height="171" alt=""></td>
      <td valign="top" style="background:#FFF;" width="345" height="171">
        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" background="#FFF">
          <tr>
            <td valign="top" style="background: #fff;">
              <p style="font-family: 'Arial'; font-size: 12px; color: #c59d3d; line-height: 28px; margin: 0px;">Service</p>
            </td>
            <td valign="top">
              @if ($booking_charter->booking_type == "executive")
              <p style="font-family: 'Arial'; font-size: 12px; color: #afafaf; line-height: 28px; margin: 0px; text-align: right;">Executive AirCharter</p>
              @elseif ($booking_charter->booking_type == "group")
              <p style="font-family: 'Arial'; font-size: 12px; color: #afafaf; line-height: 28px; margin: 0px; text-align: right;">Group AirCharter</p>
              @elseif ($booking_charter->booking_type == "helicopter")
              <p style="font-family: 'Arial'; font-size: 12px; color: #afafaf; line-height: 28px; margin: 0px; text-align: right;">Helicopter AirCharter</p>
              @endif
            </td>
          </tr>
          <tr>
            <td valign="top" style="background: #fff;">
              <p style="font-family: 'Arial'; font-size: 12px; color: #c59d3d; line-height: 28px; margin: 0px;">Booking No</p>
            </td>
            <td valign="top">
              <p style="font-family: 'Arial'; font-size: 12px; color: #afafaf; line-height: 28px; margin: 0px; text-align: right;">#{{$booking_charter->id}}</p>
            </td>
          </tr>
          <tr>
            <td valign="top" style="background: #fff;">
              <p style="font-family: 'Arial'; font-size: 12px; color: #c59d3d; line-height: 28px; margin: 0px;">Travel Date</p>
            </td>
            <td valign="top">
              <p style="font-family: 'Arial'; font-size: 12px; color: #afafaf; line-height: 28px; margin: 0px; text-align: right;">{{$booking_charter->date}}</p>
            </td>
          </tr>
          <tr>
            <td valign="top" style="background: #fff;">
              <p style="font-family: 'Arial'; font-size: 12px; color: #c59d3d; line-height: 28px; margin: 0px;">From Airport</p>
            </td>
            <td valign="top">
              <p style="font-family: 'Arial'; font-size: 12px; color: #afafaf; line-height: 28px; margin: 0px; text-align: right;">{{$booking_charter->departure}}</p>
            </td>
          </tr>
          <tr>
            <td valign="top" style="background: #fff;">
              <p style="font-family: 'Arial'; font-size: 12px; color: #c59d3d; line-height: 28px; margin: 0px;">To Airport</p>
            </td>
            <td valign="top">
              <p style="font-family: 'Arial'; font-size: 12px; color: #afafaf; line-height: 28px; margin: 0px; text-align: right;">{{$booking_charter->destination}}</p>
            </td>
          </tr>
          <tr>
            <td valign="top" style="background: #fff;">
              <p style="font-family: 'Arial'; font-size: 12px; color: #c59d3d; line-height: 28px; margin: 0px;">Passengers</p>
            </td>
            <td valign="top">
              <p style="font-family: 'Arial'; font-size: 12px; color: #afafaf; line-height: 28px; margin: 0px; text-align: right;">{{$booking_charter->travellers}}</p>
            </td>
          </tr>
        </table>
      </td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_10.jpg" width="79" height="171" alt=""></td>
    </tr>
    <tr>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_11.jpg" width="76" height="27" alt=""></td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_12.jpg" width="345" height="27" alt=""></td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_13.jpg" width="79" height="27" alt=""></td>
    </tr>
    <tr>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_14.jpg" width="76" height="111" alt=""></td>
      <td valign="top" width="345" height="111" style="text-align: center; background: #FFF;padding: 0px; margin: 0px; outline: none; border: none;">
        <p style="font-family: 'Arial'; font-size: 12px; color: #5f6062; line-height: 16px; margin: 0px;">
          <span style="color: #c29734;">Hello {{$booking_charter->contact_person}}, </span>
          <br>Below you can find a booking estimation for your request. If you would like to proceed, you can check your booking estimation by clicking «VIEW ESTIMATION».<br>We look forward to have you onboard.</p>
      </td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_16.jpg" width="79" height="111" alt=""></td>
    </tr>
    <tr>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_17.jpg" width="76" height="116" alt=""></td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_18.jpg" width="345" height="116" alt=""></td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_19.jpg" width="79" height="116" alt=""></td>
    </tr>
    <tr>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_20.jpg" width="76" height="41" alt=""></td>
      <td valign="top" style="background: #FFF;padding: 0px; margin: 0px; outline: none; border: none;">
        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" background="#FFF">
          <tr>
            <td valign="top" style="background: #fff;">
              <p style="font-family: 'Arial'; font-size: 14px; color: #afafaf; line-height: 16px; margin: 10px 0px 0px 0px;">Total estimation</p>
            </td>
            <td valign="top" style="background: #fff;">
              <p style="font-family: 'Arial';font-size: 18px; color: #c29734; line-height: 16px; margin: 10px 0px 0px 0px; text-align: right;">{{$booking_charter->total_cost}}€</p>
            </td>
          </tr>                    
        </table>
      </td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_22.jpg" width="79" height="41" alt=""></td>
    </tr>
    <tr>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_23.jpg" width="76" height="34" alt=""></td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_24.jpg" width="345" height="34" alt=""></td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_25.jpg" width="79" height="34" alt=""></td>
    </tr>    
    <tr>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_29.jpg" width="76" height="46" alt=""></td>
      <td valign="top" style="background:#FFF;">        
        <a href="@if(Auth::User()) {{ url('/member/upcoming-request') }} @else {{ url('/login') }} @endif" style="background: #c29734; color: #FFF; text-transform: uppercase; font-family: 'Arial'; font-size: 11px; font-weight: bold;display: block; margin: 5px auto 0px; width: 95%; text-align: center; padding: 10px 0px; text-decoration: none;">VIEW ESTIMATION</a>
      </td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_31.jpg" width="79" height="46" alt=""></td>
    </tr> 
    <tr>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_35.jpg" width="76" height="36" alt=""></td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_36.jpg" width="345" height="36" alt=""></td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_37.jpg" width="79" height="36" alt=""></td>
    </tr>
    <tr>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_38.jpg" width="76" height="53" alt=""></td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_39.jpg" width="345" height="53" alt=""></td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_40.jpg" width="79" height="53" alt=""></td>
    </tr>
    <tr>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_41.jpg" width="76" height="46" alt=""></td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_42.jpg" width="345" height="46" alt=""></td>
      <td valign="top">
        <img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_43.jpg" width="79" height="46" alt=""></td>
    </tr>
    <tr>
      <td colspan="3">
        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" background="#f8f6f0">
          <tr>
            <td valign="top" width="166" height="38" style="background: #f8f6f0;padding: 0px; margin: 0px; outline: none; border: none;"></td>
            <td valign="top">
              <a href="" target="_blank"><img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_46.jpg"
                width="33" height="38" alt="Facebook"></a>
            </td>
            <td valign="top">
              <a href="" target="_blank"><img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_47.jpg"
                width="34" height="38" alt="Instagram"></a>
            </td>
            <td valign="top">
              <a href="" target="_blank"><img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_48.jpg"
                width="34" height="38" alt="Google Plus"></a>
            </td>
            <td valign="top">
              <a href="" target="_blank"><img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_49.jpg"
                width="33" height="38" alt="LinkedIn"></a>
            </td>
            <td valign="top">
              <a href="" target="_blank"><img style="display:block; margin:0px; padding:0px; outline:none; border:none;" src="https://accessoslo.fantasylab.io/assets/images/template2_50.jpg"
                width="35" height="38" alt="Youtube"></a>
            </td>
            <td valign="top" width="165" height="38" style="background: #f8f6f0;padding: 0px; margin: 0px; outline: none; border: none;"></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td colspan="3" valign="top" width="500" height="31" style="background: #f8f6f0;padding: 0px; margin: 0px; outline: none; border: none;"></td>
    </tr>
  </table>
  </body>
</html>