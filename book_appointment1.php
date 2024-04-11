<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Browlesque</title>
    
    <link rel="icon" href="./assets/images/icon/Browlesque-Icon.svg" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom container-fluid">
    <div class="container">
    <a href="http://localhost/browlesque">
        <img src="./assets/images/icon/Browlesque.svg" class="logo-browlesque-client" alt="Browlesque Logo">
    </a>
    <a class="navbar-toggler" href="Index.php" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="Index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="book_appointment1.php">Book Appointment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <h1 class="fw-bold mt-2" id="browlesque">BOOK YOUR APPOINTMENT</h1>
    <div class="container-md container-md-custom" id="dropdown-container">
        <form id="appointmentForm" method="post" action="insert.php">
            <span class="label-checkbox mb-2"><span class="asterisk">*</span>Type of Service to be Availed: </span><br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Service1" id="Service_1">
                <label class="form-check-label" for="Service_1">
                    Lorem Ipsum1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Service2" id="Service_2">
                <label class="form-check-label" for="Service_2">
                    Lorem Ipsum2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Service3" id="Service_3">
                <label class="form-check-label" for="Service_3">
                    Lorem Ipsum2
                </label>
            </div>

            <span class="label-checkbox mb-2"><span class="asterisk">*</span>Type of Promo to be Availed:</span><br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Promo1" id="Promo_1">
                <label class="form-check-label" for="Promo_1">
                    Lorem Ipsum1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Promo2" id="Promo_2">
                <label class="form-check-label" for="Promo_2">
                    Lorem Ipsum2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Promo3" id="Promo_3">
                <label class="form-check-label" for="Promo_3">
                    Lorem Ipsum2
                </label>
            </div>
            <div class="mt-2 mb-4">
                <div class="d-flex justify-content-end fixed-buttons me-4">
                    <button type="button" id="nextButton" class="btn custom-next me-2 fs-5 text-center" disabled data-bs-toggle="tooltip" data-bs-placement="top" title="Please check at least one service or promo first">Next</button>
                </div>
            </div>
            <!-- Calendar section -->
            <div id="calendarContainer" class="calendar-container container-fluid" style="display: none;">
                <span class="label-checkbox mb-2"><span class="asterisk">*</span>Set appointment date:</span><br>
                <div class="calendar mb-3">
                    <div class="calendar-header">
                        <span class="month-picker" id="month-picker">May</span>
                        <div class="year-picker" id="year-picker">
                            <span class="year-change" id="pre-year">
                                <pre><</pre>
                            </span>
                            <span id="year">2020</span>
                            <span class="year-change" id="next-year">
                                <pre>></pre>
                            </span>
                        </div>
                    </div>

                    <div class="calendar-body">
                        <div class="calendar-week-days">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div class="wednesday">Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>
                        <div class="calendar-days"></div>
                    </div>
                </div>
                <!-- <div class="calendar-footer"></div>
                <div class="date-time-formate">
                    <div class="day-text-formate">TODAY</div>
                    <div class="date-time-value">
                        <div class="time-formate">01:41:20</div>
                        <div class="date-formate">03 - march - 2022</div>
                    </div>
                </div> -->
                <div class="month-list"></div>
            </div>

            <!-- time buttons section -->
            <div id="timeButtonsContainer" style="display: none;">
                <span class="label-checkbox mb-2"><span class="asterisk">*</span>Set appointment time:</span><br>
                <div class="btn-grid-container">
                    <div class="parent mb-3">
                        <div class="div1"><button type="button" class="btn time-buttons me-2 fs-6 text-center">9-11 AM</button></div>
                        <div class="div2"><button type="button" class="btn time-buttons me-2 fs-6 text-center">10-12 PM</button></div>
                        <div class="div3"><button type="button" class="btn time-buttons me-2 fs-6 text-center">11-1 PM</button></div>
                        <div class="div4"><button type="button" class="btn time-buttons me-2 fs-6 text-center">12-2 PM</button></div>
                        <div class="div5"><button type="button" class="btn time-buttons me-2 fs-6 text-center">1-3 PM</button></div>
                        <div class="div6"><button type="button" class="btn time-buttons me-2 fs-6 text-center">2-4 PM</button></div>
                        <div class="div7"><button type="button" class="btn time-buttons me-2 fs-6 text-center">3-5 PM</button></div>
                        <div class="div8"><button type="button" class="btn time-buttons me-2 fs-6 text-center">4-6 PM</button></div>
                        <div class="div9"><button type="button" class="btn time-buttons me-2 fs-6 text-center">5-7 PM</button></div>
                        <div class="div10"><button type="button" class="btn time-buttons me-2 fs-6 text-center">6-8 PM</button></div>
                    </div>
                </div>
            </div>

            <div id="nameAndNumberContainer" style="display: none;">
                <div class="container-fluid">
                    <div class="mb-3">
                        <label for="client_name" class="label-checkbox mb-2"><span class="asterisk">*</span>Name:</label>
                        <input type="text" class="form-control" id="client_name" name="client_name" required>
                    </div>

                    <div class="mb-3">
                        <label for="client_contactno" class="label-checkbox mb-2"><span class="asterisk">*</span>Enter your phone number:</label>
                        <input type="tel" class="form-control" id="client_contactno" name="client_contactno"
                        pattern="09[0-9]{9}" title="Please enter a valid contact number." placeholder="" required
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 11);">
                    </div>

                    <div class="mb-3 d-flex justify-content-center">
                        <div class="btn-grid-container">
                            <label for="client_contactno" class="label-checkbox mb-2 me-4 text-center"><span class="asterisk text-center">*</span>No. of Companions:</label>
                            <div class="parent-comp mb-3">
                                <div class="div11"><button type="button" class="btn time-buttons me-2 fs-6 text-center">1</button></div>
                                <div class="div12"><button type="button" class="btn time-buttons me-2 fs-6 text-center">2</button></div>
                                <div class="div13"><button type="button" class="btn time-buttons me-2 fs-6 text-center">3</button></div>
                                <div class="div14"><button type="button" class="btn time-buttons me-2 fs-6 text-center">4</button></div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="client_notes" class="label-checkbox mb-2">Notes:</label>
                        <textarea class="form-control tall-input" id="client_notes" name="client_notes"></textarea>
                    </div>

                    <div class="container mt-5">
                        <div class="mb-3 checkbox-container">
                            <input type="checkbox" class="form-check-input form-check-input-custom" id="terms_conditions" name="terms_conditions" required>
                            <label for="terms_conditions" class="label-checkbox-custom mb-2 click-effect"><span class="asterisk">*</span>Terms and Conditions</label>
                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary click-effect" data-bs-toggle="modal" data-bs-target="#termsAndConditions" id="modalButton" style="display: none;">
                            Launch static backdrop modal
                        </button>
                    </div>

                    <div class="button-appoint">
                        <button type="submit" name="user_submit" class="btn btn-primary btn-primary-custom fs-4">BOOK NOW!</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

<div class="container-flex">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top footer-black">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="mb-3 mb-md-0 footer-text-white">Contact Us</span>
    </div>
    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3">
        <a class="footer-text-white" href="https://www.facebook.com/BrowlesqueCavite">
          <img src="./assets/images/icon/Facebook.svg" alt="Facebook Icon" class="footer-img">
          Browlesque Cavite
        </a>
      </li>
      <li class="ms-3">
        <span class="footer-text-white">
          <img src="./assets/images/icon/Phone.svg" alt="Phone Icon" class="footer-img">
          09123456789
        </span>
      </li>
    </ul>
  </footer>
</div>

<!-- Terms and Service Modal -->
<div class="modal fade" id="termsAndConditions" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="termsAndConditionsLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h1 class="modal-title fs-5 mx-auto" id="termsAndConditionsLabel">Terms and Conditions</h1>
      </div>
      <div class="modal-body">
        By accessing and using the reservation system provided by [Your Company Name], you agree to be bound by the following terms and conditions.
        When making a reservation, you are required to provide accurate information, and payment in full is necessary to confirm the booking. Cancellations may incur fees, and refunds, if applicable, will be subject to our refund policy. Modifications to reservations are dependent on availability and may incur additional charges. While using our Services, you agree to conduct yourself lawfully and responsibly. We are not liable for any loss or damage to personal belongings. Our liability is limited to the extent permitted by law, and you agree to indemnify us against any claims arising from your use of the Services. Intellectual property rights in the reservation system belong to [Your Company Name]. These terms are governed by the laws of [Your Country], and we reserve the right to amend them at any time. If any provision is deemed unenforceable, the remaining terms shall remain in effect. By using our reservation system, you signify your acceptance of these terms and conditions.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-primary-custom-tc" id="acceptBtn">Accept</button>
        <button type="button" class="btn btn-secondary btn-secondary-custom" id="declineBtn" data-bs-dismiss="modal">Decline</button>
      </div>
    </div>
  </div>
</div>

<!-- Include your separate JavaScript file using the script tag with src attribute -->
<script src="./assets/js/scripts.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
