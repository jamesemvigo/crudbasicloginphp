
<?php
include("connection.php");
$sql = "select * from crudtable";

$query = $conn->query($sql);

?>
<html>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
            
         <header>
          <table>
          <tr>
            <th><a href="index.php"> Sign Up</a>  || </th> </th><th><a href="dashboard.php">Dashboard</a></th></tr>
          </table>
         </header>
         <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">User List</p>
           
         <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Phone</th>
      <th scope="col">Pan</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
if($query->num_rows > 0){


  while($result = $query->fetch_assoc()){
  ?>
 <tr>
      <th scope="row"><?php echo $result['id'];?></th>
      <td><?php echo $result['phone'];?></td>
      <td><?php echo $result['pan'];?></td>
      <td><?php echo $result['name'];?></td>
      <td><?php echo $result['email'];?></td>
      <td><?php echo $result['password'];?></td>
      <td><a href="edit.php?id=<?php echo $result['id']?>">Edit</a> || <a href="delete.php"></a>Delete</td>
    </tr>
    
<?php  
  }

}else{

echo "No data found";

}



//registeraction.php?name=nidhin&mobile=878788&email=nidhin@gmail.com&address=ajsdhjkas

?>

  
   
  </tbody>
</table>

         </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
      
 