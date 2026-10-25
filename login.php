<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University Exam Management - RUSL Login</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      display: flex;
      min-height: 100vh;
      width: 100vw;
      background-color: #f3f5f8;
      overflow-x: hidden;
    }

    /* LEFT SIDE: Campus Picture and University Header */
    .left-section {
  flex: 1.1;
  position: relative;
  background: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)),
              url('campus.jpeg') center/cover no-repeat;
  min-height: 50vh;
}

    /* University Header on the Left */
    .uni-branding {
      position: absolute;
      top: 30px;
      left: 30px;
      display: flex;
      align-items: center;
      gap: 15px;
      background: rgba(0, 0, 0, 0.62);
      padding: 12px 20px;
      border-radius: 14px;
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
    }

    /* Circular Badge with Centered Alignment */
    .uni-logo {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      background-color: #7a1515;
      border: 3px solid #ffcc00;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      box-shadow: 0 4px 14px rgba(0, 0, 0, 0.5);
      flex-shrink: 0;
      padding: 4px;
    }

    .uni-logo img {
      width: 100%;
      height: 100%;
      object-fit: contain;
      object-position: center;
      display: block;
      margin: auto;
    }

    .uni-text h3 {
      color: #ffd043;
      font-size: 15px;
      font-weight: 700;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.9);
    }

    .uni-text h4 {
      color: #ffd043;
      font-size: 12px;
      margin: 2px 0;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.9);
      font-weight: 500;
    }

    .uni-text h2 {
      color: #ffffff;
      font-size: 17px;
      font-family: Georgia, serif;
      font-style: italic;
      font-weight: bold;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.9);
    }

    /* RIGHT SIDE: White Card with Fields */
    .right-section {
      flex: 0.9;
      background-color: #bab9d1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 30px;
    }

    .form-card {
      width: 100%;
      max-width: 420px;
      background: #ffffff;
      padding: 40px 35px;
      border-radius: 16px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
    }

    .form-header {
      text-align: center;
      margin-bottom: 25px;
    }

    .system-title {
      font-size: 21px;
      color: #1e3a5f;
      font-weight: 700;
      letter-spacing: 0.5px;
      margin-bottom: 6px;
    }

    .form-subtitle {
      font-size: 14px;
      color: #64748b;
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
    }

    .input-group {
      margin-bottom: 14px;
    }

    .input-group input {
      width: 100%;
      padding: 13px 15px;
      border: 1px solid #cbd5e1;
      border-radius: 8px;
      font-size: 14px;
      outline: none;
      background: #f8fafc;
      transition: all 0.2s ease;
    }

    .input-group input:focus {
      border-color: #1e40af;
      background: #ffffff;
      box-shadow: 0 0 0 3px rgba(30, 64, 175, 0.15);
    }

    /* Blue Login Button */
    .btn-login {
      width: 100%;
      padding: 13px;
      border-radius: 8px;
      border: none;
      background-color: #1e40af;
      color: #ffffff;
      font-size: 15px;
      font-weight: 700;
      cursor: pointer;
      margin-top: 10px;
      transition: background-color 0.2s ease, transform 0.1s ease;
    }

    .btn-login:hover {
      background-color: #1d4ed8;
    }

    .btn-login:active {
      transform: scale(0.99);
    }

    @media (max-width: 850px) {
      body {
        flex-direction: column;
      }
      .left-section {
        min-height: 260px;
        flex: none;
      }
      .uni-branding {
        top: 15px;
        left: 15px;
        padding: 8px 12px;
      }
      .right-section {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

  <!-- Left Side: Campus Picture & Centered logo.png -->
  <div class="left-section">
    <div class="uni-branding">
      <div class="uni-logo">
        <img src="logo.png" alt="Rajarata University Logo">
      </div>
      <div class="uni-text">
        <h3>ශ්‍රී ලංකා රජරට විශ්ව විද්‍යාලය</h3>
        <h4>இலங்கை ரஜரட்ட பல்கலைக்கழகம்</h4>
        <h2>Rajarata University of Sri Lanka</h2>
      </div>
    </div>
  </div>

  <!-- Right Side: University Exam Management LOGIN -->
  <div class="right-section">
    <div class="form-card">
  <div class="form-header">
      <h1 class="system-title">University Exam Management</h1>
      <div class="form-subtitle">LOGIN</div>
    </div>

    <form method="POST" action="login_check.php">
        
        <div class="input-group">
          <input type="text" name="name" placeholder="Name" required autocomplete="name">
        </div>

        <div class="input-group">
          <input type="text" name="id" placeholder="ID" required>
        </div>

        <div class="input-group">
          <input type="email" name="email" placeholder="Email" required autocomplete="email">
        </div>
        

        <button type="submit" class="btn-login">Login</button>
      </form>
    </div>
  </div>

</body>
</html>