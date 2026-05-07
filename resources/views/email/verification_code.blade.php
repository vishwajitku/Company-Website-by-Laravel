<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #eef3f9;
      font-family: "Inter", Arial, Helvetica, sans-serif;
      text-align: center;
    }

    .wrapper {
      padding: 40px 15px;
    }

    .card {
      width: 420px;
      max-width: 90%;
      background: #ffffff;
      margin: auto;
      border-radius: 14px;
      padding: 36px 28px;
      box-shadow: 
        0px 4px 12px rgba(0,0,0,0.04),
        0px 8px 28px rgba(0,0,0,0.08);
      animation: fadeIn 0.6s ease;
    }

    .title {
      font-size: 22px;
      font-weight: 700;
      color: #1c1f2b;
      margin-bottom: 14px;
    }

    .subtitle {
      font-size: 14px;
      color: #6c7585;
      margin-bottom: 26px;
    }

    .code-box {
      display: inline-block;
      padding: 16px 26px;
      background: #f3f7ff;
      border: 1px solid #dbe5ff;
      border-radius: 12px;
      font-size: 36px;
      letter-spacing: 10px;
      font-weight: 800;
      color: #2a324b;
      text-align: center;
      box-shadow: inset 0 0 8px rgba(112,134,255,0.2);
    }

    .footer-text {
      margin-top: 26px;
      font-size: 12px;
      color: #9aa3b4;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <div class="wrapper">
    <div class="card">
      <div class="title">🔐 Verification Code</div>
      <div class="subtitle">Enter the code below to continue</div>

      <div class="code-box">{{ $code }}</div>

      <div class="footer-text">
        This code expires in 10 minutes.  
        If you didn’t request this, please ignore.
      </div>
    </div>
  </div>

</body>
</html>
