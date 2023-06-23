<?php
session_start();

      $dbserver = "localhost";
      $dbuser = "root";
      $dbpass = "";
      $dbname = "dbms_project";
      $mysqli = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

      $uid = $_POST['uid'];
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<html>

<style>form {
    max-width: 400px;
    margin: 0 auto;
  }
  
  label {
    display: inline-block;
    width: 100px;
    font-weight: bold;
  }
  
  input[type="textbox"] {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type="button"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type="button"]:hover {
    background-color: #0062cc;
  }
  
</style>


<form>
    <header class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" >
              <img src="/images/hand-care-logo-vector-removebg-preview.png" height="200px" width="300px" alt="center" />
              <h1>
                           AISHI
              </h1>
    <input type="textbox" name="name" id="name" value="" placeholder="Enter your name" /><br /><br />
    <label for="cost">Cost: INR</label><input type="textbox" name="amt" id="amt" value="" /><br /><br />
    <label for="cost">Mobile:</label><input type="textbox" name="mob" id="mob" value="" /><br /><br />
    <input type="hidden" id="uid" name="uid" value=<?php echo $uid ?>><br>
    <input type="button" name="btn" id="btn" value="Pay Now" onclick="pay_now()" />
</form>
</html>

<!--<form>
    <input type="hidden" name="token" value="" id="token" />
    <input type="textbox" name="name" id="name" value="" placeholder="Enter your name" /><br /><br />
    <label for="cost">Cost: INR</label><input type="textbox" name="amt" id="amt" value="" /><br /><br />-->
    <!-- <input type="text" name="phrase" value="ChangeMe" id="phrase" />-->
   <!-- <input type="button" name="btn" id="btn" value="Pay Now" onclick="pay_now()" />
</form>-->

<script>
    /*
MD5 code from here
https://github.com/blueimp/JavaScript-MD5
*/

    ! function(n) {
        "use strict";

        function t(n, t) {
            var r = (65535 & n) + (65535 & t);
            return (n >> 16) + (t >> 16) + (r >> 16) << 16 | 65535 & r
        }

        function r(n, t) {
            return n << t | n >>> 32 - t
        }

        function e(n, e, o, u, c, f) {
            return t(r(t(t(e, n), t(u, f)), c), o)
        }

        function o(n, t, r, o, u, c, f) {
            return e(t & r | ~t & o, n, t, u, c, f)
        }

        function u(n, t, r, o, u, c, f) {
            return e(t & o | r & ~o, n, t, u, c, f)
        }

        function c(n, t, r, o, u, c, f) {
            return e(t ^ r ^ o, n, t, u, c, f)
        }

        function f(n, t, r, o, u, c, f) {
            return e(r ^ (t | ~o), n, t, u, c, f)
        }

        function i(n, r) {
            n[r >> 5] |= 128 << r % 32, n[14 + (r + 64 >>> 9 << 4)] = r;
            var e, i, a, d, h, l = 1732584193,
                g = -271733879,
                v = -1732584194,
                m = 271733878;
            for (e = 0; e < n.length; e += 16) i = l, a = g, d = v, h = m, g = f(g = f(g = f(g = f(g = c(g = c(g = c(g = c(g = u(g = u(g = u(g = u(g = o(g = o(g = o(g = o(g, v = o(v, m = o(m, l = o(l, g, v, m, n[e], 7, -680876936), g, v, n[e + 1], 12, -389564586), l, g, n[e + 2], 17, 606105819), m, l, n[e + 3], 22, -1044525330), v = o(v, m = o(m, l = o(l, g, v, m, n[e + 4], 7, -176418897), g, v, n[e + 5], 12, 1200080426), l, g, n[e + 6], 17, -1473231341), m, l, n[e + 7], 22, -45705983), v = o(v, m = o(m, l = o(l, g, v, m, n[e + 8], 7, 1770035416), g, v, n[e + 9], 12, -1958414417), l, g, n[e + 10], 17, -42063), m, l, n[e + 11], 22, -1990404162), v = o(v, m = o(m, l = o(l, g, v, m, n[e + 12], 7, 1804603682), g, v, n[e + 13], 12, -40341101), l, g, n[e + 14], 17, -1502002290), m, l, n[e + 15], 22, 1236535329), v = u(v, m = u(m, l = u(l, g, v, m, n[e + 1], 5, -165796510), g, v, n[e + 6], 9, -1069501632), l, g, n[e + 11], 14, 643717713), m, l, n[e], 20, -373897302), v = u(v, m = u(m, l = u(l, g, v, m, n[e + 5], 5, -701558691), g, v, n[e + 10], 9, 38016083), l, g, n[e + 15], 14, -660478335), m, l, n[e + 4], 20, -405537848), v = u(v, m = u(m, l = u(l, g, v, m, n[e + 9], 5, 568446438), g, v, n[e + 14], 9, -1019803690), l, g, n[e + 3], 14, -187363961), m, l, n[e + 8], 20, 1163531501), v = u(v, m = u(m, l = u(l, g, v, m, n[e + 13], 5, -1444681467), g, v, n[e + 2], 9, -51403784), l, g, n[e + 7], 14, 1735328473), m, l, n[e + 12], 20, -1926607734), v = c(v, m = c(m, l = c(l, g, v, m, n[e + 5], 4, -378558), g, v, n[e + 8], 11, -2022574463), l, g, n[e + 11], 16, 1839030562), m, l, n[e + 14], 23, -35309556), v = c(v, m = c(m, l = c(l, g, v, m, n[e + 1], 4, -1530992060), g, v, n[e + 4], 11, 1272893353), l, g, n[e + 7], 16, -155497632), m, l, n[e + 10], 23, -1094730640), v = c(v, m = c(m, l = c(l, g, v, m, n[e + 13], 4, 681279174), g, v, n[e], 11, -358537222), l, g, n[e + 3], 16, -722521979), m, l, n[e + 6], 23, 76029189), v = c(v, m = c(m, l = c(l, g, v, m, n[e + 9], 4, -640364487), g, v, n[e + 12], 11, -421815835), l, g, n[e + 15], 16, 530742520), m, l, n[e + 2], 23, -995338651), v = f(v, m = f(m, l = f(l, g, v, m, n[e], 6, -198630844), g, v, n[e + 7], 10, 1126891415), l, g, n[e + 14], 15, -1416354905), m, l, n[e + 5], 21, -57434055), v = f(v, m = f(m, l = f(l, g, v, m, n[e + 12], 6, 1700485571), g, v, n[e + 3], 10, -1894986606), l, g, n[e + 10], 15, -1051523), m, l, n[e + 1], 21, -2054922799), v = f(v, m = f(m, l = f(l, g, v, m, n[e + 8], 6, 1873313359), g, v, n[e + 15], 10, -30611744), l, g, n[e + 6], 15, -1560198380), m, l, n[e + 13], 21, 1309151649), v = f(v, m = f(m, l = f(l, g, v, m, n[e + 4], 6, -145523070), g, v, n[e + 11], 10, -1120210379), l, g, n[e + 2], 15, 718787259), m, l, n[e + 9], 21, -343485551), l = t(l, i), g = t(g, a), v = t(v, d), m = t(m, h);
            return [l, g, v, m]
        }

        function a(n) {
            var t, r = "",
                e = 32 * n.length;
            for (t = 0; t < e; t += 8) r += String.fromCharCode(n[t >> 5] >>> t % 32 & 255);
            return r
        }

        function d(n) {
            var t, r = [];
            for (r[(n.length >> 2) - 1] = void 0, t = 0; t < r.length; t += 1) r[t] = 0;
            var e = 8 * n.length;
            for (t = 0; t < e; t += 8) r[t >> 5] |= (255 & n.charCodeAt(t / 8)) << t % 32;
            return r
        }

        function h(n) {
            return a(i(d(n), 8 * n.length))
        }

        function l(n, t) {
            var r, e, o = d(n),
                u = [],
                c = [];
            for (u[15] = c[15] = void 0, o.length > 16 && (o = i(o, 8 * n.length)), r = 0; r < 16; r += 1) u[r] = 909522486 ^ o[r], c[r] = 1549556828 ^ o[r];
            return e = i(u.concat(d(t)), 512 + 8 * t.length), a(i(c.concat(e), 640))
        }

        function g(n) {
            var t, r, e = "";
            for (r = 0; r < n.length; r += 1) t = n.charCodeAt(r), e += "0123456789abcdef".charAt(t >>> 4 & 15) + "0123456789abcdef".charAt(15 & t);
            return e
        }

        function v(n) {
            return unescape(encodeURIComponent(n))
        }

        function m(n) {
            return h(v(n))
        }

        function p(n) {
            return g(m(n))
        }

        function s(n, t) {
            return l(v(n), v(t))
        }

        function C(n, t) {
            return g(s(n, t))
        }

        function A(n, t, r) {
            return t ? r ? s(t, n) : C(t, n) : r ? m(n) : p(n)
        }
        "function" == typeof define && define.amd ? define(function() {
            return A
        }) : "object" == typeof module && module.exports ? module.exports = A : n.md5 = A
    }(this);

    src="md5.js";

    function generate_token() {
        var phrase = document.getElementById("amt").value;
        document.getElementById("token").value = md5(phrase);
    }

    generate_token();
</script>

<script>
    
    function pay_now() {
        var name = jQuery('#name').val();
        var amt = jQuery('#amt').val();
        var mob = jQuery('#mob').val();
        var uid = jQuery('#uid').val();
        var hash = md5(amt);
    //if(hash == jQuery('#token').val()){

        jQuery.ajax({
            type: 'post',
            url: 'payment_process.php',
           // data: "amt=" + amt + "&name=" + name,
           data: "&amt="+ amt + "&name=" + name +"&mob=" + mob + "&uid=" + uid,
            success: function(result) {
                var options = {
                    "key": "rzp_test_2c1tyBIQvsgURp",
                    "amount": (jQuery('#amt').val()) * 100,
                    "currency": "INR",
                    "name": "AISHI",
                    "description": "Test Transaction",
                    "image": "img/logo.jpg",
                    "handler": function(response) {
                        jQuery.ajax({
                            type: 'post',
                            url: 'payment_process.php',
                            //data: "payment_id=" + response.razorpay_payment_id,
                            data: "payment_id=" + response.razorpay_payment_id + "&amt="+ amt + "&name=" + name+"&mob=" + mob + "&uid=" + uid,
                            success: function(result) {
                                //window.location.href = "thank_you.php";
                                window.location.href = "thank_you.php";
                            }
                        });
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.open();
            }
        });
    //}
    //else{
      //  window.location.reload();
    //}

    }
    
</script>