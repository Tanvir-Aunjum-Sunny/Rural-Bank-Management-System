<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.min.css">


      <link rel="stylesheet" href="css/login.css">


</head>

<body>
  <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">রেজিস্ট্রেশান করুন</a></li>
        <li class="tab"><a href="#login">লগইন করুন</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1>সম্পূর্ণ ফ্রী রেজিস্ট্রেশান করুন</h1>

          <form action="/" method="post">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                প্রথম নাম<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>

            <div class="field-wrap">
              <label>
                শেষ নাম<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              ফোন নাম্বার<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              পাসওয়ার্ড<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <button type="submit" class="button button-block"/>সব ঠিক আছে</button>

          </form>

        </div>

        <div id="login">
          <h1>পুনরায় স্বাগতম!</h1>

          <form action="/" method="post">

            <div class="field-wrap">
            <label>
              ফোন নাম্বার দিন<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              পাসওয়ার্ড দিন<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <p class="forgot"><a href="#">পাসওয়ার্ড ভুলে গেছেন?</a></p>

          <button class="button button-block"/>সামনে যান</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
  <script src="js/vendor/jquery-3.2.1.min.js"></script>

    <script  src="js/login.js"></script>

</body>
</html>
