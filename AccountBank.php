<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Account Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .form {
            margin: 20px auto;
            max-width: 600px;
        }

        .form h1 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            margin-bottom: 5px;
        }

        .form-group button {
            margin-bottom: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form mx-auto">
            <h1 class="text-center">Form Account Bank</h1>
            <form action="AccountBank.php" method="post">
                <div class="form-group row">
                    <label for="no_rek" class="col-4 col-form-label">Nomor Rekening</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-credit-card-alt"></i>
                                </div>
                            </div>
                            <input id="no_rek" name="no_rek" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Nama Customer</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="customer" name="customer" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="saldo" class="col-4 col-form-label">Saldo Awal</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-money"></i>
                                </div>
                            </div>
                            <input id="saldo" name="saldo" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php

    require_once 'class_accountbank.php';

        $ab1 = new BankAccount("010", 5000000, "Messi");
        $ab2 = new BankAccount("070", 10000000, "Ronaldo");

    if (isset($_POST['submit'])) {
        $no_rek = $_POST['no_rek'];
        $customer = $_POST['customer'];
        $saldo = $_POST['saldo'];

        $account_BankNew = new BankAccount($no_rek, $saldo, $customer);

    echo '<div class="table-responsive mt-10">
            <table class="table table-striped">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No.Rekening</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr align="center">
                        <td>1</td>
                        <td>' . $ab1->nomor . '</td>
                        <td>' . $ab1->customer . '</td> 
                        <td>' . $ab1->getSaldo() . '</td>
                    </tr>
                    <tr align="center">
                        <td>2</td>
                        <td>' . $ab2->nomor . '</td>
                        <td>' . $ab2->customer . '</td> 
                        <td>' . $ab2->getSaldo() . '</td>
                    </tr>
                    <tr align="center">
                        <td>3</td>
                        <td>' . $account_BankNew->nomor . '</td>
                        <td>' . $account_BankNew->customer . '</td> 
                        <td>' . $account_BankNew->getSaldo() . '</td>
                    </tr>
                </tbody>
          </table>
        </div>';
    }
    ?>
</body>

</html>