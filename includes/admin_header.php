<!doctype html>
<html>
<head>
<title>Prolog</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />

<link href="assets/css/dashboard.css" rel="stylesheet" type="text/css" />

<style>
  header.admin_head .head_logo.d-flex span {
    position: absolute;
    right: 0;
    top: -6px;
    color: #FFF;
    font-family: Inter;
    font-size: 10px;
    font-weight: 900;
}

.head_logo a {
    position: relative;
}
</style>

</head>
<body>


<main class="app-container">

  <!-- Mobile Navigation Button End-->
  <header class="admin_head" >
    <div class="row">
      <div class="col-lg-2 col-md-6 col-6">
        <div class="head_logo d-flex">
          <a href="#">
            <span>ADMIN</span>
            <img src="assets/images/logo.png" alt="">
          </a>
          <div id="main">
            <button class="openbtn" onclick="openNav()">☰</button>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-6">
        <div class="users_detail">
          <div class="user_quick_links">
            <select>
              <option>Quick Links</option>
              <option>Demo 2</option>
              <option>Demo 3</option>
              <option>Demo 4</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="profile_settings">
          <div class="member_ship_card">
            <p>Membership Expires on:</p>
            <span>Feb 25, 2024</span>
          </div>
          <div class="user_profile_details">
            <div class="user_notifications">
              <a href="#"><img src="assets/images/icons/notifications.svg" alt=""></a>
            </div>
            <div class="user_notifications">
              <a href="#"><img src="assets/images/icons/beenhere.svg" alt=""></a>
            </div>
            <div class="user_notifications">
              <a href="#"><img src="assets/images/icons/settings.svg" alt=""></a>
            </div>
            <div class="user_profile_picture">
              <a href="#"><img src="assets/images/user_profile_picture.svg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- side_bar_begin -->
  <div id="mySidebar" class="sidebar">
    <div class="side_logo">
      <a href="#">
        <img src="assets/images/logo.png" alt="">
      </a>
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">☰</a>
    </div>
    <div class="side_navs">
      <a href="#" class="theme_btn Plus_btn ">Create RFQ</a>
    </div>
    <div class="side_link">
      <a href="#">
        <img src="assets/images/icons/roofing.svg" alt="">
        <p>Home</p>
      </a>
      <a href="#">
        <img src="assets/images/icons/dashboard.svg" alt="">
        <p>Dashboard</p>
      </a>
      <a href="#">
        <img src="assets/images/icons/person.svg" alt="">
        <p>My Profile</p>
      </a>
      <a href="#">
        <img src="assets/images/icons/search.svg" alt="">
        <p>Find Forwarders</p>
      </a>
      <a href="#">
        <img src="assets/images/icons/handshake.svg" alt="">
        <p>Pro Resources</p>
      </a>
      <a href="#">
        <img src="assets/images/icons/send.svg" alt="">
        <p>RFQs Generated</p>
      </a>
      <a href="#">
        <img style="width:10px;" src="assets/images/icons/attach_money.svg" alt="">
        <p>PROPay</p>
      </a>
      <a href="#">
        <img src="assets/images/icons/people.svg" alt="">
        <p>Conference</p>
      </a>
      <a href="#">
        <img src="assets/images/icons/local_activity.svg" alt="">
        <p>Conference Bookings</p>
      </a>
    </div>
    <div class="side_link">
      <a href="#">
        <img src="assets/images/icons/notifications.svg" alt="">
        <p>Notifications</p>
      </a>
      <a href="#">
        <img src="assets/images/icons/edit.svg" alt="">
        <p>Edit Profile</p>
      </a>
      <a href="#">
        <img src="assets/images/icons/beenhere.svg" alt="">
        <p>Membership #125458</p>
      </a>
      <a href="#">
        <img src="assets/images/icons/settings.svg" alt="">
        <p>Settings</p>
      </a>
    </div>
  </div>
  <!-- side_bar_begin -->
  