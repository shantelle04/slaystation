<!DOCTYPE html>
<html>
<head>
 <title>DRUGS</title>
 <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        padding: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ccc;
    }

    th {
        background-color: #088F8F;
        color: white;
    }

    tr:hover {
        background-color: #f2f2f2;
    }

    a {
        text-decoration: none;
    }

    a button {
        background-color: #088F8F;
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
    }

    a button:hover {
        background-color: #077F7F;
    }

    img {
        width: 100px;
        height: 100px;
    }
    h1{
        color: #088F81;
        font-size: 45px;
        text-align: center;
    }
</style>
</head>
<body>
<table>
    <h1>DRUGS AVAILABLE</h1>
    <tr>
        <th>DRUG ID NUMBER</th>
        <th>DRUG NAME</th>
        <th>DRUG MANUFACTURER</th>
        <th>IMAGE</th>
        <th>STOCK</th>
        <th>OPERATIONS</th>
    </tr>

    <?php
        
        $sqll = "SELECT * FROM Drug_E_Dispensing.drugstock";
        $resultt = mysqli_query($conn , $sqll);

        if($resultt){
            while($row = mysqli_fetch_assoc($resultt)){
                $drugId = $row['drugId'];
                $drugName = $row['drugName'];
                $drugManufacturer = $row['drugManufacturer'];
                $image = $row['image'];
                $drugCategory= $row['drugCategory'];
                $stock= $row['stock'];

                echo 'pp<tr> 
                        <td>'.$drugId.'</td>
                        <td>'.$drugName.'</td>
                        <td>'.$drugManufacturer.'</td>
                        <td><img src="' . $image . '" alt="Drug Image"></td>
                        <td>'.$drugCategory.'</td>
                        <td>'.$stock.'</td>
                        <td>
                            <a href="adddrugstock.php?Id='.$drugId.'"><button>ADD</button></a>
                            <a href="deletedrugstock.php?removeId='.$drugId.'"><button>REMOVE</button></a>
                            <a href="orderdrug.php?orderId='.$drugId.'"><button>ORDER</button></a>
                        </td>
                    </tr>';
            }
        }
    ?>
</table>
<br>
<a href="pharmacist.php"><button>BACK</button></a>
</body>
</html>
