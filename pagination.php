

<!DOCTYPE html>
<html lang="en">
<!--comment-->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="pagination.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<title>FIS</title>
</head>

<body onload="initClock()">

  <!--DrowDown Menu Intern-->
  <nav>
    <ul>
      <li>Hello, <b>Raffy</b><br> RAV(2023-32)</li>
    </ul>
    <img src="img/zoomDP.jpg" class="user_pic" onclick="toggleMenu()">
    <div class="sub-menu-wrap" id="subMenu">
      <div class="sub-menu">
        <div class="user-info">
          <img src="img/zoomDP.jpg">
          <h2>Raffy L. Veloria</h2>
        </div>
        <hr>
        <a href="" class="sub-menu-link">
          <i class="fa fa-user"></i>
          <p>View Profile</p>
          <span>></span>
        </a>
        <a href="" class="sub-menu-link">
          <i class="fa fa-gear"></i>
          <p>Setting & Privacy</p>
          <span>></span>
        </a>
        <a href="" class="sub-menu-link">
          <i class="fa-solid fa-circle-question"></i>
          <p>Help & Support</p>
          <span>></span>
        </a>
        <a href="login_intern.php" class="sub-menu-link">
          <i class="fa-solid fa-right-from-bracket"></i>
          <p>Logout</p>
        </a>
      </div>
    </div>
  </nav>
  <center>
    <img src="img/FC Management Consulting.png" class="logo">
  </center>
  <!-- Digital Clock Start -->
  <center>
    <div class="datetime">
      <div class="date">
        <span id="dayname"> Day </span>
        <span id="month"> Month </span>
        <span id="daynum"> 00 </span>,
        <span id="year"> Year </span>
      </div>
      <div class="time">
        <span id="hour"> 00 </span>:
        <span id="minutes"> 00</span>:
        <span id="seconds"> 00 </span>
        <span id="period">

        </span>
      </div>
    </div>
  </center>

  <button type="submit" id="open" class="timein" name="time_in">Time in</button>
  <div class="modal-container" id="modal_container">
    <div class="modal">
      <h1>Action Item</i></h1>
      <form id="registration" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="Event">
          <select name="projects" id="projects" class="projects">
            <option value="None">Select your Projects</option>
            <option value="Human Resources">Human Resources</option>
            <option value="Accounting">Accounting</option>
            <option value="IT">IT</option>
            <option value="Marketing">Marketing</option>
            <option value="FIN ED/ CFAP">FIN ED/ CFAP</option>
            <option value="JJCFAP/JAA">JJCFAP/JAA</option>
            <option value="Training">Training</option>
            <option value="Business Development">Business Development</option>
            <option value="Alterna">Alterna</option>
            <option value="Organization">Organization</option>
            <option value="ADM/NDC">ADM/NDC</option>
            <option value="IMG/ASTRA">IMG/ASTRA</option>
          </select>
          <br><br>
          <div class="intern-id">
            <input type="text" id="InternId" name="InternId" class="form__input" autocomplete="off" placeholder=" ">
            <label for="InternId" class="form__label">Intern ID </label>
          </div>
          <br><br><br>
          <div class="action-item">
            <input type="text" id="actionitem" name="actionitem" class="form-action" autocomplete="off" placeholder=" ">
            <label for="actionitem" class="form--action">Action Item </label>
          </div>
          <br><br><br>
          <div class="special-event">
            <input type="text" id="specialevent" name="specialevent" class="form-special" autocomplete="off"
              placeholder=" ">
            <label for="specialevent" class="form--special">Special Event </label>
          </div>
          <br><br><br>
        </div>
        <button type="submit" id="close" name="close">&times;</button>
        <button type="submit" id="ontime" name="ontime">Time in</button>

      </form>

    </div>
  </div>
  <form id="registration" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

  
  <button type="submit"  class="timeout" name="time_out">Time out</button>
  
  </form>

    </div>
  </div>




  <!--Table For Intern-->
  <main>
    <table class="mytable" id="mytable">

      <thead>
        <tr>
          <th>NO</th>
          <th>DATE</th>
          <th>IN</th>
          <th>OUT</th>
          <th>HOURS</th>
          <th>MINUTES</th>
          <th>SPECIAL EVENTS</th>
        </tr>
      </thead>

       <tbody>
        <tr>
          <td>01</td>
          <td>January 1, 2023</td>
          <td>8:00AM</td>
          <td>5:00PM</td>
          <td>8</td>
          <td>0</td>
          <td>Typing test</td>
        </tr>
        <tr>
          <td>02</td>
          <td>January 2, 2023</td>
          <td>8:00AM</td>
          <td>5:00PM</td>
          <td>8</td>
          <td>0</td>
          <td>Java</td>
        </tr>
        <tr>
          <td>03</td>
          <td>January 3, 2023</td>
          <td>8:00AM</td>
          <td>5:00PM</td>
          <td>8</td>
          <td>0</td>
          <td>Php</td>
        </tr>
        <tr>
          <td>04</td>
          <td>January 4, 2023</td>
          <td>8:00AM</td>
          <td>5:00PM</td>
          <td>8</td>
          <td>0</td>
          <td>Python</td>
        </tr>
        <tr>
          <td>05</td>
          <td>January 5, 2023</td>
          <td>8:00AM</td>
          <td>5:00PM</td>
          <td>8</td>
          <td>0</td>
          <td>C++</td>
        </tr>

      </tbody>
    </table>

      
      
    </table>

  </main>
  <br><br>






  <script src="script.js"></script>
  <script>
    // pop-up messages

    const open = document.getElementById('open');
    const modal_container = document.getElementById('modal_container');
    const close = document.getElementById('close')

    open.addEventListener('click', () => {
      modal_container.classList.add('show');
    });

    close.addEventListener('click', () => {
      modal_container.classList.remove('show');
    });
  </script>

  <!--Profile Intern-->
  <script>
    //click outside and close

    let subMenu = document.getElementById("subMenu");
    let userPic = document.querySelector(".user_pic");

    function toggleMenu() {
      subMenu.classList.toggle("open-menu");
    }

    window.addEventListener('click', function (e) {
      if (!subMenu.contains(e.target) && !userPic.contains(e.target)) {
        subMenu.classList.remove("open-menu");
      }
    });
  </script>

  <!--Intern CLock-->
  <script type="text/javascript">
    function updateClock() {
      var now = new Date();
      var dname = now.getDay(),
        mo = now.getMonth(),
        dnum = now.getDate(),
        yr = now.getFullYear();
      var hou = now.getHours(),
        min = now.getMinutes(),
        sec = now.getSeconds();
      var pe = "AM";
      if (hou == 0) {
        hou = 12;
      }
      if (hou > 12) {
        hou = hou - 12;
        pe = "PM";
      }
      Number.prototype.pad = function (digits) {
        for (var n = this.toString(); n.length < digits; n = 0 + n);
      }
      var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
      var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
      var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"]
      var values = [week[dname], months[mo], dnum, yr, hou, min, sec, pe];
      for (var i = 0; i < ids.length; i++)
        document.getElementById(ids[i]).firstChild.nodeValue = values[i];
      // Send date and time values to PHP script
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("POST", "homepage.php", true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText); // You can handle the response from PHP here
        }
      }
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("POST", "homepage.php", true);
      xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText); // You can handle the response from PHP here
        }
      }
      var data = "dayname=" + week[dname] + "&month=" + months[mo] + "&daynum=" + dnum + "&year=" + yr + "&hour=" +
        hou + "&minutes=" + min + "&seconds=" + sec + "&period=" + pe;
      xmlhttp.send(data);
    }

    function initClock() {
      updateClock();
      window.setInterval("updateClock()", 1);
    }
  </script>


  <!-- CAMERA VISION -->

</body>

</html>

