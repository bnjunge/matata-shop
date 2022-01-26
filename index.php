<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matata Shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/app.css">
</head>
<body>
    <div class="container">
        <header class="pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94"
                    role="img">
                    <title>Bootstrap</title>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                        fill="currentColor"></path>
                </svg>
                <span class="fs-4">Matata Shop</span>
            </a>
        </header>

        <!-- products -->
        <div class="row container mt-4 mx-auto" id="products"></div>

        <button data-bs-toggle="modal" data-bs-target="#cartModal"
            class="btn btn-danger btn-block btn-lg mx-auto float">Cart Ksh. <span id="cartValue">0.00</span></button>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/app.js"></script>

    <div class="modal fade" id="cartModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="err"></div>
                    <table role="table" class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Item</th>
                                <th>Qty</th>
                                <th>@</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody id="cartItems"></tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4">Total</td>
                                <td id="cartTotal">0</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <form action="" class="form m-5">
                    <div class="row">
                        <div class="col-sm-5">
                            <img style="max-width: 80%" src="assets/img/mpesalogo.png" alt="mpesa logo">
                        </div>
                        <div class="form-group col-sm-7 mb-4">
                            <label for="phone">Enter phone to Pay</label>
                            <input type="number" id="phone" class="form-control">
                            <div id="phoneErr"></div>
                        </div>
                        <button id="paynow" type="button" class="btn btn-lg btn-success">Pay Now</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>