<?php

use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('/userAdd/{dataName}/{dataPassword}/{dataType}', function ($dataName, $dataPassword, $dataType) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "insert into user(Username,Password,Type)value ({$dataName},{$dataPassword},{$dataType});");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/userDel/{dataID}', function ($dataID) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "delete from user where id={$dataID};");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/userUp/{dataID}/{value1}/{value2}/{value3}', function ($dataID, $value1, $value2, $value3) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "UPDATE user
        SET Username = {$value1}, Password= {$value2},Type = {$value3}
        WHERE id={$dataID};");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/userGetAll', function () {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "select * from user;");
        $help = $data->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
        return response($help);
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/userGet/{Id}', function ($Id) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "select * from user where id={$Id};");
        $help = $data->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
        return response($help);
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/product_factAdd/{data1ID}/{data2ID}/{Price}/{Qte}/{Tva}', function ($data1ID, $data2ID, $Price, $Qte, $Tva) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "insert into product_fact (Id_Fact, Id_Prod, Product_Price, Product_Qte, TVA) value ({$data1ID}, {$data2ID}, {$Price},{$Qte},{$Tva});");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/product_factDel/{dataID1}/{dataID2}', function ($dataID1, $dataID2) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "delete from product_fact where Id_Fact={$dataID1} and Id_Prod={$dataID2};");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/product_factUp/{dataID1}/{dataID2}/{value1}/{value2}/{value3}', function ($dataID1, $dataID2, $value1, $value2, $value3) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "UPDATE product_fact
        SET Product_Price = {$value1}, Product_Qte= {$value2},TVA = {$value3}
        WHERE Id_Fact={$dataID1} and Id_Prod={$dataID2};");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/product_factGetAll', function () {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "select * from product_fact;");
        $help = $data->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
        return response($help);
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/product_factGet/{Id1}/{Id2}', function ($Id1, $Id2) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "select * from product_fact where Id_Fact={$Id1} and Id_Prod={$Id2};");
        $help = $data->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
        return response($help);
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/productAdd/{Value1}/{Value2}/{Value3}/{Value4}/{Value5}/{Value6}/{Value7}/{Value8}/{Value9}', function ($Value1, $Value2, $Value3, $Value4, $Value5, $Value6, $Value7, $Value8, $Value9) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "insert into product (Bar_Code, Reference, Name, Buying_Price, Selling_Price, Stock, Photo, Id_Groupe, Id_Deposit) value ({$Value1},{$Value2},{$Value3},{$Value4},{$Value5},{$Value6},{$Value7},{$Value8},{$Value9});");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/productDel/{dataID}', function ($dataID) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "delete from product where id={$dataID};");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/productUp/{dataID}/{Value1}/{Value2}/{Value3}/{Value4}/{Value5}/{Value6}/{Value7}/{Value8}/{Value9}', function ($dataID, $Value1, $Value2, $Value3, $Value4, $Value5, $Value6, $Value7, $Value8, $Value9) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "UPDATE product
        SET Bar_Code={$Value1}, Reference={$Value2}, Name={$Value3}, Buying_Price={$Value4}, Selling_Price={$Value5}, Stock={$Value6}, Photo={$Value7}, Id_Groupe={$Value8}, Id_Deposit={$Value9}
        WHERE id={$dataID};");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/productGetAll', function () {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "select * from product;");
        $help = $data->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
        return response($help);
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/productGet/{Id}', function ($Id) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "select * from product where id={$Id};");
        $help = $data->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
        return response($help);
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/bondelivraisonAdd/{Value1}/{Value2}/{Value3}/{Value4}/{Value5}/{Value6}', function ($Value1, $Value2, $Value3, $Value4, $Value5, $Value6) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "insert into bondelivraison (Date, Old_Reste, Reste, Payment, Id_Client, Id_User) value ({$Value1},{$Value2},{$Value3},{$Value4},{$Value5},{$Value6});");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/bondelivraisonDel/{dataID}', function ($dataID) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "delete from bondelivraison where id={$dataID};");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/bondelivraisonUp/{dataID}/{Value1}/{Value2}/{Value3}/{Value4}/{Value5}/{Value6}', function ($dataID, $Value1, $Value2, $Value3, $Value4, $Value5, $Value6) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "UPDATE bondelivraison
        SET Date={$Value1}, Old_Reste={$Value2}, Reste={$Value3}, Payment={$Value4}, Id_Client=={$Value5}, Id_User={$Value6}
        WHERE id={$dataID};");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/bondelivraisonGetAll', function () {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "select * from bondelivraison;");
        $help = $data->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
        return response($help);
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/bondelivraisonGet/{Id}', function ($Id) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "select * from bondelivraison where id={$Id};");
        $help = $data->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
        return response($help);
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/groupeAdd/{Value1}', function ($Value1) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "insert into groupe (Name) value ({$Value1});");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/groupeDel/{dataID}', function ($dataID) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "delete from groupe where id={$dataID};");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/groupeUp/{dataID}/{Value1}', function ($dataID, $Value1) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "UPDATE groupe
        SET Name={$Value1}
        WHERE id={$dataID};");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/groupetGetAll', function () {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "select * from groupe;");
        $help = $data->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
        return response($help);
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/groupeGet/{Id}', function ($Id) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "select * from groupe where id={$Id};");
        $help = $data->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
        return response($help);
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/factureAdd/{Value1}/{Value2}/{Value3}/{Value4}/{Value5}/{Value6}/{Value7}/{Value8}/{Value9}', function ($Value1, $Value2, $Value3, $Value4, $Value5, $Value6, $Value7, $Value8, $Value9) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "insert into facture (Date, Id_Client, Id_Seller, Payment, Reste, Solde, Type, Update_Date, Update_Time) value ({$Value1},{$Value2},{$Value3},{$Value4},{$Value5},{$Value6},{$Value7},{$Value8},{$Value9});");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/factureDel/{dataID}', function ($dataID) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "delete from facture where id={$dataID};");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/factureUp/{dataID}/{Value1}/{Value2}/{Value3}/{Value4}/{Value5}/{Value6}/{Value7}/{Value8}/{Value9}', function ($dataID, $Value1, $Value2, $Value3, $Value4, $Value5, $Value6, $Value7, $Value8, $Value9) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "UPDATE facture
        SET Date={$Value1}, Id_Client={$Value2}, Id_Seller={$Value3}, Payment={$Value4}, Reste={$Value5}, Solde={$Value6}, Type={$Value7}, Update_Date={$Value8}, Update_Time={$Value9}
        WHERE id={$dataID};");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/factureGetAll', function () {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "select * from facture;");
        $help = $data->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
        return response($help);
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/factureGet/{Id}', function ($Id) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "select * from facture where id={$Id};");
        $help = $data->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
        return response($help);
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/depositAdd/{Value1}', function ($Value1) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "insert into deposit (Name) value ({$Value1});");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/depositDel/{dataID}', function ($dataID) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "delete from deposit where id={$dataID};");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/depositUp/{dataID}/{Value1}', function ($dataID, $Value1) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "UPDATE deposit
        SET Name={$Value1}
        WHERE id={$dataID};");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/depositGetAll', function () {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "select * from deposit;");
        $help = $data->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
        return response($help);
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/depositGet/{Id}', function ($Id) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "select * from deposit where id={$Id};");
        $help = $data->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
        return response($help);
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/clientAdd/{Value1}/{Value2}/{Value3}/{Value4}/{Value5}/{Value6}/{Value7}', function ($Value1, $Value2, $Value3, $Value4, $Value5, $Value6, $Value7) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "insert into client (Name, Address, Phone_Num, Sold_Total, Reste, Paid, Credit) value ({$Value1},{$Value2},{$Value3},{$Value4},{$Value5},{$Value6},{$Value7});");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/clientDel/{dataID}', function ($dataID) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "delete from client where id={$dataID};");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/clientUp/{dataID}/{Value1}/{Value2}/{Value3}/{Value4}/{Value5}/{Value6}/{Value7}', function ($dataID, $Value1, $Value2, $Value3, $Value4, $Value5, $Value6, $Value7) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "UPDATE client
        SET Name={$Value1}, Address={$Value2}, Phone_Num={$Value3}, Sold_Total={$Value4}, Reste={$Value5}, Paid={$Value6}, Credit={$Value7}
        WHERE id={$dataID};");
        mysqli_close($conn);
        return response("Done");
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/clientGetAll', function () {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "select * from client;");
        $help = $data->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
        return response($help);
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});

route::get('/clientGet/{Id}', function ($Id) {
    try {
        $conn = mysqli_connect('127.0.0.1:3307', "root", "", "memo");
        $data = mysqli_query($conn, "select * from client where id={$Id};");
        $help = $data->fetch_all(MYSQLI_ASSOC);
        mysqli_close($conn);
        return response($help);
    } catch (Exception) {
        return response("oops, something went wrong", 404);
    }
});
