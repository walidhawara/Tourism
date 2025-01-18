

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
    session_start();
    include('config.php');
    $x="SELECT book.*,user.username,trip.* FROM book,user,trip WHERE book.book_user_id=user.id AND book.book_trip_id=trip.trip_id AND user.id=$_SESSION[id]  ";
    $result=mysqli_query($conn,$x);
    //$dataa=mysqli_fetch_assoc($result);
    $zz=0;
    $total=0;
    while($data=mysqli_fetch_assoc($result) ){
        $total=$data['price'] * $data['num_ticket'];
        
        if($zz==0){
            echo'
            <table class="table caption-top">
            <caption>List of users</caption>
                <thead>
                    <tr>
                    <th scope="col">number</th>
                    <th scope="col">name</th>
                    <th scope="col">trip_name</th>
                    <th scope="col">num_tictet</th>
                    <th scope="col">price</th>
                    <th scope="col">phone</th>
                    </tr>
                </thead>';
                
        }
        $zz++;
       
        
        echo"
            <table class='table caption-top'>
                <tbody>
                    <tr>
                    <th scope='row'>$zz</th>
                    <td>$data[username]</td>
                    <td>$data[trip_name]</td>
                    <td>$data[num_ticket]</td>
                    <td>$total$</td>
                    <td>$data[book_phone]</td>
                    </tr>
                </tbody>
                </table>
                ";
            // <center>
            //     <main>
            //         <div class='card' style='width: 18rem;'>
            //         $data[username]
            //             <div class='card-body'>
            //                 <h5 class='card-title'> tickets---> $data[num_ticket]</h5>
            //                 <p class='card-text'>phone--->  $data[book_phone]</p>
            //              ---------   <a href='delete_book.php? id=$data[book_id]' class='btn btn-danger'>delete</a>
            //                 </div>
            //         </div>  
            //     </main>
            // </center>
            // <br><br>
        

    }
    
    
    ?>

</body>
</html>